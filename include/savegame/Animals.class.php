<?php
/**
 *
 * This file is part of the "FS19 Web Stats" package.
 * Copyright (C) 2017-2019 John Hawk <john.hawk@gmx.net>
 *
 * "FS19 Web Stats" is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "FS19 Web Stats" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
if (! defined ( 'IN_FS19WS' )) {
	exit ();
}
class Animals {
	private static $farmId;
	private static $xml;
	private static $stables = array ();
	public static function loadStables($xml) {
		self::$farmId = $_SESSION ['farmId'];
		self::$xml = $xml;
		self::analyzeItems ();
	}
	private static function analyzeItems() {
		foreach ( self::$xml ['items'] as $item ) {
			$stableName = cleanFileName ( $item ['filename'] );
			$stable = intval($item ['id']);
			//var_dump($stable);
			$l_stable = translate ( $stableName );
			if ($item ['className'] == 'AnimalHusbandry' && $item ['farmId'] == self::$farmId) {
				$productivity = floatval ( $item ['globalProductionFactor'] ) * 100;
				self::$stables [$stable] = array (
						'forHorses' => false,
						'name' => $l_stable,
						'productivity' => floor ( $productivity ),
						'animals' => array (),
						'state' => array ()
				
				);
				// if ($item ['farmId'] == 5) {
				// 	var_dump(self::$stables [$stable]);
				// 	var_dump("<br>");
				// 	//var_dump($item ['id']);
				// }
				foreach ( $item->module as $module ) {
					switch ($module ['name']) {
						case 'animals' :
							foreach ( $module->animal as $animal ) {
								$animalType = strval ( $animal ['fillType'] );
								// var_dump("<br>");
								// //var_dump($animal);
								// var_dump($animalType);
								if (stristr ( $animalType, 'HORSE' ) !== false) {
									// Animal is a horse
									$horseName = preg_replace("/[^a-zA-Z0-9]/", "", strval ( $animal ['name'] ));
									//var_dump($horseName);
									$horseNameURL = urlencode ( $horseName );
									$fitnessScale = floatval ( $animal ['fitnessScale'] );
									$healthScale = floatval ( $animal ['healthScale'] );
									$dirtScale = floatval ( $animal ['dirtScale'] );
									self::$stables [$stable] ['animals'] [$horseNameURL] = array (
											'name' => $horseName,
											'fitnessScale' => floor ( $fitnessScale * 100 ),
											'healthScale' => floor ( $healthScale * 100 ),
											'dirtScale' => floor ( (1 - $dirtScale) * 100 ),
											'ridingTimer' => floor ( (floatval ( $animal ['ridingTimer'] ) / 300000) * 100 ),
											'value' => 49500 * $fitnessScale * $healthScale + 500 * (1 - $dirtScale),
											'isHorse' => true,
											'image' => $animalType 
									);
								} else {
									// Animal is not a Horse
									$l_animal = translate ( $animalType );
									// if the animal type is alrady set
									if (isset ( self::$stables [$stable] ['animals'] [$animalType] )) {
										// if ($item ['farmId'] == 5) {
										// 	var_dump("stable and animal type already set for stable id " . strval(self::$stables [$stable] ['id']) . "<br>");
										// }
										self::$stables [$stable] ['animals'] [$animalType] ['count'] ++;
									} else {
										self::$stables [$stable] ['animals'] [$animalType] = array (
												'name' => $l_animal,
												'count' => 1,
												'breeding' => 0,
												'reproRate' => '--:--',
												'nextAnimal' => '--:--',
												'isHorse' => false,
												'image' => $animalType 
										);
										// if ($item ['farmId'] == 5) {
										// 	var_dump("stable and animal type are new for stable id " . strval(self::$stables [$stable] ['id']) . "<br>");
										// }
									}
								}
							}
							foreach ( $module->breeding as $breeding ) {
								$animal = strval ( $breeding ['fillType'] );
								if (isset(self::$stables [$stable] ['animals'] [$animal] ['count'])) {
									$count = self::$stables [$stable] ['animals'] [$animal] ['count'];
								} else {
									$count = 0;
								}
								if ($count > 1 && $productivity != 0) {
									$l_animal = translate ( $animal );
									$breeding = floatval ( $breeding ['percentage'] );
									$reproRate = ceil ( (self::getReproRate ( $animal ) / $count * 3600 * 100 / $productivity) / 900 ) * 900;
									$nextAnimal = ceil ( ($reproRate * (1 - $breeding)) / 900 ) * 900;
									self::$stables [$stable] ['animals'] [$animal] ['reproRate'] = self::getTimeString ( $reproRate );
									self::$stables [$stable] ['animals'] [$animal] ['nextAnimal'] = self::getTimeString ( $nextAnimal );
								}
							}
							break;
						case 'foodSpillage' :
							$cleanlinessFactor = floatval ( $module ['cleanlinessFactor'] );
							self::$stables [$stable] ['state'] ['foodSpillage'] = array (
									'name' => '##CLEANLINESS##',
									'value' => floor ( $cleanlinessFactor * 100 ),
									'unit' => '%',
									'factor' => floor ( $cleanlinessFactor * 100 ) 
							);
							break;
						case 'straw' :
							$fillType = strtoupper ( $module ['name'] );
							$fillCapacity = floatval ( $module ['fillCapacity'] );
							$fillLevel = floatval ( $module->fillLevel ['fillLevel'] );
							if ($fillCapacity == 0 or !isset($fillCapacity)) {
							    $factor = 0;
							} else {
								$factor = floor ( $fillLevel / $fillCapacity * 100 );
							};
							
							self::$stables [$stable] ['state'] [strval ( $module ['name'] )] = array (
									'name' => translate ( 'STRAW' ) . ' / ' . translate ( 'STRAWPELLETS' ),
									'value' => floor ( $fillLevel ),
									'unit' => 'l',
									'factor' => $factor 
							);
							break;
						case 'water' :
							$fillCapacity = floatval ( $module ['fillCapacity'] );
							$fillLevel = floatval ( $module->fillLevel ['fillLevel'] );
							if ($fillCapacity == 0 or !isset($fillCapacity)) {
							    $factor = 0;
							} else {
								$factor = floor ( $fillLevel / $fillCapacity * 100 );
							};																												
							self::$stables [$stable] ['state'] ['water'] = array (
									'name' => translate ( 'WATER' ),
									'value' => floor ( $fillLevel ),
									'unit' => 'l',
									'factor' => $factor 
							);
							break;
						case 'manure' :
							$fillCapacity = floatval ( $module ['fillCapacity'] );
							$fillLevel = floatval ( $module ['manureToDrop'] );
							if ($fillCapacity == 0 or !isset($fillCapacity)) {
							    $factor = 0;
							} else {
								$factor = floor ( $fillLevel / $fillCapacity * 100 );
							};														
							self::$stables [$stable] ['product'] ['manure'] = array (
									'name' => translate ( 'MANURE' ),
									'value' => floor ( $fillLevel ),
									'unit' => 'l',
									'factor' => $factor 
							);
							break;
						case 'liquidManure' :
							$fillCapacity = floatval ( $module ['fillCapacity'] );
							$fillLevel = floatval ( $module->fillLevel ['fillLevel'] );
							if ($fillCapacity == 0 or !isset($fillCapacity)) {
							    $factor = 0;
							} else {
								$factor = floor ( $fillLevel / $fillCapacity * 100 );
							};																
							self::$stables [$stable] ['product'] ['liquidManure'] = array (
									'name' => translate ( 'LIQUIDMANURE' ),
									'value' => floor ( $fillLevel ),
									'unit' => 'l',
									'factor' => $factor 
							);
							break;
						case 'milk' :
							$fillCapacity = floatval ( $module ['fillCapacity'] );
							$fillLevel = floatval ( $module->fillLevel ['fillLevel'] );
							if ($fillCapacity == 0 or !isset($fillCapacity)) {
							    $factor = 0;
							} else {
								$factor = floor ( $fillLevel / $fillCapacity * 100 );
							};
							self::$stables [$stable] ['product'] ['milk'] = array (
									'name' => translate ( 'MILK' ),
									'value' => floor ( $fillLevel ),
									'unit' => 'l',
									'factor' => $factor 
							);
							break;
						case 'pallets' :
							$fillLevel = floatval ( $module ['palletFillDelta'] );
							self::$stables [$stable] ['product'] ['wool'] = array (
									'name' => translate ( 'WOOL' ), // If they're eggs, it'll be changed below
									'value' => floor ( $fillLevel ),
									'unit' => 'l',
									'factor' => 100 
							);
							break;
						case 'food' :
							foreach ( $module->fillLevel as $trough ) {
								$fillType = strval ( $trough ['fillType'] );
								$fillLevel = $trough ['fillLevel'];
								self::$stables [$stable] ['food'] [$fillType] = array (
										'name' => translate ( $fillType ),
										'value' => floor ( $fillLevel ),
										'unit' => 'l',
										'factor' => 100 
								);
							}
							break;
					}
				}
				$food = array_keys ( self::$stables [$stable] ['food'] ); // troughs
				//var_dump(self::$stables [$stable]);
				//var_dump($animal);
				//var_dump($food);
				unset($animalTypeShort);
				if (isset($animalType)) {
					$animalTypeShort = substr($animalType, 0, strpos($animalType, "_"));
				}				
				//var_dump($animalTypeShort);
				/*if (in_array ( 'MAIZE', $food )) {
					self::calculateTrougs ( $stable, 'pig' );
				} elseif (in_array ( 'FORAGE', $food )) {
					self::calculateTrougs ( $stable, 'cow' );
				} elseif (in_array ( 'OAT', $food )) {
					self::$stables [$stable] ['forHorses'] = true;
					self::calculateTrougs ( $stable, 'horse' );
				} elseif (in_array ( 'GRASS_WINDROW', $food )) {
					self::calculateTrougs ( $stable, 'sheep' );
				} */
				if (in_array ( 'OAT', $food )) {
					self::$stables [$stable] ['forHorses'] = true;
					self::calculateTrougs ( $stable, 'HORSE' );					
				} elseif (isset($animalType)) {
					// var_dump("<br>");
					//var_dump($animalType);
					// var_dump($animalTypeShort);					
					self::calculateTrougs ( $stable, $animalTypeShort );					
				} 
				if (strpos($animalType,'CHICKEN') !== false) {
					//var_dump($animalType);
					if (isset(self::$stables [$stable] ['product'] ['wool'])) {
						self::$stables [$stable] ['product'] ['egg'] = self::$stables [$stable] ['product'] ['wool'];
						unset ( self::$stables [$stable] ['product'] ['wool'] );
					}					
					self::$stables [$stable] ['product'] ['egg'] ['name'] = translate ( 'EGG' );
					self::calculateTrougs ( $stable, 'chicken' );
				}
			}
		}
	}
	public static function getFoodRates() {
		// food indexes to calulate max food value
		return array(
			"COW" => 3500,
	   	"SHEEP" => 500,
	   	"GOAT" => 500,
	   	"RAM" => 500,
	   	"CHICKEN" => 50,
	   	"DUCK" => 50,
	   	"PIG" => 900,
	   	"HORSE" => 4000
		);
	}	
	public static function getHorseValues() {
		$ret = array (
				'summary' => 0,
				'animals' => array () 
		);
		foreach ( self::$stables as $stable ) {
			if ($stable ['forHorses']) {
				foreach ( $stable ['animals'] as $animal ) {
					$ret ['summary'] += $animal ['value'];
					$ret ['animals'] [$animal ['name']] = $animal ['value'];
				}
			}
		}
		return $ret;
	}
	public static function getStables() {
		// var_dump("aaaaaaaaaaaaaaaaaaaaaa");
		// var_dump(self::$stables);
		// var_dump("######################");
		return self::$stables;
	}
	private static function calculateTrougs($stable, $animal) {
		$troughs = array (
				'PRODUNIT1' => array (
						'trough1' => array (
								'MILK' 
						)
				),			
				'PIG' => array (
						'trough1' => array (
								'MAIZE' 
						),
						'trough2' => array (
								'WHEAT',
								'BARLEY',
								'RYE'//,
								//'CLOVER'
						),
						'trough3' => array (
								'SOYBEAN',
								'CANOLA',
								'SUNFLOWER'								
						),
						'trough4' => array (
								'POTATO',
								'SUGARBEET'//,
								//'CARROT'
						), 
				),
				'COW' => array (
						'trough1' => array (
								'FORAGE' 
						),
						'trough2' => array (
								'SILAGE',
								'DRYGRASS_WINDROW',
								'HAYPELLETS'
						),
						'trough3' => array (
								'GRASS_WINDROW' 
						)  
				),
				'SHEEP' => array (
						'trough1' => array (
								'GRASS_WINDROW',
								'DRYGRASS_WINDROW',
								'HAYPELLETS'
						)//, 
						//'trough2' => array (
						//		'CLOVER' 
						//) 						
				),
				'GOAT' => array (
						'trough1' => array (
								'GRASS_WINDROW',
								'DRYGRASS_WINDROW',
								'CLOVER_WINDROW' 
						) 
				),
				'RAM' => array (
						'trough1' => array (
								'GRASS_WINDROW',
								'DRYGRASS_WINDROW',
								'CLOVER_WINDROW' 
						) 
				),
				'CHICKEN' => array (
						'trough1' => array (
								'WHEAT',
								'BARLEY'
						)//,
						//'trough2' => array (
						//		'SUNFLOWER',
						//		'MAIZE',
						//		'CANOLA'
						//),
						//'trough3' => array (
						//		'POTATO',
						//		'CARROT',
						//		'SUGARBEET'
						//)  
				),
				'DUCK' => array (
						'trough1' => array (
								'WHEAT',
								'BARLEY',
								'MAIZE'  
						) 
				),				
				'HORSE' => array (
						'trough1' => array (
								'OAT' 
						),
						'trough2' => array (
								'DRYGRASS_WINDROW',
								'HAYPELLETS' 
						) 
				) 
		);
		//foreach ( $troughs [$animal] as $trough => $troughFoods ) {
		//var_dump("bbbbbbbbbbbbbbbbb");	
		//var_dump($troughs);
		//var_dump("ccccccccccccccccc");	
		// if(! isset($troughs [$animal])) {
		// 	var_dump("not set");
		// 	var_dump($animal);
		// }
		if (isset($troughs [$animal])) {
			foreach ( $troughs [$animal] as $trough => $troughFoods ) {
				//var_dump($troughFoods);
				foreach ( $troughFoods as $food ) {
					if (! isset ( self::$stables [$stable] ['trough'] [$trough] )) {
						//var_dump(self::$stables);
						//var_dump($food);	
						if (isset(self::$stables [$stable] ['food'] [$food] ['value'])) {
							$food_value = self::$stables [$stable] ['food'] [$food] ['value'];
						} else {
							$food_value = 0;
						}

						self::$stables [$stable] ['trough'] [$trough] = array (
								'name' => translate ( $food ),
								'value' => $food_value, //self::$stables [$stable] ['food'] [$food] ['value'],
								'unit' => 'l',
								'factor' => 100 
						);
					} else {
						self::$stables [$stable] ['trough'] [$trough] ['name'] .= ' / ' . translate ( $food );
						if (isset(self::$stables [$stable] ['food'] [$food] ['value'])) {
							self::$stables [$stable] ['trough'] [$trough] ['value'] += self::$stables [$stable] ['food'] [$food] ['value'];
						}
					}
				}
			}
		}
	}
	private static function getReproRate($animalName) {
		if (stristr ( $animalName, 'COW' ) !== false) {
			return 1200;
		}
		if (stristr ( $animalName, 'PIG' ) !== false) {
			return 144;
		}
		if (stristr ( $animalName, 'SHEEP' ) !== false) {
			return 960;
		}
		if (stristr ( $animalName, 'GOAT' ) !== false) {
			return 960;
		}
		if (stristr ( $animalName, 'RAM' ) !== false) {
			return 960;
		}				
		if (stristr ( $animalName, 'CHICKEN' ) !== false) {
			return 240;
		}
		if (stristr ( $animalName, 'DUCK' ) !== false) {
			return 240;
		}		
		return 999;
	}
	private static function getTimeString($time) {
		$hours = (gmdate ( "d", $time ) - 1) * 24 + gmdate ( "H", $time );
		return $hours . ':' . gmdate ( "i", $time );
	}
}