<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2014 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('allods')) {
	class allods extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '5.0.1';
		protected $this_game		= 'allods';
		protected $types			= array('classes', 'races', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> true
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Kanians
						2 	=> 'all',		// Elves
						3 	=> 'all',		// Gibberlings
						4 	=> 'all',		// Xadaganians
						5 	=> 'all',		// Orcs
						6 	=> 'all',		// Arisen
					),
				),
			),
		);
		
		protected $class_colors = array(
			1	=> '#bf8040',
			2	=> '#efffbf',
			3	=> '#ffcf3f',
			4	=> '#ff3f3f',
			5	=> '#7f9fff',
			6	=> '#ff8000',
			7	=> '#ff7fff',
			8	=> '#80df20',
			9	=> '#7fffff',
			10	=> '#869CAE',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
				),
				'atbranch'    => array(
					'type'          => 'dropdown',
					'category'      => 'character',
					'lang'          => 'uc_branch',
					'options'       => array('-' => 'uc_abranch_0', 'Wächter' => 'uc_abranch_1', 'Champion' => 'uc_abranch_2', 'Templer' => 'uc_abranch_3', 'Kreuzritter' => 'uc_abranch_4', 'Jäger' => 'uc_abranch_5', 'Ranger' => 'uc_abranch_6', 'Priester' => 'uc_abranch_7', 'Kleriker' => 'uc_abranch_8', 'Animist' => 'uc_abranch_9', 'Druide' => 'uc_abranch_10', 'Erzmagier' => 'uc_abranch_11', 'Zauberer' => 'uc_abranch_12', 'Dämonist' => 'uc_abranch_13', 'Orakel' => 'uc_abranch_14', 'Seher' => 'uc_abranch_15', 'Troubadour' => 'uc_abranch_16', 'Minnesänger' => 'uc_abranch_17', 'Eroberer' => 'uc_abranch_18', 'Grobian' => 'uc_abranch_19', 'Rächer' => 'uc_abranch_20', 'Plünderer' => 'uc_abranch_21', 'Saboteur' => 'uc_abranch_22', 'Kopfjäger' => 'uc_abranch_23', 'Inquisitor' => 'uc_abranch_24', 'Ketzer' => 'uc_abranch_25', 'Schamane' => 'uc_abranch_26', 'Theurg' => 'uc_abranch_27', 'Hexer' => 'uc_abranch_28', 'Verderber' => 'uc_abranch_29', 'Savant' => 'uc_abranch_30', 'Mentalist' => 'uc_abranch_31', 'Okkultist' => 'uc_abranch_32', 'Tambour' => 'uc_abranch_33', 'Chanter' => 'uc_abranch_34'),
					'undeletable'   => true,
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 40,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		public function admin_settings() {
			$settingsdata_admin = array(
				'game' => array(
					'allodssettings' => array(
						'allods_faction'	=> array(
							'lang'		=> 'allods_faction',
							'fieldtype'	=> 'dropdown',
							'size'		=> '1',
							'options'	=> $this->game->get('factions'),
						),
					)
				)
			);
			return $settingsdata_admin;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('plate'), 'value' => 'class:1,2,3'),
					array('name' => $this->glang('leather'), 'value' => 'class:1,2,3,6,7,8,9,10'),
					array('name' => $this->glang('cloth'), 'value' => 'class:3,4,5,6,7'),
				));
			}
		}

		public function install($install=false){}
	}
}
?>