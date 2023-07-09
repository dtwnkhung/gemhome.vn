<?php

if ( ! function_exists( 'dor_mikado_get_hide_dep_for_header_vertical_area_meta_boxes' ) ) {
	function dor_mikado_get_hide_dep_for_header_vertical_area_meta_boxes() {
		$hide_dep_options = apply_filters( 'dor_mikado_filter_header_vertical_hide_meta_boxes', $hide_dep_options = array( '' => '' ) );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'dor_mikado_header_vertical_area_meta_options_map' ) ) {
	function dor_mikado_header_vertical_area_meta_options_map( $header_meta_box ) {
		$hide_dep_options = dor_mikado_get_hide_dep_for_header_vertical_area_meta_boxes();
		
		$header_vertical_area_meta_container = dor_mikado_add_admin_container(
			array(
				'parent'          => $header_meta_box,
				'name'            => 'header_vertical_area_container',
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta' => $hide_dep_options
					)
				)
			)
		);
		
		dor_mikado_add_admin_section_title(
			array(
				'parent' => $header_vertical_area_meta_container,
				'name'   => 'vertical_area_style',
				'title'  => esc_html__( 'Vertical Area Style', 'dor' )
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_vertical_header_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'dor' ),
				'description' => esc_html__( 'Set background color for vertical menu', 'dor' ),
				'parent'      => $header_vertical_area_meta_container
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_background_image_meta',
				'type'          => 'image',
				'default_value' => '',
				'label'         => esc_html__( 'Background Image', 'dor' ),
				'description'   => esc_html__( 'Set background image for vertical menu', 'dor' ),
				'parent'        => $header_vertical_area_meta_container
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_disable_vertical_header_background_image_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Background Image', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will hide background image in Vertical Menu', 'dor' ),
				'parent'        => $header_vertical_area_meta_container
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Shadow', 'dor' ),
				'description'   => esc_html__( 'Set shadow on vertical menu', 'dor' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => dor_mikado_get_yes_no_select_array()
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Vertical Area Border', 'dor' ),
				'description'   => esc_html__( 'Set border on vertical area', 'dor' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => dor_mikado_get_yes_no_select_array()
			)
		);
		
		$vertical_header_border_container = dor_mikado_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'vertical_header_border_container',
				'parent'          => $header_vertical_area_meta_container,
				'dependency' => array(
					'show' => array(
						'mkdf_vertical_header_border_meta'  => 'yes'
					)
				)
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_vertical_header_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'dor' ),
				'description' => esc_html__( 'Choose color of border', 'dor' ),
				'parent'      => $vertical_header_border_container
			)
		);
		
		dor_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_center_content_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Center Content', 'dor' ),
				'description'   => esc_html__( 'Set content in vertical center', 'dor' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => dor_mikado_get_yes_no_select_array()
			)
		);
	}
	
	add_action( 'dor_mikado_action_additional_header_area_meta_boxes_map', 'dor_mikado_header_vertical_area_meta_options_map' );
}