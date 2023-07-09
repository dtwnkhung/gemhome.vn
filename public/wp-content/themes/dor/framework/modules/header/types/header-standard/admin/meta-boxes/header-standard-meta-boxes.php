<?php

if ( ! function_exists( 'dor_mikado_get_hide_dep_for_header_standard_meta_boxes' ) ) {
	function dor_mikado_get_hide_dep_for_header_standard_meta_boxes() {
		$hide_dep_options = apply_filters( 'dor_mikado_filter_header_standard_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'dor_mikado_header_standard_meta_map' ) ) {
	function dor_mikado_header_standard_meta_map( $parent ) {
		$hide_dep_options = dor_mikado_get_hide_dep_for_header_standard_meta_boxes();
		
		dor_mikado_create_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'mkdf_set_menu_area_position_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Choose Menu Area Position', 'dor' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'dor' ),
				'options'         => array(
					''       => esc_html__( 'Default', 'dor' ),
					'left'   => esc_html__( 'Left', 'dor' ),
					'right'  => esc_html__( 'Right', 'dor' ),
					'center' => esc_html__( 'Center', 'dor' )
				),
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'dor_mikado_action_additional_header_area_meta_boxes_map', 'dor_mikado_header_standard_meta_map' );
}