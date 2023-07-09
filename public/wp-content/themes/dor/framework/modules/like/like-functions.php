<?php

if ( ! function_exists( 'dor_mikado_like' ) ) {
	/**
	 * Returns DorMikadoClassLike instance
	 *
	 * @return DorMikadoClassLike
	 */
	function dor_mikado_like() {
		return DorMikadoClassLike::get_instance();
	}
}

function dor_mikado_get_like() {
	
	echo wp_kses( dor_mikado_like()->add_like(), array(
		'span'  => array(
			'class'       => true,
			'aria-hidden' => true,
			'style'       => true,
			'id'          => true
		),
		'i'     => array(
			'class' => true,
			'style' => true,
			'id'    => true
		),
		'a'     => array(
			'href'         => true,
			'class'        => true,
			'id'           => true,
			'title'        => true,
			'style'        => true,
			'data-post-id' => true
		),
		'input' => array(
			'type'  => true,
			'name'  => true,
			'id'    => true,
			'value' => true
		)
	) );
}