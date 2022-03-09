<?php

/**
 * add company id
 */

function customize_company($wp_customize){
	// add the section in personal menu
	$wp_customize->add_section('id_company',array(
		'title'=>__('identité de la société','veilleTech'),
		'priority'=> 0
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

	//add settings company rcs
	$wp_customize->add_setting('company_rcs', array(
		'default'=>''
	));

	//add controls company city
	$wp_customize->add_control('company_rcs',array(
		'section'=>'id_company',
		'settings'=>'company_rcs',
		'label'=>'RCS'
	));




}
add_action('customize_register','customize_company');
