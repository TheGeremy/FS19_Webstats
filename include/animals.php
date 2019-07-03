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
$smarty->assign ( 'stables', $stables );

// if at least one stable exists on map
if (sizeof ( $stables ) > 0) {
	// find stable that has at least one animal
	foreach (array_keys($stables) as $stable) {
		foreach (array_keys ($stables [$stable] ['animals']) as $animal) {
			//echo($key . " has value: " .$value);
			$count = $stables [$stable] ['animals'] [$animal] ["count"];
			if ($count >= 1) {
				$firstStable = $stable;
				$firstAnimal = $animal;
				break 2;
			} else {
				$firstStable = null;
				$firstAnimal = null;				
			}
		}
	}
} else {
	$firstStable = null;
	$firstAnimal = null;
}

$currentStable = GetParam ( 'stable', 'G', $firstStable );
$currentAnimal = GetParam ( 'animal', 'G', $firstAnimal );

$smarty->assign ( 'currentStable', $currentStable );
$smarty->assign ( 'currentAnimal', $currentAnimal );