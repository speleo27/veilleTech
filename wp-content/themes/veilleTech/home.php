<?php get_header(); ?>
<section class="home">

	<div class="home-container container py-2">
		<h2 class="display-2">Acceuil</h2>
		<div class="home-intro ms-5">
			<p>Ce blog est prévu pour les développeurs qui souhaitent se tenir informé en un
				coup d'oeil des dernières nouvelles dans le monde du numérique.</p>
			<p>Ce blog références toutes les informations pertinantes dans les différentes
				catégories. Nous les avons défini de la facon suivante pour vous facilité la
				lecture:
			</p>
			<ul>
				<li>Code : comprend tous les nouveautées en matière de développement</li>
				<li>Systeme: comprend toutes les informations sur les différents systèmes
					d'expoitation
				</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
			</ul>
			<p></p>
		</div>
	</div>
</section>

<div class="container d-flex flex-column  mt-4">
	<div class="row d-flex justify-content-between">

		<section class="show-articles col-6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="card mb-3">
					<div class="card-header">
						<span class="fw-bold"><?= 'noms de la catégorie' ?> </span> <?php ?>
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
			<?php get_search_form();?>
			<div class="card mb-3">
				<div class="card-header">
					Archives
				</div>
				<div class="card-body">
					<h5 class="card-title">Archive</h5>
					<p class="card-text">With supporting text below as a natural lead-in to
						additional content.</p>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header">
					Derniers commentaires
				</div>
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to
						additional content.</p>
				</div>
			</div>
		</section>
	</div>
</div>


<?php get_footer(); ?>