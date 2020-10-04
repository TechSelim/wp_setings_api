<?php
/**
 * -----------------------------------------------------------------
 * | Theme Customizer
 * -----------------------------------------------------------------
*/
function fatraining_customize_register( $wp_customize  )
{
	/**
	 * --------------------------------------------------
	 * Add sections
	 * --------------------------------------------------
	*/
	$wp_customize->add_section('fatraining_section_name', array(
		'title'      => __('Fast Aid Theme Section', 'fatraining'),
		'priority'   => 30,
	));

	/**
	 * --------------------------------------------------
	 *  Add Setings
	 * --------------------------------------------------
	 */

	$wp_customize->add_setting('header_text', array(
		"default" => "",
		"transport" => "postMessage",
	));

	/**
	 * --------------------------------------------------
	 *  Add Controls
	 * --------------------------------------------------
	 */
	$wp_customize->add_control(
		'header_text',
		array(
			'label'    => __('Top Header Text', 'fatraining'),
			'section'  => 'fatraining_section_name',
			'settings' => 'header_text',
			'type'     => 'textarea'
		)
	);

	/**
	 * ------------------------------------------------------
	 * Auto updated setings
	 * ------------------------------------------------------
	 */
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';

}
add_action('customize_register', 'customize_register');