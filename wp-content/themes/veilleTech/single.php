<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<p>article</p>
				<h1><?php the_title(); ?></h1>
				<p>Article rédigé par <span class="fw-bold"><?php the_author();?></span> le <?php
					the_date();
				?></p>
				<?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid rounded' ]); ?>

				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>