<?php

if ( ! function_exists( 'dor_mikado_register_author_info_widget' ) ) {
	/**
	 * Function that register author info widget
	 */
	function dor_mikado_register_author_info_widget( $widgets ) {
		$widgets[] = 'DorMikadoClassAuthorInfoWidget';
		
		return $widgets;
	}
	
	add_filter( 'dor_core_filter_register_widgets', 'dor_mikado_register_author_info_widget' );
}