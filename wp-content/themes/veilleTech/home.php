<?php get_header(); ?>
	<section class="home">

		<div class="home-container container py-2">
			<h2 class="display-2"><?= get_theme_mod('title');?></h2>
			<div class="home-intro ms-5">
				<p><?= get_theme_mod('text');?></p>
			</div>
		</div>
	</section>

	<div class="container d-flex flex-column  mt-4">
		<div class="row d-flex justify-content-between">

			<section class="show-articles col-6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="card mb-3">
						<div class="card-header">
						<span class="fw-bold"><?= join( ", ", wp_list_pluck( get_the_category(),
									"name" ) ) ?>
						</span>
							<?php ?>
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
			</section>

			<section class="search col-4">
				<?php
				if ( is_active_sidebar( 'search' ) ):
					dynamic_sidebar( 'search' ); ?>

				<?php
				endif;
				?>
			</section>
		</div>
	</div>


<?php get_footer(); ?>