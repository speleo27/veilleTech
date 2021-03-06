<?php get_header(); ?>

	<section class="home">
		<div class="home-container container py-2">
			<h2 class="display-2">Acceuil</h2>
			<div class="home-intro ms-5">
				<p>Ce blog est prévu pour les développeurs qui souhaitent se tenir informer en un
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
				<div class="card mb-3">
					<div class="card-header">
						category
					</div>
					<img src="<?php echo get_template_directory_uri()?>
				                     /assets/img/pexels-roberto-nickson-3082341.jpg"
					     class="card-img-top" alt="">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make
							up the bulk of the card's content.</p>
						<a href="#" class="btn ">lire la suite</a>
					</div>
				</div>
				<div class="card mb-3">
					<div class="card-header">
						category
					</div>
					<img src="<?php echo get_template_directory_uri()?>
				                  /assets/img/pexels-roberto-nickson-3082341.jpg"
					     class="card-img-top" alt="">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make
							up the bulk of the card's content.</p>
						<a href="#" class="btn ">lire la suite</a>
					</div>
				</div>
				<div class="card mb-3">
					<div class="card-header">
						category
					</div>
					<img src="<?php echo get_template_directory_uri()
					                     . '/assets/img/pexels-roberto-nickson-3082341.jpg' ?>"
					     class="card-img-top"
					     alt="">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make
							up the bulk of the card's content.</p>
						<a href="#" class="btn ">lire la suite</a>
					</div>
				</div>
			</section>

			<section class="search col-4">
				<div class="card mb-3">
					<div class="card-header">
						Rechercher
					</div>
					<div class="card-body">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Search article"
							       aria-label="Search article" aria-describedby="button-addon2">
							<button class="btn " type="button" id="button-addon2">Search</button>
						</div>

					</div>
				</div>
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