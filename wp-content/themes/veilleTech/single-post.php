<?php
/*
 Template Name: Article
 Template Post Type: post
 */

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<div class="container  mt-4">
	<div class="row d-flex justify-content-between">
	<section class="show-articles col-6">
	<h2><?php the_title(); ?></h2>
	<div class="content">
		<?php the_content(); ?>
	</div>
	<div class="com">
		<?php
		comments_template(); ?>
	</div>
<?php endwhile;endif; ?>

	</section>
	<section class="search col-4">
		<?php
		if ( is_active_sidebar( 'search' ) ):
			dynamic_sidebar( 'search' );
		endif;
		?>
	</section>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<?php the_posts_pagination(); ?>
		</div>
	</div>
<?php
get_footer(); ?>