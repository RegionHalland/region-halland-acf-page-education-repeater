<?php

	/**
	 * @package Region Halland ACF Page Education Repeater
	 */
	/*
	Plugin Name: Region Halland ACF Page Education Repeater
	Description: ACF-fält för extra fält nederst på en utbildning-sida
	Version: 1.0.0
	Author: Roland Hydén
	License: Free to use
	Text Domain: regionhalland
	*/

	// vid 'init', anropa funktionen region_halland_register_utbildning()
	add_action( 'init', 'region_halland_register_education_repeater' );

	// Denna funktion registrerar en ny post_type och gör den synlig i wp-admin
	function region_halland_register_education_repeater() {
		
		// Vilka labels denna post_type ska ha
		$labels = array(
		        'name'                  => _x( 'Utbildningar', 'Post type general name', 'textdomain' ),
		        'singular_name'         => _x( 'Utbildning', 'Post type singular name', 'textdomain' ),
		        'menu_name'             => _x( 'Utbildningar', 'Admin Menu text', 'textdomain' ),
		        'add_new'               => __( 'Lägg till ny', 'textdomain' ),
        		'add_new_item'          => __( 'Lägg till ny utbildning', 'textdomain' ),
        		'edit_item'          	=> __( 'Editera utbildning', 'textdomain' )
		    );
		
		// Inställningar för denna post_type 
	    $args = array(
	        'labels' => $labels,
	        'rewrite' => array('slug' => 'utbildning'),
			'show_ui' => true,
			'has_archive' => false,
			'publicly_queryable' => true,
			'public' => true,
			'query_var' => false,
			'menu_icon' => 'dashicons-megaphone',
	        'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	    );

	    // Registrera post_type
	    register_post_type('utbildning', $args);
	    
	}

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_education_repeater_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_education_repeater_field_groups() {

		// Om funktionen existerar
		if (function_exists('acf_add_local_field_group')):

			// Skapa formlärfält
			acf_add_local_field_group(array(
			    
			    'key' => 'group_1000045',
			    'title' => 'Utbildningsinformation',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000046',
			            'label' => __('Kommun', 'regionhalland'),
			            'name' => 'name_1000047',
			            'type' => 'select',
			            'instructions' => __('Välj en kommun.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000048',
			                        'operator' => '!=',
			                        'value' => '1',
			                    ),
			                ),
			            ),
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                1 => __('Falkenberg', 'regionhalland'),
			                2 => __('Halmstad', 'regionhalland'),
			                3 => __('Hylte', 'regionhalland'),
			                4 => __('Kungsbacka', 'regionhalland'),
			                5 => __('Laholm', 'regionhalland'),
			                6 => __('Varberg', 'regionhalland'),
			            ),
			            'default_value' => array(
			            ),
			            'allow_null' => 0,
			            'multiple' => 0,
			            'ui' => 0,
			            'ajax' => 0,
			            'return_format' => 'value',
			            'placeholder' => '',
			        ),
			        1 => array(
			        	'key' => 'field_1000049',
			            'label' => __('Utbildningsområde', 'regionhalland'),
			            'name' => 'name_1000050',
			            'type' => 'select',
			            'instructions' => __('Välj ett utbildningsområde.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000051',
			                        'operator' => '!=',
			                        'value' => '1',
			                    ),
			                ),
			            ),
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                1 => __('Vård- och omsorg', 'regionhalland'),
			                2 => __('Bygg och anläggning', 'regionhalland'),
			                3 => __('El- och energi', 'regionhalland'),
			                4 => __('Fordon och transport', 'regionhalland'),
			                5 => __('Industriteknik', 'regionhalland'),
			                6 => __('Barn- och fritid', 'regionhalland'),
			                7 => __('Restaurang och livsmedel', 'regionhalland'),
			                8 => __('Handel och administration', 'regionhalland'),
			                9 => __('Naturbruk', 'regionhalland'),
			                10 => __('Hantverk', 'regionhalland'),
			                11 => __('Övrigt', 'regionhalland'),
			            ),
			            'default_value' => array(
			            ),
			            'allow_null' => 0,
			            'multiple' => 0,
			            'ui' => 0,
			            'ajax' => 0,
			            'return_format' => 'value',
			            'placeholder' => '',
			        ),
			        2 => array(
			        	'key' => 'field_1000052',
			            'label' => __('Kort om utbildningen', 'regionhalland'),
			            'name' => 'name_1000053',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv kortfattat utbildningen innehåll. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        4 => array(
	                    'key' => 'field_1000130',
	                    'label' => __('Länk', 'halland'),
	                    'name' => 'name_1000131',
	                    'type' => 'link',
	                    'instructions' => __('Lägg till länk för exempelvis mer utbildningsinformation.', 'halland'),
	                    'required' => 0,
	                    'conditional_logic' => 0,
	                    'wrapper' => array(
	                        'width' => '',
	                        'class' => '',
	                        'id' => '',
	                    ),
	                    'return_format' => 'array',
	                ),
			        5 => array(
			            'key' => 'field_1000054',
			            'label' => __('Information om respektive utbildning', 'halland'),
			            'name' => 'name_1000055',
			            'type' => 'repeater',
			            'instructions' => __('Klicka på "Lägg till rad" för att lägga till en ny utbildning.', 'halland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'collapsed' => '',
			            'min' => 0,
			            'max' => 25,
			            'layout' => 'row',
			            'button_label' => '',
			            'sub_fields' => array(
			               0 => array( 
				              'key' => 'field_1000056', 
				              'label' => __('Startar', 'regionhalland'), 
				              'name' => 'name_1000057', 
				              'type' => 'date_time_picker', 
				              'instructions' => __('Fyll i när utbildningen börjar.', 'regionhalland'), 
				              'required' => 0, 
				              'conditional_logic' => 0, 
				              'wrapper' => array( 
				                  'width' => '', 
				                  'class' => '', 
				                  'id' => '', 
				              ), 
				              'display_format' => 'Y-m-d', 
				              'return_format' => 'Y-m-d', 
				              'first_day' => 1, 
				          ),
			              1 => array( 
				              // utbildningSlutTid
				          	  'key' => 'field_1000058', 
				              'label' => __('Slutar', 'regionhalland'), 
				              'name' => 'name_1000059', 
				              'type' => 'date_time_picker', 
				              'instructions' => __('Fyll i när utbildningen avslutas.', 'regionhalland'), 
				              'required' => 0, 
				              'conditional_logic' => 0, 
				              'wrapper' => array( 
				                  'width' => '', 
				                  'class' => '', 
				                  'id' => '', 
				              ), 
				              'display_format' => 'Y-m-d', 
				              'return_format' => 'Y-m-d', 
				              'first_day' => 1, 
				          ),
				          2 => array( 
				          	  'key' => 'field_1000060', 
				              'label' => __('Sista ansökningsdag', 'regionhalland'), 
				              'name' => 'name_1000061', 
				              'type' => 'date_time_picker', 
				              'instructions' => __('Fyll i datum för sista ansökningsdag.', 'regionhalland'), 
				              'required' => 0, 
				              'conditional_logic' => 0, 
				              'wrapper' => array( 
				                  'width' => '', 
				                  'class' => '', 
				                  'id' => '', 
				              ), 
				              'display_format' => 'Y-m-d', 
				              'return_format' => 'Y-m-d', 
				              'first_day' => 1, 
				          ),
				          3 => array(
				              // utbildningLänk
		            		  'key' => 'field_1000062',
		            		  'label' => __('Länk', 'regionhalland'),
		            		  'name' => 'name_1000063',
		            		  'type' => 'link',
		            		  'instructions' => __('Länk till mer utbildninginformation. Kan vara en extern länk, en sida eller ett inlägg.', 'regionhalland'),
		            		  'required' => 0,
		            		  'conditional_logic' => 0,
		            		  'wrapper' => array(
		                		'width' => '',
		                		'class' => '',
		                		'id' => '',
		            		  ),
		            		  'return_format' => 'array',
		        		  ),
		        		  4 => array(
				        	'key' => 'field_1000064',
				            'label' => __('Studieform', 'regionhalland'),
				            'name' => 'name_1000065',
				            'type' => 'select',
				            'instructions' => __('Välj studieform.', 'regionhalland'),
				            'required' => 1,
				            'conditional_logic' => array(
				                0 => array(
				                    0 => array(
				                        'field' => 'field_1000066',
				                        'operator' => '!=',
				                        'value' => '1',
				                    ),
				                ),
				            ),
				            'wrapper' => array(
				                'width' => '',
				                'class' => '',
				                'id' => '',
				            ),
				            'choices' => array(
				                1 => __('Närstudier', 'regionhalland'),
				                2 => __('Flexstudier', 'regionhalland'),
				                3 => __('Distansstudier', 'regionhalland'),
				            ),
				            'default_value' => array(
				            ),
				            'allow_null' => 0,
				            'multiple' => 0,
				            'ui' => 0,
				            'ajax' => 0,
				            'return_format' => 'value',
				            'placeholder' => '',
				        ),
		        		5 => array(
				        	'key' => 'field_1000067',
				            'label' => __('Studiefart', 'regionhalland'),
				            'name' => 'name_1000068',
				            'type' => 'select',
				            'instructions' => __('Välj studiefart.', 'regionhalland'),
				            'required' => 1,
				            'conditional_logic' => array(
				                0 => array(
				                    0 => array(
				                        'field' => 'field_1000069',
				                        'operator' => '!=',
				                        'value' => '1',
				                    ),
				                ),
				            ),
				            'wrapper' => array(
				                'width' => '',
				                'class' => '',
				                'id' => '',
				            ),
				            'choices' => array(
				                1 => __('Helfart/heltid', 'regionhalland'),
				                2 => __('Halvfart', 'regionhalland'),
				            ),
				            'default_value' => array(
				            ),
				            'allow_null' => 0,
				            'multiple' => 0,
				            'ui' => 0,
				            'ajax' => 0,
				            'return_format' => 'value',
				            'placeholder' => '',
				        ),
				        
			            ),
		        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'utbildning',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;

	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_education_repeater_activate() {
		
		// Vi aktivering, registrera post_type "utbildning"
		region_halland_register_education_repeater();

		// Tala om för wordpress att denna post_type finns
		// Detta gör att permalink fungerar
	    flush_rewrite_rules();
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_education_repeater_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_education_repeater_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_education_repeater_deactivate');

?>