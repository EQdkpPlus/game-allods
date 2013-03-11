<?php

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

// Category 'character' is a fix one! All others are created dynamically!

$xml_fields = array(

	'gender'	=> array(
		'type'			=> 'dropdown',
		'category'		=> 'character',
		'name'			=> 'uc_gender',
		'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
		'undeletable'	=> true,
		'visible'		=> true
	),
	
        'atbranch'    => array(
        'type'          => 'dropdown',
        'category'      => 'character',
        'name'          => 'uc_branch',
        'options'       => array('-' => 'uc_abranch_0', 'Wächter' => 'uc_abranch_1', 'Champion' => 'uc_abranch_2', 'Templer' => 'uc_abranch_3', 'Kreuzritter' => 'uc_abranch_4', 'Jäger' => 'uc_abranch_5', 'Ranger' => 'uc_abranch_6', 'Priester' => 'uc_abranch_7', 'Kleriker' => 'uc_abranch_8', 'Animist' => 'uc_abranch_9', 'Druide' => 'uc_abranch_10', 'Erzmagier' => 'uc_abranch_11', 'Zauberer' => 'uc_abranch_12', 'Dämonist' => 'uc_abranch_13', 'Orakel' => 'uc_abranch_14', 'Seher' => 'uc_abranch_15', 'Troubadour' => 'uc_abranch_16', 'Minnesänger' => 'uc_abranch_17', 'Eroberer' => 'uc_abranch_18', 'Grobian' => 'uc_abranch_19', 'Rächer' => 'uc_abranch_20', 'Plünderer' => 'uc_abranch_21', 'Saboteur' => 'uc_abranch_22', 'Kopfjäger' => 'uc_abranch_23', 'Inquisitor' => 'uc_abranch_24', 'Ketzer' => 'uc_abranch_25', 'Schamane' => 'uc_abranch_26', 'Theurg' => 'uc_abranch_27', 'Hexer' => 'uc_abranch_28', 'Verderber' => 'uc_abranch_29', 'Savant' => 'uc_abranch_30', 'Mentalist' => 'uc_abranch_31', 'Okkultist' => 'uc_abranch_32', 'Tambour' => 'uc_abranch_33', 'Chanter' => 'uc_abranch_34'),
        'undeletable'   => true,
        'visible'       => true,
    ),
    
	'guild'	=> array(
		'type'			=> 'text',
		'category'		=> 'character',
		'name'			=> 'uc_guild',
		'size'			=> 40,
		'undeletable'	=> true,
		'visible'		=> true	
	),

);
?>