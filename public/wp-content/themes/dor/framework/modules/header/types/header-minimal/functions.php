<?php

if ( ! function_exists( 'dor_mikado_register_header_minimal_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function dor_mikado_register_header_minimal_type( $header_types ) {
		$header_type = array(
			'header-minimal' => 'DorMikadoNamespace\Modules\Header\Types\HeaderMinimal'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'dor_mikado_init_register_header_minimal_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function dor_mikado_init_register_header_minimal_type() {
		add_filter( 'dor_mikado_filter_register_header_type_class', 'dor_mikado_register_header_minimal_type' );
	}
	
	add_action( 'dor_mikado_action_before_header_function_init', 'dor_mikado_init_register_header_minimal_type' );
}

if ( ! function_exists( 'dor_mikado_include_header_minimal_full_screen_menu' ) ) {
	/**
	 * Registers additional menu navigation for theme
	 */
	function dor_mikado_include_header_minimal_full_screen_menu( $menus ) {
		$menus['popup-navigation'] = esc_html__( 'Full Screen Navigation', 'dor' );
		
		return $menus;
	}
	
	if ( dor_mikado_check_is_header_type_enabled( 'header-minimal' ) ) {
		add_filter( 'dor_mikado_filter_register_headers_menu', 'dor_mikado_include_header_minimal_full_screen_menu' );
	}
}

if ( ! function_exists( 'dor_mikado_get_fullscreen_menu_icon_class' ) ) {
	/**
	 * Loads full screen menu icon class
	 */
	function dor_mikado_get_fullscreen_menu_icon_class() {
		$classes = array(
			'mkdf-fullscreen-menu-opener'
		);
		
		$classes[] = dor_mikado_get_icon_sources_class( 'fullscreen_menu', 'mkdf-fullscreen-menu-opener' );
		
		return $classes;
	}
}