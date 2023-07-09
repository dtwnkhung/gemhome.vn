<?php

if ( ! function_exists( 'dor_mikado_sidebar_options_map' ) ) {
	function dor_mikado_sidebar_options_map() {
		
		dor_mikado_add_admin_page(
			array(
				'slug'  => '_sidebar_page',
				'title' => esc_html__( 'Sidebar Area', 'dor' ),
				'icon'  => 'fa fa-indent'
			)
		);
		
		$sidebar_panel = dor_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Sidebar Area', 'dor' ),
				'name'  => 'sidebar',
				'page'  => '_sidebar_page'
			)
		);
		
		dor_mikado_add_admin_field( array(
			'name'          => 'sidebar_layout',
			'type'          => 'select',
			'label'         => esc_html__( 'Sidebar Layout', 'dor' ),
			'description'   => esc_html__( 'Choose a sidebar layout for pages', 'dor' ),
			'parent'        => $sidebar_panel,
			'default_value' => 'no-sidebar',
            'options'       => dor_mikado_get_custom_sidebars_options()
		) );
		
		$dor_custom_sidebars = dor_mikado_get_custom_sidebars();
		if ( count( $dor_custom_sidebars ) > 0 ) {
			dor_mikado_add_admin_field( array(
				'name'        => 'custom_sidebar_area',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'dor' ),
				'description' => esc_html__( 'Choose a sidebar to display on pages. Default sidebar is "Sidebar"', 'dor' ),
				'parent'      => $sidebar_panel,
				'options'     => $dor_custom_sidebars,
				'args'        => array(
					'select2' => true
				)
			) );
		}
	}
	
	add_action( 'dor_mikado_action_options_map', 'dor_mikado_sidebar_options_map', dor_mikado_set_options_map_position( 'sidebar' ) );
}