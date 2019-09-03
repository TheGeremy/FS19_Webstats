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
include ('./include/savegame/Animals.class.php');
Animals::loadStables ( $savegame::$xml );
$stables = Animals::getStables ();
$no_animals = true;

// food rates per one animal to calulate max food value
$food_rates = Animals::getFoodRates ();

// if at least one stable exists on map
if (sizeof ( $stables ) > 0) {
	// find stable that has at least one animal
	foreach (array_keys($stables) as $stable) {
		// if stable has animals
		if (array_key_exists('animals', $stables [$stable])) {
			// find animal that has count property
			foreach (array_keys ($stables [$stable] ['animals']) as $animal) {
				if (array_key_exists('count', $stables [$stable] ['animals'] [$animal]) ) {
					$no_animals = false;
					$firstStable = $stable;
					$firstAnimal = $animal;
					break 2;
				} else {
					// horses has no count property
					if ($stables [$stable] ['animals'] [$animal] ["isHorse"]) {
						$no_animals = false;
						$firstStable = $stable;
						$firstAnimal = $animal;
						break 2;				
					}
				}
			}
		}
	}
} 

if ($no_animals) {
	$firstStable = null;
	$firstAnimal = null;
}

// not ideal solution but quick
if (!$no_animals) {
	// if any animal, then count by types COW,SHEEP,CHICKEN,PIG,HORSE
	$animals_count = array(
		"COW" => 0,
	   "SHEEP" => 0,
	   "CHICKEN" => 0,
	   "PIG" => 0,
	   "HORSE" => 0
	);

	// find stable that has at least one animal
	foreach (array_keys($stables) as $stable) {
		// if stable has animals
		if (array_key_exists('animals', $stables [$stable])) {
			// find animal that has count property
			foreach (array_keys ($stables [$stable] ['animals']) as $animal) {
				if (array_key_exists('count', $stables [$stable] ['animals'] [$animal]) ) {
					$animalType = substr($animal, 0, strpos($animal, "_"));
					if ($animalType == "COW") {
						$animals_count['COW'] += $stables [$stable] ['animals'] [$animal] ['count'];
					}
					if ($animalType == "SHEEP") {
						$animals_count['SHEEP'] += $stables [$stable] ['animals'] [$animal] ['count'];
					}
					if ($animalType == "CHICKEN") {
						$animals_count['CHICKEN'] += $stables [$stable] ['animals'] [$animal] ['count'];
					}						
					if ($animalType == "PIG") {
						$animals_count['PIG'] += $stables [$stable] ['animals'] [$animal] ['count'];
					}				
				} elseif ($stables [$stable] ['animals'] [$animal] ["isHorse"]) {
					$animals_count['HORSE'] += 1;
				}
			}
		}
	}
}

// calculate actual food level in % and insert into big array $stables
if (!$no_animals) {
	// find stable that has at least one animal
	foreach (array_keys($stables) as $stable) {
		// if stable has animals
		if (array_key_exists('animals', $stables [$stable])) {
			// find animal that has count property
			foreach (array_keys ($stables [$stable] ['animals']) as $animal) {
				// calculate only for those animals that exist on map
				if (array_key_exists('count', $stables [$stable] ['animals'] [$animal]) ) {
					$animalType = substr($animal, 0, strpos($animal, "_"));
					$i = 0;
					foreach ($stables [$stable] ['trough'] as $food) {
													    // actual food value in liters divided by animal count multiplied by animal rates per animal
						$valuePercent = floor(   ($food ['value']/($animals_count[$animalType]*$food_rates[$animalType])                )*100);
						$i++;
						// insert value in $stable array under trough trough#, 
						// later accessible in template like $food.valuePercent
						$stables [$stable] ['trough'] ['trough'.$i] ['valuePercent'] = $valuePercent;	
						$stables [$stable] ['animals_count'] = $animals_count[$animalType];
					}
				} elseif ($stables [$stable] ['animals'] [$animal] ["isHorse"]) {
					// horse has no standart code like HORSE_ and color, but name you give him in game...
					$i = 0;
					foreach ($stables [$stable] ['trough'] as $food) {
						$valuePercent = floor(($food ['value']/($animals_count['HORSE']*$food_rates['HORSE']))*100);
						$i++;
						$stables [$stable] ['trough'] ['trough'.$i] ['valuePercent'] = $valuePercent;
						$stables [$stable] ['animals_count'] = $animals_count['HORSE'];
					}
				}
			}
		}
	}
}

$currentStable = GetParam ( 'stable', 'G', $firstStable );
$currentAnimal = GetParam ( 'animal', 'G', $firstAnimal );

$smarty->assign ( 'currentStable', $currentStable );
$smarty->assign ( 'currentAnimal', $currentAnimal );
$smarty->assign ( 'stables', $stables );