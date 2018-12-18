<?php
/**
 *
 * This file is part of the "FS19 Web Stats" package.
 * Copyright (C) 2017-2018 John Hawk <john.hawk@gmx.net>
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
class Savegame {
	public $demandIsRunning = false;
	public $greatDemands = array ();
	public $missions = array ();
	public $farms = array ();
	public $xml = array ();
	protected $xmlFiles = array (
			'environment.xml',
			'economy.xml',
			'farms.xml',
			'items.xml',
			'missions.xml' 
	);
	private $ftpURL = '';
	private $cache = './cache/';
	public function __construct($config) {
		if (! file_exists ( $this->cache )) {
			mkdir ( $this->cache );
		}
		switch ($config ['type']) {
			case 'ftp' :
				$this->ftpURL = "ftp://" . $config ['user'] . ":" . $config ['pass'] . "@" . $config ['server'] . ":" . $config ['port'] . $config ['path'];
				$updateFiles = true;
				if (file_exists ( $this->cache . $this->xmlFiles [0] )) {
					$this->xml [basename ( $this->xmlFiles [0], '.xml' )] = simplexml_load_file ( $this->cache . $this->xmlFiles [0] );
					$lastDayTime = intval ( $this->xml ['environment']->currentDay ) * 86400 + intval ( $this->xml ['environment']->dayTime * 60 );
					self::getFileByFTP ( $this->xmlFiles [0] );
					$careerEnvironment = simplexml_load_file ( $this->cache . $this->xmlFiles [0] );
					$newDayTime = intval ( $careerEnvironment->currentDay ) * 86400 + intval ( $careerEnvironment->dayTime * 60 );
					if ($newDayTime == $lastDayTime) {
						$updateFiles = false;
					}
				} else {
					self::getFileByFTP ( $this->xmlFiles [0] );
				}
				$this->xml [basename ( $this->xmlFiles [0], '.xml' )] = simplexml_load_file ( $this->cache . $this->xmlFiles [0] );
				for($s1 = 1; $s1 < sizeof ( $this->xmlFiles ); $s1 ++) {
					if ($updateFiles) {
						self::getFileByFTP ( $this->xmlFiles [$s1] );
					}
					$this->xml [basename ( $this->xmlFiles [$s1], '.xml' )] = simplexml_load_file ( $this->cache . $this->xmlFiles [$s1] );
				}
				
				break;
			case 'local' :
				$this->cache = $config ['path'];
				break;
			case 'api' :
				break;
		}
		self::loadInitialData ();
	}
	public function currentDay() {
		return intval ( $this->xml ['environment']->currentDay );
	}
	public function dayTime() {
		return gmdate ( "H:i", intval ( $this->xml ['environment']->dayTime * 60 ) );
	}
	private function loadInitialData() {
		self::loadFarms ();
		self::loadMissions ();
		self::loadGreatDemands ();
	}
	private function loadFarms() {
		foreach ( $this->xml ['farms'] as $farm ) {
			$farmId = intval ( $farm ['farmId'] );
			$this->farms [$farmId] = array (
					'name' => strval ( $farm ['name'] ),
					'color' => intval ( $farm ['color'] ),
					'loan' => intval ( $farm ['loan'] ),
					'money' => floatval ( $farm ['money'] ),
					'players' => array () 
			);
			if (isset ( $farm->players )) {
				foreach ( $farm->players->player as $player ) {
					$this->farms [$farmId] ['players'] [] = array (
							'name' => strval($player ['lastNickname']),
							'isFarmManager' => get_bool ( $player ['farmManager'] ) 
					);
				}
			}
		}
	}
	private function loadMissions() {
		foreach ( $this->xml ['missions'] as $mission ) {
			$missionData = array (
					'type' => sprintf ( '##MIS_%s##', strtoupper ( strval ( $mission ['type'] ) ) ),
					'reward' => intval ( $mission ['reward'] ),
					'status' => floatval ( $mission ['status'] ),
					'success' => get_bool ( $mission ['success'] ) 
			);
			if (isset ( $mission ['farmId'] )) {
				$missionData += array (
						'farmId' => intval ( $mission ['farmId'] ) 
				);
			}
			foreach ( $mission as $details ) {
				if ($details->getName () == 'field') {
					$missionData += array (
							'field' => intval ( $details ['id'] ) 
					);
				}
			}
			$this->missions [] = $missionData;
		}
	}
	private function loadGreatDemands() {
		foreach ( $this->xml ['economy']->greatDemands->greatDemand as $greatDemand ) {
			$stationId = strval ( $greatDemand ['itemId'] );
			$fillTypeName = strval ( $greatDemand ['fillTypeName'] );
			$demandMultiplier = floatval ( $greatDemand ['demandMultiplier'] );
			$isRunning = get_bool ( $greatDemand ['isRunning'] );
			$this->demandIsRunning = $this->demandIsRunning || $isRunning;
			$l_fillType = translate ( $fillTypeName );
			if (isset ( $this->greatDemands [$l_fillType] )) {
				$this->greatDemands [$l_fillType] ['locations'] += array (
						$stationId => array (
								'demandMultiplier' => $demandMultiplier,
								'isRunning' => $isRunning 
						) 
				);
			} else {
				$this->greatDemands [$l_fillType] = array (
						'i3dName' => $fillTypeName,
						'locations' => array (
								$stationId => array (
										'demandMultiplier' => $demandMultiplier,
										'isRunning' => $isRunning 
								) 
						) 
				);
			}
		}
	}
	private function getFileByFTP($file) {
		$fp = fopen ( $this->cache . $file, "w" );
		$url = $this->ftpURL . $file;
		$curl = curl_init ();
		curl_setopt ( $curl, CURLOPT_URL, $url );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 0 );
		curl_setopt ( $curl, CURLOPT_UPLOAD, 0 );
		curl_setopt ( $curl, CURLOPT_FILE, $fp );
		$result = curl_exec ( $curl );
		curl_close ( $curl );
		fclose ( $fp );
	}
}