<?php

if ( ! function_exists( 'dor_mikado_general_options_map' ) ) {
	/**
	 * General options page
	 */
	function dor_mikado_general_options_map() {
		
		dor_mikado_add_admin_page(
			array(
				'slug'  => '',
				'title' => esc_html__( 'General', 'dor' ),
				'icon'  => 'fa fa-institution'
			)
		);
		
		$panel_design_style = dor_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_design_style',
				'title' => esc_html__( 'Design Style', 'dor' )
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'google_fonts',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Google Font Family', 'dor' ),
				'description'   => esc_html__( 'Choose a default Google font for your site', 'dor' ),
				'parent'        => $panel_design_style
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Additional Google Fonts', 'dor' ),
				'parent'        => $panel_design_style
			)
		);
		
		$additional_google_fonts_container = dor_mikado_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'additional_google_fonts_container',
				'dependency' => array(
					'show' => array(
						'additional_google_fonts'  => 'yes'
					)
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font1',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'dor' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'dor' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font2',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'dor' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'dor' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font3',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'dor' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'dor' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font4',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'dor' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'dor' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font5',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'dor' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'dor' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'google_font_weight',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Style & Weight', 'dor' ),
				'description'   => esc_html__( 'Choose a default Google font weights for your site. Impact on page load time', 'dor' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'100'  => esc_html__( '100 Thin', 'dor' ),
					'100i' => esc_html__( '100 Thin Italic', 'dor' ),
					'200'  => esc_html__( '200 Extra-Light', 'dor' ),
					'200i' => esc_html__( '200 Extra-Light Italic', 'dor' ),
					'300'  => esc_html__( '300 Light', 'dor' ),
					'300i' => esc_html__( '300 Light Italic', 'dor' ),
					'400'  => esc_html__( '400 Regular', 'dor' ),
					'400i' => esc_html__( '400 Regular Italic', 'dor' ),
					'500'  => esc_html__( '500 Medium', 'dor' ),
					'500i' => esc_html__( '500 Medium Italic', 'dor' ),
					'600'  => esc_html__( '600 Semi-Bold', 'dor' ),
					'600i' => esc_html__( '600 Semi-Bold Italic', 'dor' ),
					'700'  => esc_html__( '700 Bold', 'dor' ),
					'700i' => esc_html__( '700 Bold Italic', 'dor' ),
					'800'  => esc_html__( '800 Extra-Bold', 'dor' ),
					'800i' => esc_html__( '800 Extra-Bold Italic', 'dor' ),
					'900'  => esc_html__( '900 Ultra-Bold', 'dor' ),
					'900i' => esc_html__( '900 Ultra-Bold Italic', 'dor' )
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'google_font_subset',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Subset', 'dor' ),
				'description'   => esc_html__( 'Choose a default Google font subsets for your site', 'dor' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'latin'        => esc_html__( 'Latin', 'dor' ),
					'latin-ext'    => esc_html__( 'Latin Extended', 'dor' ),
					'cyrillic'     => esc_html__( 'Cyrillic', 'dor' ),
					'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'dor' ),
					'greek'        => esc_html__( 'Greek', 'dor' ),
					'greek-ext'    => esc_html__( 'Greek Extended', 'dor' ),
					'vietnamese'   => esc_html__( 'Vietnamese', 'dor' )
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'first_color',
				'type'        => 'color',
				'label'       => esc_html__( 'First Main Color', 'dor' ),
				'description' => esc_html__( 'Choose the most dominant theme color. Default color is #00bbb3', 'dor' ),
				'parent'      => $panel_design_style
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'page_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'dor' ),
				'description' => esc_html__( 'Choose the background color for page content. Default color is #ffffff', 'dor' ),
				'parent'      => $panel_design_style
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'page_background_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Page Background Image', 'dor' ),
				'description' => esc_html__( 'Choose the background image for page content', 'dor' ),
				'parent'      => $panel_design_style
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'page_background_image_repeat',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Page Background Image Repeat', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will set the background image as a repeating pattern throughout the page, otherwise the image will appear as the cover background image', 'dor' ),
				'parent'        => $panel_design_style
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'selection_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Text Selection Color', 'dor' ),
				'description' => esc_html__( 'Choose the color users see when selecting text', 'dor' ),
				'parent'      => $panel_design_style
			)
		);
		
		/***************** Passepartout Layout - begin **********************/
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'boxed',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Boxed Layout', 'dor' ),
				'parent'        => $panel_design_style
			)
		);
		
			$boxed_container = dor_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'boxed_container',
					'dependency' => array(
						'show' => array(
							'boxed'  => 'yes'
						)
					)
				)
			);
		
				dor_mikado_add_admin_field(
					array(
						'name'        => 'page_background_color_in_box',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'dor' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'dor' ),
						'parent'      => $boxed_container
					)
				);
				
				dor_mikado_add_admin_field(
					array(
						'name'        => 'boxed_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'dor' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'dor' ),
						'parent'      => $boxed_container
					)
				);
				
				dor_mikado_add_admin_field(
					array(
						'name'        => 'boxed_pattern_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'dor' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'dor' ),
						'parent'      => $boxed_container
					)
				);
				
				dor_mikado_add_admin_field(
					array(
						'name'          => 'boxed_background_image_attachment',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'dor' ),
						'description'   => esc_html__( 'Choose background image attachment', 'dor' ),
						'parent'        => $boxed_container,
						'options'       => array(
							''       => esc_html__( 'Default', 'dor' ),
							'fixed'  => esc_html__( 'Fixed', 'dor' ),
							'scroll' => esc_html__( 'Scroll', 'dor' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'paspartu',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Passepartout', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'dor' ),
				'parent'        => $panel_design_style
			)
		);
		
			$paspartu_container = dor_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'paspartu_container',
					'dependency' => array(
						'show' => array(
							'paspartu'  => 'yes'
						)
					)
				)
			);
		
				dor_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_color',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'dor' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'dor' ),
						'parent'      => $paspartu_container
					)
				);
				
				dor_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'dor' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'dor' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				dor_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_responsive_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'dor' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'dor' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				dor_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'disable_top_paspartu',
						'label'         => esc_html__( 'Disable Top Passepartout', 'dor' )
					)
				);
		
				dor_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'enable_fixed_paspartu',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'dor' ),
						'description' => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'dor' )
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'initial_content_width',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'dor' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'dor' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'mkdf-grid-1100' => esc_html__( '1100px - default', 'dor' ),
					'mkdf-grid-1300' => esc_html__( '1300px', 'dor' ),
					'mkdf-grid-1200' => esc_html__( '1200px', 'dor' ),
					'mkdf-grid-1000' => esc_html__( '1000px', 'dor' ),
					'mkdf-grid-800'  => esc_html__( '800px', 'dor' )
				)
			)
		);

		dor_mikado_add_admin_field(
            array(
                'name'          => 'content_grid_lines',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__( 'Display lines in content background', 'dor' ),
                'parent'        => $panel_design_style
            )
        );

		$additional_grid_lines_container = dor_mikado_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'additional_grid_lines_container',
				'dependency' => array(
					'show' => array(
						'content_grid_lines'  => 'yes'
					)
				)
			)
		);

		dor_mikado_add_admin_field(
            array(
	            'name'          => 'grid_lines_in_grid',
	            'type'          => 'yesno',
	            'default_value' => 'no',
	            'label'         => esc_html__( 'Enable Grid Layout', 'dor' ),
	            'description'   => esc_html__( 'Enabling this option will place Content Background Lines in grid', 'dor' ),
	            'parent'        => $additional_grid_lines_container
            )
        );

		dor_mikado_add_admin_field(
			array(
				'name'          => 'preload_pattern_image',
				'type'          => 'image',
				'label'         => esc_html__( 'Preload Pattern Image', 'dor' ),
				'description'   => esc_html__( 'Choose preload pattern image to be displayed until images are loaded', 'dor' ),
				'parent'        => $panel_design_style
			)
		);
		
		/***************** Content Layout - end **********************/
		
		$panel_settings = dor_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_settings',
				'title' => esc_html__( 'Settings', 'dor' )
			)
		);
		
		/***************** Smooth Scroll Layout - begin **********************/
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'page_smooth_scroll',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Scroll', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'dor' ),
				'parent'        => $panel_settings
			)
		);
		
		/***************** Smooth Scroll Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'smooth_page_transitions',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Page Transitions', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'dor' ),
				'parent'        => $panel_settings
			)
		);
		
			$page_transitions_container = dor_mikado_add_admin_container(
				array(
					'parent'          => $panel_settings,
					'name'            => 'page_transitions_container',
					'dependency' => array(
						'show' => array(
							'smooth_page_transitions'  => 'yes'
						)
					)
				)
			);
		
				dor_mikado_add_admin_field(
					array(
						'name'          => 'page_transition_preloader',
						'type'          => 'yesno',
						'default_value' => 'no',
						'label'         => esc_html__( 'Enable Preloading Animation', 'dor' ),
						'description'   => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'dor' ),
						'parent'        => $page_transitions_container
					)
				);
				
				$page_transition_preloader_container = dor_mikado_add_admin_container(
					array(
						'parent'          => $page_transitions_container,
						'name'            => 'page_transition_preloader_container',
						'dependency' => array(
							'show' => array(
								'page_transition_preloader'  => 'yes'
							)
						)
					)
				);
				
					dor_mikado_add_admin_field(
						array(
							'name'   => 'smooth_pt_bgnd_color',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'dor' ),
							'parent' => $page_transition_preloader_container
						)
					);
					
					$group_pt_spinner_animation = dor_mikado_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation',
							'title'       => esc_html__( 'Loader Style', 'dor' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'dor' ),
							'parent'      => $page_transition_preloader_container
						)
					);
					
					$row_pt_spinner_animation = dor_mikado_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation',
							'parent' => $group_pt_spinner_animation
						)
					);
					
					dor_mikado_add_admin_field(
						array(
							'type'          => 'selectsimple',
							'name'          => 'smooth_pt_spinner_type',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Type', 'dor' ),
							'parent'        => $row_pt_spinner_animation,
							'options'       => array(
								'dor_spinner'           => esc_html__( 'Dor Spinner', 'dor' ),
								'rotate_circles'        => esc_html__( 'Rotate Circles', 'dor' ),
								'pulse'                 => esc_html__( 'Pulse', 'dor' ),
								'double_pulse'          => esc_html__( 'Double Pulse', 'dor' ),
								'cube'                  => esc_html__( 'Cube', 'dor' ),
								'rotating_cubes'        => esc_html__( 'Rotating Cubes', 'dor' ),
								'stripes'               => esc_html__( 'Stripes', 'dor' ),
								'wave'                  => esc_html__( 'Wave', 'dor' ),
								'two_rotating_circles'  => esc_html__( '2 Rotating Circles', 'dor' ),
								'five_rotating_circles' => esc_html__( '5 Rotating Circles', 'dor' ),
								'atom'                  => esc_html__( 'Atom', 'dor' ),
								'clock'                 => esc_html__( 'Clock', 'dor' ),
								'mitosis'               => esc_html__( 'Mitosis', 'dor' ),
								'lines'                 => esc_html__( 'Lines', 'dor' ),
								'fussion'               => esc_html__( 'Fussion', 'dor' ),
								'wave_circles'          => esc_html__( 'Wave Circles', 'dor' ),
								'pulse_circles'         => esc_html__( 'Pulse Circles', 'dor' )
							)
						)
					);
					
					dor_mikado_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'smooth_pt_spinner_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Color', 'dor' ),
							'parent'        => $row_pt_spinner_animation
						)
					);
					
					dor_mikado_add_admin_field(
						array(
							'name'          => 'page_transition_fadeout',
							'type'          => 'yesno',
							'default_value' => 'no',
							'label'         => esc_html__( 'Enable Fade Out Animation', 'dor' ),
							'description'   => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'dor' ),
							'parent'        => $page_transitions_container
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'show_back_button',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show "Back To Top Button"', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will display a Back to Top button on every page', 'dor' ),
				'parent'        => $panel_settings
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'responsiveness',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Responsiveness', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will make all pages responsive', 'dor' ),
				'parent'        => $panel_settings
			)
		);
		
		$panel_custom_code = dor_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_custom_code',
				'title' => esc_html__( 'Custom Code', 'dor' )
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'custom_js',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Custom JS', 'dor' ),
				'description' => esc_html__( 'Enter your custom Javascript here', 'dor' ),
				'parent'      => $panel_custom_code
			)
		);
		
		$panel_google_api = dor_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_google_api',
				'title' => esc_html__( 'Google API', 'dor' )
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'google_maps_api_key',
				'type'        => 'text',
				'label'       => esc_html__( 'Google Maps Api Key', 'dor' ),
				'description' => esc_html__( 'Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'dor' ),
				'parent'      => $panel_google_api
			)
		);
	}
	
	add_action( 'dor_mikado_action_options_map', 'dor_mikado_general_options_map', dor_mikado_set_options_map_position( 'general' ) );
}

if ( ! function_exists( 'dor_mikado_page_general_style' ) ) {
	/**
	 * Function that prints page general inline styles
	 */
	function dor_mikado_page_general_style( $style ) {
		$current_style = '';
		$page_id       = dor_mikado_get_page_id();
		$class_prefix  = dor_mikado_get_unique_page_class( $page_id );
		
		$boxed_background_style = array();
		
		$boxed_page_background_color = dor_mikado_get_meta_field_intersect( 'page_background_color_in_box', $page_id );
		if ( ! empty( $boxed_page_background_color ) ) {
			$boxed_background_style['background-color'] = $boxed_page_background_color;
		}
		
		$boxed_page_background_image = dor_mikado_get_meta_field_intersect( 'boxed_background_image', $page_id );
		if ( ! empty( $boxed_page_background_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_image ) . ')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat']   = 'no-repeat';
		}
		
		$boxed_page_background_pattern_image = dor_mikado_get_meta_field_intersect( 'boxed_pattern_background_image', $page_id );
		if ( ! empty( $boxed_page_background_pattern_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_pattern_image ) . ')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat']   = 'repeat';
		}
		
		$boxed_page_background_attachment = dor_mikado_get_meta_field_intersect( 'boxed_background_image_attachment', $page_id );
		if ( ! empty( $boxed_page_background_attachment ) ) {
			$boxed_background_style['background-attachment'] = $boxed_page_background_attachment;
		}
		
		$boxed_background_selector = $class_prefix . '.mkdf-boxed .mkdf-wrapper';
		
		if ( ! empty( $boxed_background_style ) ) {
			$current_style .= dor_mikado_dynamic_css( $boxed_background_selector, $boxed_background_style );
		}
		
		$paspartu_style     = array();
		$paspartu_res_style = array();
		$paspartu_res_start = '@media only screen and (max-width: 1024px) {';
		$paspartu_res_end   = '}';
		
		$paspartu_header_selector                = array(
			'.mkdf-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled .mkdf-sticky-header',
			'.mkdf-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		$paspartu_header_appear_selector         = array(
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-sticky-header.header-appear',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		
		$paspartu_header_style                   = array();
		$paspartu_header_appear_style            = array();
		$paspartu_header_responsive_style        = array();
		$paspartu_header_appear_responsive_style = array();
		
		$paspartu_color = dor_mikado_get_meta_field_intersect( 'paspartu_color', $page_id );
		if ( ! empty( $paspartu_color ) ) {
			$paspartu_style['background-color'] = $paspartu_color;
		}
		
		$paspartu_width = dor_mikado_get_meta_field_intersect( 'paspartu_width', $page_id );
		if ( $paspartu_width !== '' ) {
			if ( dor_mikado_string_ends_with( $paspartu_width, '%' ) || dor_mikado_string_ends_with( $paspartu_width, 'px' ) ) {
				$paspartu_style['padding'] = $paspartu_width;
				
				$paspartu_clean_width      = dor_mikado_string_ends_with( $paspartu_width, '%' ) ? dor_mikado_filter_suffix( $paspartu_width, '%' ) : dor_mikado_filter_suffix( $paspartu_width, 'px' );
				$paspartu_clean_width_mark = dor_mikado_string_ends_with( $paspartu_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_style['left']              = $paspartu_width;
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width;
			} else {
				$paspartu_style['padding'] = $paspartu_width . 'px';
				
				$paspartu_header_style['left']              = $paspartu_width . 'px';
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_width ) . 'px)';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width . 'px';
			}
		}
		
		$paspartu_selector = $class_prefix . '.mkdf-paspartu-enabled .mkdf-wrapper';
		
		if ( ! empty( $paspartu_style ) ) {
			$current_style .= dor_mikado_dynamic_css( $paspartu_selector, $paspartu_style );
		}
		
		if ( ! empty( $paspartu_header_style ) ) {
			$current_style .= dor_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_style );
			$current_style .= dor_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_style );
		}
		
		$paspartu_responsive_width = dor_mikado_get_meta_field_intersect( 'paspartu_responsive_width', $page_id );
		if ( $paspartu_responsive_width !== '' ) {
			if ( dor_mikado_string_ends_with( $paspartu_responsive_width, '%' ) || dor_mikado_string_ends_with( $paspartu_responsive_width, 'px' ) ) {
				$paspartu_res_style['padding'] = $paspartu_responsive_width;
				
				$paspartu_clean_width      = dor_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? dor_mikado_filter_suffix( $paspartu_responsive_width, '%' ) : dor_mikado_filter_suffix( $paspartu_responsive_width, 'px' );
				$paspartu_clean_width_mark = dor_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width;
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width;
			} else {
				$paspartu_res_style['padding'] = $paspartu_responsive_width . 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width . 'px';
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_responsive_width ) . 'px)';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width . 'px';
			}
		}
		
		if ( ! empty( $paspartu_res_style ) ) {
			$current_style .= $paspartu_res_start . dor_mikado_dynamic_css( $paspartu_selector, $paspartu_res_style ) . $paspartu_res_end;
		}
		
		if ( ! empty( $paspartu_header_responsive_style ) ) {
			$current_style .= $paspartu_res_start . dor_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_responsive_style ) . $paspartu_res_end;
			$current_style .= $paspartu_res_start . dor_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_responsive_style ) . $paspartu_res_end;
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'dor_mikado_filter_add_page_custom_style', 'dor_mikado_page_general_style' );
}