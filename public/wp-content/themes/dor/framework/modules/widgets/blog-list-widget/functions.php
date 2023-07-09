<?php

if ( ! function_exists( 'dor_mikado_register_blog_list_widget' ) ) {
	/**
	 * Function that register blog list widget
	 */
	function dor_mikado_register_blog_list_widget( $widgets ) {
		$widgets[] = 'DorMikadoClassBlogListWidget';
		
		return $widgets;
	}
	
	add_filter( 'dor_core_filter_register_widgets', 'dor_mikado_register_blog_list_widget' );
}