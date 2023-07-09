<?php

if ( ! function_exists( 'dor_mikado_register_sidearea_opener_widget' ) ) {
	/**
	 * Function that register sidearea opener widget
	 */
	function dor_mikado_register_sidearea_opener_widget( $widgets ) {
		$widgets[] = 'DorMikadoClassSideAreaOpener';
		
		return $widgets;
	}
	
	add_filter( 'dor_core_filter_register_widgets', 'dor_mikado_register_sidearea_opener_widget' );
}