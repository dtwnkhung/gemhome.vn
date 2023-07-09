<?php

if ( ! function_exists( 'dor_mikado_register_header_vertical_closed_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function dor_mikado_register_header_vertical_closed_type( $header_types ) {
		$header_type = array(
			'header-vertical-closed' => 'DorMikadoNamespace\Modules\Header\Types\HeaderVerticalClosed'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'dor_mikado_init_register_header_vertical_closed_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function dor_mikado_init_register_header_vertical_closed_type() {
		add_filter( 'dor_mikado_filter_register_header_type_class', 'dor_mikado_register_header_vertical_closed_type' );
	}
	
	add_action( 'dor_mikado_action_before_header_function_init', 'dor_mikado_init_register_header_vertical_closed_type' );
}

if ( ! function_exists( 'dor_mikado_include_header_vertical_closed_menu' ) ) {
	/**
	 * Registers additional menu navigation for theme
	 */
	function dor_mikado_include_header_vertical_closed_menu( $menus ) {
		if ( ! array_key_exists( 'vertical-navigation', $menus ) ) {
			$menus['vertical-navigation'] = esc_html__( 'Vertical Navigation', 'dor' );
		}
		
		return $menus;
	}
	
	if ( dor_mikado_check_is_header_type_enabled( 'header-vertical-closed' ) ) {
		add_filter( 'dor_mikado_filter_register_headers_menu', 'dor_mikado_include_header_vertical_closed_menu' );
	}
}

if ( ! function_exists( 'dor_mikado_get_header_vertical_closed_main_menu' ) ) {
	/**
	 * Loads vertical menu HTML
	 */
	function dor_mikado_get_header_vertical_closed_main_menu() {
		dor_mikado_get_module_template_part( 'templates/vertical-closed-navigation', 'header/types/header-vertical-closed' );
	}
}

if ( ! function_exists( 'dor_mikado_vertical_closed_header_holder_class' ) ) {
	/**
	 * Return holder class for this header type html
	 */
	function dor_mikado_vertical_closed_header_holder_class() {
		$center_content = dor_mikado_get_meta_field_intersect( 'vertical_header_center_content', dor_mikado_get_page_id() );
		$holder_class   = $center_content === 'yes' ? 'mkdf-vertical-alignment-center' : 'mkdf-vertical-alignment-top';
		
		return $holder_class;
	}
}

if ( ! function_exists( 'dor_mikado_get_vertical_closed_header_icon_class' ) ) {
	/**
	 * Loads vertical closed icon class
	 */
	function dor_mikado_get_vertical_closed_header_icon_class() {
		$classes = array(
			'mkdf-vertical-area-opener'
		);
		
		$classes[] = dor_mikado_get_icon_sources_class( 'vertical_closed', 'mkdf-vertical-area-opener' );

		return $classes;
	}
}

if ( ! function_exists( 'dor_mikado_header_vertical_closed_per_page_custom_styles' ) ) {
	/**
	 * Return header per page styles
	 */
	function dor_mikado_header_vertical_closed_per_page_custom_styles( $style, $class_prefix, $page_id ) {
		$header_area_style    = array();
		$header_area_selector = array( $class_prefix . '.mkdf-header-vertical-closed .mkdf-vertical-area-background' );

		$vertical_header_background_color  = get_post_meta( $page_id, 'mkdf_vertical_header_background_color_meta', true );
		$disable_vertical_background_image = get_post_meta( $page_id, 'mkdf_disable_vertical_header_background_image_meta', true );
		$vertical_background_image         = get_post_meta( $page_id, 'mkdf_vertical_header_background_image_meta', true );
		$vertical_shadow                   = get_post_meta( $page_id, 'mkdf_vertical_header_shadow_meta', true );
		$vertical_border                   = get_post_meta( $page_id, 'mkdf_vertical_header_border_meta', true );

		if ( ! empty( $vertical_header_background_color ) ) {
			$header_area_style['background-color'] = $vertical_header_background_color;
		}

		if ( $disable_vertical_background_image == 'yes' ) {
			$header_area_style['background-image'] = 'none';
		} elseif ( $vertical_background_image !== '' ) {
			$header_area_style['background-image'] = 'url(' . $vertical_background_image . ')';
		}

		if ( $vertical_shadow == 'yes' ) {
			$header_area_style['box-shadow'] = '1px 0 3px rgba(0, 0, 0, 0.05)';
		}

		if ( $vertical_border == 'yes' ) {
			$header_border_color = get_post_meta( $page_id, 'mkdf_vertical_header_border_color_meta', true );

			if ( $header_border_color !== '' ) {
				$header_area_style['border-right'] = '1px solid ' . $header_border_color;
			}
		}

		$current_style = '';

		if ( ! empty( $header_area_style ) ) {
			$current_style .= dor_mikado_dynamic_css( $header_area_selector, $header_area_style );
		}

		$current_style = $current_style . $style;

		return $current_style;
	}

	add_filter( 'dor_mikado_filter_add_header_page_custom_style', 'dor_mikado_header_vertical_closed_per_page_custom_styles', 10, 3 );
}