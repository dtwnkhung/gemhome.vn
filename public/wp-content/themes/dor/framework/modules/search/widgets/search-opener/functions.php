<?php

if ( ! function_exists( 'dor_mikado_register_search_opener_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function dor_mikado_register_search_opener_widget( $widgets ) {
		$widgets[] = 'DorMikadoClassSearchOpener';
		
		return $widgets;
	}
	
	add_filter( 'dor_core_filter_register_widgets', 'dor_mikado_register_search_opener_widget' );
}