<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<p>Page</p>
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>