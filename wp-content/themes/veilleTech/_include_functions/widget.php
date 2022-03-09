<?php
/**
 * widget
 */
function add_widgets_init( $cardTitle ) {
	register_sidebar( array(
		'id'            => 'search',
		'class'         => 'card card-body',
		'name'          => __( 'search', 'veilleTech' ),
		'description'   => __( "Section Widgets", 'veilleTech' ),
		'before_title'  => '<div class="card-header">
							' . $cardTitle . '
					</div>
					<div class="card-body">
						<h5 class="card-title">',
		'after_title'   => '<p class="card-text py-1 px-1">',
		'before_widget' => '<div class="card mb-3 widget %2$s" id="%1$s">',
		'after_widget'  => '</div>'
	) );

}

add_action( 'widgets_init', 'add_widgets_init' );
