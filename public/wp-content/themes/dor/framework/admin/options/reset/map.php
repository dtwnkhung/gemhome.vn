<?php

if ( ! function_exists( 'dor_mikado_reset_options_map' ) ) {
	/**
	 * Reset options panel
	 */
	function dor_mikado_reset_options_map() {
		
		dor_mikado_add_admin_page(
			array(
				'slug'  => '_reset_page',
				'title' => esc_html__( 'Reset', 'dor' ),
				'icon'  => 'fa fa-retweet'
			)
		);
		
		$panel_reset = dor_mikado_add_admin_panel(
			array(
				'page'  => '_reset_page',
				'name'  => 'panel_reset',
				'title' => esc_html__( 'Reset', 'dor' )
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'reset_to_defaults',
				'default_value' => 'no',
				'label'         => esc_html__( 'Reset to Defaults', 'dor' ),
				'description'   => esc_html__( 'This option will reset all Select Options values to defaults', 'dor' ),
				'parent'        => $panel_reset
			)
		);
	}
	
	add_action( 'dor_mikado_action_options_map', 'dor_mikado_reset_options_map', dor_mikado_set_options_map_position( 'reset' ) );
}