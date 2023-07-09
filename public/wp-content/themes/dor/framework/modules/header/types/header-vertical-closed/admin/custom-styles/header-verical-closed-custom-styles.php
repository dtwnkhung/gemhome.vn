<?php

if ( ! function_exists( 'dor_mikado_vertical_closed_icon_styles' ) ) {
	function dor_mikado_vertical_closed_icon_styles() {
		$icon_color       = dor_mikado_options()->getOptionValue( 'vertical_closed_icon_color' );
		$icon_hover_color = dor_mikado_options()->getOptionValue( 'vertical_closed_icon_hover_color' );
		
		$icon_hover_selector = array(
			'.mkdf-vertical-area-opener:hover'
		);
		
		if ( ! empty( $icon_color ) ) {
			echo dor_mikado_dynamic_css( '.mkdf-vertical-area-opener', array(
				'color' => $icon_color
			) );
		}
		
		if ( ! empty( $icon_hover_color ) ) {
			echo dor_mikado_dynamic_css( $icon_hover_selector, array(
				'color' => $icon_hover_color . '!important'
			) );
		}
	}
	
	add_action( 'dor_mikado_action_style_dynamic', 'dor_mikado_vertical_closed_icon_styles' );
}