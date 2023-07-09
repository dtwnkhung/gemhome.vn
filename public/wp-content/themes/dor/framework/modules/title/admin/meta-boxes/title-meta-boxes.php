<?php

if ( ! function_exists( 'dor_mikado_get_title_types_meta_boxes' ) ) {
	function dor_mikado_get_title_types_meta_boxes() {
		$title_type_options = apply_filters( 'dor_mikado_filter_title_type_meta_boxes', $title_type_options = array( '' => esc_html__( 'Default', 'dor' ) ) );
		
		return $title_type_options;
	}
}

foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/title/types/*/admin/meta-boxes/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'dor_mikado_map_title_meta' ) ) {
	function dor_mikado_map_title_meta() {
		$title_type_meta_boxes = dor_mikado_get_title_types_meta_boxes();
		
		$title_meta_box = dor_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'dor_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'title_meta' ),
				'title' => esc_html__( 'Title', 'dor' ),
				'name'  => 'title_meta'
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'dor' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'dor' ),
				'parent'        => $title_meta_box,
				'options'       => dor_mikado_get_yes_no_select_array()
			)
		);
		
			$show_title_area_meta_container = dor_mikado_add_admin_container(
				array(
					'parent'          => $title_meta_box,
					'name'            => 'mkdf_show_title_area_meta_container',
					'dependency' => array(
						'hide' => array(
							'mkdf_show_title_area_meta' => 'no'
						)
					)
				)
			);
		
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_type_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area Type', 'dor' ),
						'description'   => esc_html__( 'Choose title type', 'dor' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => $title_type_meta_boxes
					)
				);
		
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_in_grid_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area In Grid', 'dor' ),
						'description'   => esc_html__( 'Set title area content to be in grid', 'dor' ),
						'options'       => dor_mikado_get_yes_no_select_array(),
						'parent'        => $show_title_area_meta_container
					)
				);

				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_layout_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area Layout', 'dor' ),
						'description'   => esc_html__( 'Set title area layout', 'dor' ),
						'options'       => array(
							''           => esc_html__( 'Default', 'dor' ),
							'predefined' => esc_html__( 'Predefined', 'dor' )
						),
						'parent'        => $show_title_area_meta_container
					)
				);
		
				dor_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_height_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Height', 'dor' ),
						'description' => esc_html__( 'Set a height for Title Area', 'dor' ),
						'parent'      => $show_title_area_meta_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px'
						)
					)
				);
				
				dor_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_background_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Background Color', 'dor' ),
						'description' => esc_html__( 'Choose a background color for title area', 'dor' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				dor_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'dor' ),
						'description' => esc_html__( 'Choose an Image for title area', 'dor' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_background_image_behavior_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Behavior', 'dor' ),
						'description'   => esc_html__( 'Choose title area background image behavior', 'dor' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''                    => esc_html__( 'Default', 'dor' ),
							'hide'                => esc_html__( 'Hide Image', 'dor' ),
							'responsive'          => esc_html__( 'Enable Responsive Image', 'dor' ),
							'responsive-disabled' => esc_html__( 'Disable Responsive Image', 'dor' ),
							'parallax'            => esc_html__( 'Enable Parallax Image', 'dor' ),
							'parallax-zoom-out'   => esc_html__( 'Enable Parallax With Zoom Out Image', 'dor' ),
							'parallax-disabled'   => esc_html__( 'Disable Parallax Image', 'dor' )
						)
					)
				);

				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_background_image_size_optimize_touch_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Enable Background Image Size Optimization on Touch Devices', 'dor' ),
						'description'   => esc_html__( 'Enabling this option will optimize title area background image size for all touch devices', 'dor' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''    => esc_html__( 'No', 'dor' ),
							'yes' => esc_html__( 'Yes', 'dor' )
						)
					)
				);
				
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_vertical_alignment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Vertical Alignment', 'dor' ),
						'description'   => esc_html__( 'Specify title area content vertical alignment', 'dor' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''              => esc_html__( 'Default', 'dor' ),
							'header-bottom' => esc_html__( 'From Bottom of Header', 'dor' ),
							'window-top'    => esc_html__( 'From Window Top', 'dor' )
						)
					)
				);
				
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_title_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Tag', 'dor' ),
						'options'       => dor_mikado_get_title_tag( true ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				dor_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_text_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Title Color', 'dor' ),
						'description' => esc_html__( 'Choose a color for title text', 'dor' ),
						'parent'      => $show_title_area_meta_container
					)
				);
				
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_subtitle_meta',
						'type'          => 'text',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Text', 'dor' ),
						'description'   => esc_html__( 'Enter your subtitle text', 'dor' ),
						'parent'        => $show_title_area_meta_container,
						'args'          => array(
							'col_width' => 6
						)
					)
				);
		
				dor_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_subtitle_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Tag', 'dor' ),
						'options'       => dor_mikado_get_title_tag( true, array( 'p' => 'Custom' ) ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				dor_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_subtitle_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Subtitle Color', 'dor' ),
						'description' => esc_html__( 'Choose a color for subtitle text', 'dor' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
		/***************** Additional Title Area Layout - start *****************/
		
		do_action( 'dor_mikado_action_additional_title_area_meta_boxes', $show_title_area_meta_container );
		
		/***************** Additional Title Area Layout - end *****************/
		
	}
	
	add_action( 'dor_mikado_action_meta_boxes_map', 'dor_mikado_map_title_meta', 60 );
}