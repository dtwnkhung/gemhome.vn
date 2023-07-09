<?php

if ( ! function_exists( 'dor_mikado_disable_behaviors_for_header_vertical' ) ) {
	/**
	 * This function is used to disable sticky header functions that perform processing variables their used in js for this header type
	 */
	function dor_mikado_disable_behaviors_for_header_vertical( $allow_behavior ) {
		return false;
	}
	
	if ( dor_mikado_check_is_header_type_enabled( 'header-vertical', dor_mikado_get_page_id() ) ) {
		add_filter( 'dor_mikado_filter_allow_sticky_header_behavior', 'dor_mikado_disable_behaviors_for_header_vertical' );
		add_filter( 'dor_mikado_filter_allow_content_boxed_layout', 'dor_mikado_disable_behaviors_for_header_vertical' );
	}
}