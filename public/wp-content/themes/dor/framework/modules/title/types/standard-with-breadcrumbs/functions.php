<?php

if ( ! function_exists( 'dor_mikado_set_title_standard_with_breadcrumbs_type_for_options' ) ) {
	/**
	 * This function set standard with breadcrumbs title type value for title options map and meta boxes
	 */
	function dor_mikado_set_title_standard_with_breadcrumbs_type_for_options( $type ) {
		$type['standard-with-breadcrumbs'] = esc_html__( 'Standard With Breadcrumbs', 'dor' );
		
		return $type;
	}
	
	add_filter( 'dor_mikado_filter_title_type_global_option', 'dor_mikado_set_title_standard_with_breadcrumbs_type_for_options' );
	add_filter( 'dor_mikado_filter_title_type_meta_boxes', 'dor_mikado_set_title_standard_with_breadcrumbs_type_for_options' );
}