<?php get_header(); ?>

	<div class="container mt-4">
	<div class="row d-flex justify-content-between">
	<section class="show-articles col-6">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="card mb-3">
				<div class="card-header">
							<span class="fw-bold"><?= join( ", ", wp_list_pluck( get_the_category(),
										"name" ) ) ?> </span> <?php ?>
				</div>
				<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid rounded' ] ); ?>
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
					<p class="card-text"><?php the_content(); ?></p>
				</div>
				<p class="ms-2">Article rédigé par <span class="fw-bold"><?php the_author();
						?></span>
					le <?php
					the_date();
					?></p>
			</div>
		<?php endwhile; endif; ?>
		<?php posts_nav_link(); ?>
		<section class="com">
			<?php foreach(get_comment() as $comment): ?>
				<h3></h3>
				<?php var_dump($comment); ?>
			<?php endforeach; ?>
		</section>
	</section>

	<section class="search col-4">
		<?php
		if ( is_active_sidebar( 'search' ) ):
			dynamic_sidebar( 'search' ); ?>
		<?php
		endif;
		?>
	</section>

<?php get_footer(); ?>