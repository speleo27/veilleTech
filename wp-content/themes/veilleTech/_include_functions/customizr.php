<?php

/**
 * add company id
 */

function customize_company($wp_customize){
	// add the section in personal menu
	$wp_customize->add_section('id_company',array(
		'title'=>__('Identité de la société','veilleTech'),
		'priority'=> 1
	));

	//add settings company name
	$wp_customize->add_setting('company_name', array(
		'default'=>''
	));

	//add controls company name
	$wp_customize->add_control('company_name',array(
		'section'=>'id_company',
		'settings'=>'company_name',
		'label'=>'Nom de la société'
	));

	//add settings company address
	$wp_customize->add_setting('company_address', array(
		'default'=>''
	));

	//add controls company name
	$wp_customize->add_control('company_address',array(
		'section'=>'id_company',
		'settings'=>'company_address',
		'label'=>'adresse de la société'
	));

	//add settings company zip
	$wp_customize->add_setting('company_zip', array(
		'default'=>''
	));

	//add controls company zip
	$wp_customize->add_control('company_zip',array(
		'section'=>'id_company',
		'settings'=>'company_zip',
		'label'=>'code postal'
	));

	//add settings company city
	$wp_customize->add_setting('company_city', array(
		'default'=>''
	));

	//add controls company city
	$wp_customize->add_control('company_city',array(
		'section'=>'id_company',
		'settings'=>'company_city',
		'label'=>'ville'
	));

	//add settings company phone
	$wp_customize->add_setting('company_phone', array(
		'default'=>''
	));

	//add controls company city
	$wp_customize->add_control('company_phone',array(
		'section'=>'id_company',
		'settings'=>'company_phone',
		'label'=>'Téléphone',
		'type'=>'phone'
	));

	//add settings company RCS
	$wp_customize->add_setting('company_rcs', array(
		'default'=>''
	));

	//add controls company RCS
	$wp_customize->add_control('company_rcs',array(
		'section'=>'id_company',
		'settings'=>'company_rcs',
		'label'=>'Numéro de RCS'
	));

	//add settings company about
	$wp_customize->add_setting('company_about', array(
		'default'=>''
	));

	//add controls company about
	$wp_customize->add_control('company_about',array(
		'section'=>'id_company',
		'settings'=>'company_about',
		'label'=>'Présentation courte de la société',
		'type'=>'textarea'

	));

	//add settings company logo
	$wp_customize->add_setting('company_logo', array(
		'default'=>''
	));

	//add controls company logo
	$wp_customize->add_control(
		new WP_Customize_Media_Control($wp_customize,'company_log',array(
		'section'=>'id_company',
		'settings'=>'company_logo',
		'label'=>'Logo de la société',
		'type'=>'media',
		'mine_type'=>'image'

	)));

}
add_action('customize_register','customize_company');

/**
 * Add open hours
 */

function customize_open_hours($wp_customize){
	$wp_customize->add_section('open-hours',array(
		'title'=>__('Horaires d\'ouverture','veilleTech'),
		'priority'=> 2
	));

	//add settings Monday
	$wp_customize->add_setting('monday', array(
		'default'=>''
	));

	//add controls monday
	$wp_customize->add_control('monday',array(
		'section'=>'open-hours',
		'settings'=>'monday',
		'label'=>'Lundi'
	));

	//add settings tuesday
	$wp_customize->add_setting('tuesday', array(
		'default'=>''
	));

	//add controls tuesday
	$wp_customize->add_control('tuesday',array(
		'section'=>'open-hours',
		'settings'=>'tuesday',
		'label'=>'Mardi'
	));

	//add settings wednesday
	$wp_customize->add_setting('wednesday', array(
		'default'=>''
	));

	//add controls wednesday
	$wp_customize->add_control('wednesday',array(
		'section'=>'open-hours',
		'settings'=>'wednesday',
		'label'=>'Mercredi'
	));

	//add settings thrusday
	$wp_customize->add_setting('thursday', array(
		'default'=>''
	));

	//add controls thursday
	$wp_customize->add_control('thursday',array(
		'section'=>'open-hours',
		'settings'=>'thursday',
		'label'=>'Jeudi'
	))

	;//add settings friday
	$wp_customize->add_setting('friday', array(
		'default'=>''
	));

	//add controls friday
	$wp_customize->add_control('friday',array(
		'section'=>'open-hours',
		'settings'=>'friday',
		'label'=>'Vendredi'
	));

	//add settings saturday
	$wp_customize->add_setting('saturday', array(
		'default'=>''
	));

	//add controls saturday
	$wp_customize->add_control('saturday',array(
		'section'=>'open-hours',
		'settings'=>'saturday',
		'label'=>'Samedi'
	));

	//add settings Sunday
	$wp_customize->add_setting('sunday', array(
		'default'=>''
	));

	//add controls Sunday
	$wp_customize->add_control('sunday',array(
		'section'=>'open-hours',
		'settings'=>'sunday',
		'label'=>'Dimanche'
	));

}
add_action('customize_register','customize_open_hours');



/**
 * section intro de la page d'accueil
 */
function customize_home_introduction($wp_customize){
	$wp_customize->add_section('accueil',array(
		'title'=>__('Accueil','veilleTech'),
		'priority'=> 3
	));
	//add settings titre
	$wp_customize->add_setting('title', array(
		'default'=>''
	));

	//add controls titre
	$wp_customize->add_control('title',array(
		'section'=>'accueil',
		'settings'=>'title',
		'label'=>'title'
	));

	//add setting texte
	$wp_customize->add_setting('text',array(
		'default'=>''
	));

	//add controls texte
	$wp_customize->add_control('text',array(
		'section'=>'accueil',
		'settings'=>'text',
		'label'=>'texte',
		'type'=> 'textarea'
	));
}
add_action('customize_register','customize_home_introduction');