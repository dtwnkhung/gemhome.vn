<?php

if ( ! function_exists( 'dor_mikado_get_hide_dep_for_top_header_options' ) ) {
	function dor_mikado_get_hide_dep_for_top_header_options() {
		$hide_dep_options = apply_filters( 'dor_mikado_filter_top_header_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'dor_mikado_header_top_options_map' ) ) {
	function dor_mikado_header_top_options_map( $panel_header ) {
		$hide_dep_options = dor_mikado_get_hide_dep_for_top_header_options();
		
		$top_header_container = dor_mikado_add_admin_container_no_style(
			array(
				'type'            => 'container',
				'name'            => 'top_header_container',
				'parent'          => $panel_header,
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'top_bar',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Top Bar', 'dor' ),
				'description'   => esc_html__( 'Enabling this option will show top bar area', 'dor' ),
				'parent'        => $top_header_container,
			)
		);
		
		$top_bar_container = dor_mikado_add_admin_container(
			array(
				'name'            => 'top_bar_container',
				'parent'          => $top_header_container,
				'dependency' => array(
					'hide' => array(
						'top_bar'  => 'no'
					)
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'top_bar_in_grid',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Top Bar in Grid', 'dor' ),
				'description'   => esc_html__( 'Set top bar content to be in grid', 'dor' ),
				'parent'        => $top_bar_container
			)
		);
		
		$top_bar_in_grid_container = dor_mikado_add_admin_container(
			array(
				'name'            => 'top_bar_in_grid_container',
				'parent'          => $top_bar_container,
				'dependency' => array(
					'hide' => array(
						'top_bar_in_grid'  => 'no'
					)
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'top_bar_grid_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Grid Background Color', 'dor' ),
				'description' => esc_html__( 'Set grid background color for top bar', 'dor' ),
				'parent'      => $top_bar_in_grid_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'top_bar_grid_background_transparency',
				'type'        => 'text',
				'label'       => esc_html__( 'Grid Background Transparency', 'dor' ),
				'description' => esc_html__( 'Set grid background transparency for top bar', 'dor' ),
				'parent'      => $top_bar_in_grid_container,
				'args'        => array( 'col_width' => 3 )
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'top_bar_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'dor' ),
				'description' => esc_html__( 'Set background color for top bar', 'dor' ),
				'parent'      => $top_bar_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'top_bar_background_transparency',
				'type'        => 'text',
				'label'       => esc_html__( 'Background Transparency', 'dor' ),
				'description' => esc_html__( 'Set background transparency for top bar', 'dor' ),
				'parent'      => $top_bar_container,
				'args'        => array( 'col_width' => 3 )
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'          => 'top_bar_border',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Top Bar Border', 'dor' ),
				'description'   => esc_html__( 'Set top bar border', 'dor' ),
				'parent'        => $top_bar_container
			)
		);
		
		$top_bar_border_container = dor_mikado_add_admin_container(
			array(
				'name'            => 'top_bar_border_container',
				'parent'          => $top_bar_container,
				'dependency' => array(
					'hide' => array(
						'top_bar_border'  => 'no'
					)
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'top_bar_border_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Top Bar Border Color', 'dor' ),
				'description' => esc_html__( 'Set border color for top bar', 'dor' ),
				'parent'      => $top_bar_border_container
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'        => 'top_bar_height',
				'type'        => 'text',
				'label'       => esc_html__( 'Top Bar Height', 'dor' ),
				'description' => esc_html__( 'Enter top bar height (Default is 46px)', 'dor' ),
				'parent'      => $top_bar_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px'
				)
			)
		);
		
		dor_mikado_add_admin_field(
			array(
				'name'   => 'top_bar_side_padding',
				'type'   => 'text',
				'label'  => esc_html__( 'Top Bar Side Padding', 'dor' ),
				'parent' => $top_bar_container,
				'args'   => array(
					'col_width' => 2,
					'suffix'    => esc_html__( 'px or %', 'dor' )
				)
			)
		);
	}
	
	add_action( 'dor_mikado_action_header_top_options_map', 'dor_mikado_header_top_options_map', 10, 1 );
}