<?php

if ( ! function_exists( 'dor_mikado_get_hide_dep_for_breadcrumbs_title_meta_boxes' ) ) {
	function dor_mikado_get_hide_dep_for_breadcrumbs_title_meta_boxes() {
		$hide_dep_options = apply_filters( 'dor_mikado_filter_breadcrumbs_title_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'dor_mikado_breadcrumbs_title_type_options_meta_boxes' ) ) {
	function dor_mikado_breadcrumbs_title_type_options_meta_boxes( $show_title_area_meta_container ) {
	    $hide_dep_options = dor_mikado_get_hide_dep_for_breadcrumbs_title_meta_boxes();
		
		dor_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_breadcrumbs_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Breadcrumbs Color', 'dor' ),
				'description' => esc_html__( 'Choose a color for breadcrumbs text', 'dor' ),
				'parent'      => $show_title_area_meta_container,
                'dependency'  => array(
                    'hide' => array(
                        'mkdf_title_area_type_meta' => $hide_dep_options
                    )
                )
			)
		);
	}
	
	add_action( 'dor_mikado_action_additional_title_area_meta_boxes', 'dor_mikado_breadcrumbs_title_type_options_meta_boxes' );
}