<?php

	/**
	 * @package Region Halland ACF Page Education Repeater
	 */
	/*
	Plugin Name: Region Halland ACF Page Education Repeater
	Description: ACF-fält för extra fält nederst på en utbildning-sida
	Version: 1.6.1
	Author: Roland Hydén
	License: GPL-3.0
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
			        	'key' => 'field_1000045',
			            'label' => __('Utbildningsområde', 'regionhalland'),
			            'name' => 'name_1000046',
			            'type' => 'select',
			            'instructions' => __('Välj ett utbildningsområde.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000047',
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
			                6 => __('Barn- och fritid', 'regionhalland'),
			                2 => __('Bygg och anläggning', 'regionhalland'),
			                3 => __('El- och energi', 'regionhalland'),
			                4 => __('Fordon och transport', 'regionhalland'),
			                5 => __('Industriteknik', 'regionhalland'),
			                8 => __('Handel och administration', 'regionhalland'),
			                10 => __('Hantverk', 'regionhalland'),
			                9 => __('Naturbruk', 'regionhalland'),
			                7 => __('Restaurang och livsmedel', 'regionhalland'),
			                12 => __('VVS och fastighet', 'regionhalland'),
			                1 => __('Vård- och omsorg', 'regionhalland'),
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
			        1 => array(
			        	'key' => 'field_1000056',
			            'label' => __('Utbildningens namn', 'regionhalland'),
			            'name' => 'name_1000057',
			            'type' => 'text',
			            'instructions' => __('Ange utbildningen namn. Max 100 tecken.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 100,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        
			        2 => array(
			        	'key' => 'field_1000048',
			            'label' => __('Kort om utbildningen', 'regionhalland'),
			            'name' => 'name_1000049',
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
			        3 => array(
			            'key' => 'field_1000050',
			            'label' => __('Information om respektive utbildning', 'halland'),
			            'name' => 'name_1000051',
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
					        	'key' => 'field_1000052',
					            'label' => __('Kommun', 'regionhalland'),
					            'name' => 'name_1000053',
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
					                4 => __('Laholm', 'regionhalland'),
					                5 => __('Varberg', 'regionhalland'),
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
			                    'key' => 'field_1000054',
			                    'label' => __('Länk', 'halland'),
			                    'name' => 'name_1000055',
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

	// Metod för att hämta ut utbildningar
	function get_region_halland_acf_page_education_repeater_items() {

				// Preparerar array för att hämta ut nyheter
		$args = array( 
			'post_type'		=> 'utbildning',
			'numberposts' 	=> -1,
			'sort_column' 	=> 'post_title', 
			'sort_order' 	=> 'asc'
		);

		// Hämta valda utbildningar
		$myPages = get_posts($args);

		// Loopa igenom valda utbildningar
		foreach ($myPages as $page) {

			// Hämta ACF-objektet för link
			$page_field_object 		= get_field('name_1000051', $page->ID);
			
			$field_type_area = get_field_object('field_1000045');
			$page->education_id = get_field('name_1000046', $page->ID);
			$page->education_area = $field_type_area['choices'][get_field('name_1000046', $page->ID)];
		
			$page->education_name = get_field('name_1000057', $page->ID);
			$page->education_read_more = get_field('name_1000049', $page->ID);

			$page->metadata = get_region_halland_acf_page_education_repeater_metadata($page_field_object);

		}

		// Preparera en multiarray
		$myVardOmsorg = array();
		$myByggAnlaggning = array();
		$myElEnergi = array();
		$myFordonTransport = array();
		$myIndustriteknik = array();
		$myBarnFritid = array();
		$myRestaurangLivsmedel = array();
		$myHandelAdministration = array();
		$myNaturbruk = array();
		$myHantverk = array();
		$myOvrigt = array();
		$myVvsFastighet = array();

		// Loopa igenom alla sidor och attacha till respektive label-array
		foreach ($myPages as $page) {
			$myPage = $page;
			if ($myPage->education_id == "1") {
				array_push($myVardOmsorg, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "2") {
				array_push($myByggAnlaggning, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "3") {
				array_push($myElEnergi, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "4") {
				array_push($myFordonTransport, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "5") {
				array_push($myIndustriteknik, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "6") {
				array_push($myBarnFritid, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "7") {
				array_push($myRestaurangLivsmedel, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "8") {
				array_push($myHandelAdministration, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "9") {
				array_push($myNaturbruk, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "10") {
				array_push($myHantverk, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "11") {
				array_push($myOvrigt, array(
		           'page'  => $myPage
		        ));
			}
			if ($myPage->education_id == "12") {
				array_push($myVvsFastighet, array(
		           'page'  => $myPage
		        ));
			}
		}

		// sortera om respektive array i bokstavsordning	
		usort($myVardOmsorg, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myByggAnlaggning, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myElEnergi, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myFordonTransport, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myIndustriteknik, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myBarnFritid, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myRestaurangLivsmedel, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myHandelAdministration, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myNaturbruk, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myHantverk, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myOvrigt, 'region_halland_acf_page_education_repeater_sort_by_title');
		usort($myVvsFastighet, 'region_halland_acf_page_education_repeater_sort_by_title');
		
		// Dela upp i arrayer per label	
		$myMultiPages = array();
		$myMultiPages['vard_omsorg'] = $myVardOmsorg;
		$myMultiPages['bygg_anlaggning'] = $myByggAnlaggning;
		$myMultiPages['el_energi'] = $myElEnergi;
		$myMultiPages['fordon_transport'] = $myFordonTransport;
		$myMultiPages['industriteknik'] = $myIndustriteknik;
		$myMultiPages['barn_fritid'] = $myBarnFritid;
		$myMultiPages['restaurang_livsmedel'] = $myRestaurangLivsmedel;
		$myMultiPages['handel_administration'] = $myHandelAdministration;
		$myMultiPages['naturbruk'] = $myNaturbruk;
		$myMultiPages['hantverk'] = $myHantverk;
		$myMultiPages['ovrigt'] = $myOvrigt;
		$myMultiPages['vvs_fastighet'] = $myVvsFastighet;
		
		// Returnera array med alla poster
		return $myMultiPages;

	}

	// Funktion för att sortera en array på kolumnen 'education_name'
	function region_halland_acf_page_education_repeater_sort_by_title($a, $b) {
		return strcmp($a['page']->education_name,$b['page']->education_name);
	}

	function get_region_halland_acf_page_education_repeater_metadata($page_field_object) {

		$myData = array();
        foreach ($page_field_object as $value) {
	        $intKommunID = $value['name_1000053'];
	        $strKommunName = get_region_halland_acf_page_education_repeater_kommun_namn($intKommunID);
	        $arrLink = $value['name_1000055'];
	        if (is_array($arrLink)) {
		        $intHasLink = 1;
		        $strLinkTitle = $arrLink['title'];
		        $strLinkUrl = $arrLink['url'];
		        $strLinkTarget = $arrLink['target'];
	        } else {
		        $intHasLink = 1;
		        $strLinkTitle = "";
		        $strLinkUrl = "";
		        $strLinkTarget = "";
	        }
	        array_push($myData, array(
	           'kommun_id' => $intKommunID,
	           'kommun_name' => $strKommunName,
	           'has_link' => $intHasLink,
	           'link_title' => $strLinkTitle,
	           'link_url' => $strLinkUrl,
	           'link_target' => $strLinkTarget
	        ));
        }

		return $myData;

	}

	function get_region_halland_acf_page_education_repeater_kommun_namn($id) {
	
		switch ($id) {
			case "1":
		        $myKommun = "Falkenberg";
		        break;
		    case "2":
		        $myKommun = "Halmstad";
		        break;
		    case "3":
		        $myKommun = "Hylte";
		        break;
		    case "4":
		        $myKommun = "Laholm";
		        break;
		    case "5":
		        $myKommun = "Varberg";
		        break;
		 }

		 return $myKommun; 
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