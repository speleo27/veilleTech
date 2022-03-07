<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<header>
	<div class="header-container w-auto ">
		<div class="d-flex justify-content-between align-items-center">
			<h1 class="display-1">La veille techno</h1>
			<div class="hamburger" id="hamburger">
				<svg height="40" viewBox="0 0 42.938 39.733" width="40"
				     xmlns="http://www.w3.org/2000/svg">
					<g data-name="Composant 8 – 1" id="Composant_8_1"
					   transform="translate(0.5 0.5)">
						<path
								d="M3,4H44.938V8.842H3ZM3,20.946H44.938v4.842H3ZM3,37.892H44.938v4.842H3Z"
								data-name="Tracé 2"
								fill="#fff"
								id="Tracé_2" stroke="#3204d9" stroke-width="1"
								transform="translate(-3 -4)"/>
					</g>
				</svg>
			</div>
		</div>
		<?php wp_nav_menu( array(
				'theme_location'  => 'header-menu',
				'container_class' => 'menu d-none  justify-content-end',
				'container_id'    => 'menu',
				'add_li_class'    => 'btn mb-2 d-block'
		) ); ?>
	</div>
	</div>
</header>