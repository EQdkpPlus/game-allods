<?php
/*	Project:	EQdkp-Plus
 *	Package:	Allods game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Warrior',
		2	=> 'Paladin',
		8	=> 'Scout',
		3	=> 'Healer',
		6	=> 'Warden',
		5	=> 'Mage',
		4	=> 'Summoner',
		7	=> 'Psionicist',
		9	=> 'Bard',
		10	=> 'Engineer',
	),
	
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Kanians',
		2	=> 'Elves',
		3	=> 'Gibberlings',
		4	=> 'Xadaganians',
		5	=> 'Orcs',
		6	=> 'Arisen'
	),

	'lang' => array(
		'allods'						=> 'Allods Online',
		'plate'							=> 'Plate',
		'cloth'							=> 'Cloth',
		'leather'						=> 'Leather',

		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_branch'						=> 'Archtype-Branch',
		'uc_guild'						=> 'Guild',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Allods Online Settings',
		'uc_faction'					=> 'Faction',
		'uc_faction_help'				=> 'Select the default faction',
	
		// Archetype-Branch
		'uc_abranch_0'	=> '-',
		'uc_abranch_1'	=> 'Brawler',
		'uc_abranch_2'	=> 'Champion',
		'uc_abranch_3'	=> 'Templar',
		'uc_abranch_4'	=> 'Crusader',
		'uc_abranch_5'	=> 'Trickster',
		'uc_abranch_6'	=> 'Ranger',
		'uc_abranch_7'	=> 'Priest',
		'uc_abranch_8'	=> 'Cleric',
		'uc_abranch_9'	=> 'Animist',
		'uc_abranch_10'	=> 'Druid',
		'uc_abranch_11'	=> 'Archmage',
		'uc_abranch_12'	=> 'Magician',
		'uc_abranch_13'	=> 'Demonologist',
		'uc_abranch_14'	=> 'Seer',
		'uc_abranch_15'	=> 'Vanquisher',
		'uc_abranch_16'	=> 'Brute',
		'uc_abranch_17'	=> 'Avenger',
		'uc_abranch_18'	=> 'Reaver',
		'uc_abranch_19'	=> 'Stalker',
		'uc_abranch_20'	=> 'Marauder',
		'uc_abranch_21'	=> 'Inquisitor',
		'uc_abranch_22'	=> 'Heretic',
		'uc_abranch_23'	=> 'Shaman',
		'uc_abranch_24'	=> 'Sorcerer',
		'uc_abranch_25'	=> 'Defiler',
		'uc_abranch_26'	=> 'Savant',
		'uc_abranch_27'	=> 'Mentalist',
		'uc_abranch_28'	=> 'Occultist',
		'uc_abranch_29'	=> 'Tambour',
		'uc_abranch_30'	=> 'Chanter',
		'uc_abranch_31'	=> '**place holder**',
		'uc_abranch_32'	=> '**place holder**',
		'uc_abranch_33'	=> '**place holder**',
		'uc_abranch_34'	=> '**place holder**',
	)
);
?>