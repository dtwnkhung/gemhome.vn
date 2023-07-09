<?php

if ( ! function_exists( 'dor_mikado_get_hide_dep_for_header_standard_options' ) ) {
	function dor_mikado_get_hide_dep_for_header_standard_options() {
		$hide_dep_options = apply_filters( 'dor_mikado_filter_header_standard_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'dor_mikado_header_standard_map' ) ) {
	function dor_mikado_header_standard_map( $parent ) {
		$hide_dep_options = dor_mikado_get_hide_dep_for_header_standard_options();
		
		dor_mikado_add_admin_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'set_menu_area_position',
				'default_value'   => 'right',
				'label'           => esc_html__( 'Choose Menu Area Position', 'dor' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'dor' ),
				'options'         => array(
					'right'  => esc_html__( 'Right', 'dor' ),
					'left'   => esc_html__( 'Left', 'dor' ),
					'center' => esc_html__( 'Center', 'dor' )
				),
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'dor_mikado_action_additional_header_menu_area_options_map', 'dor_mikado_header_standard_map' );
}