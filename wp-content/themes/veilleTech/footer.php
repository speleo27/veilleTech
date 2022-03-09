<footer class="footer-container py-4 mt-4 w-auto">
	<div class="society-visual container ">
		<div class="row d-flex justify-content-between gx-0">
			<div class="col-md-6 col-6">
				<div class="logo-part align-items-center">
					<div class="text-center">
						<img src="<?php echo get_template_directory_uri() ?>
							/assets/logo/laboiteadevactxt-50.jpg">
					</div>
					<p class="text-center">14 grande ruelle 10100 Crancey, Aube France </p>
				</div>
			</div>
			<div class=" society-link col-md-6 px-4 col-6">
				<h6> A propos de nous</h6>
				<p>Notre société réalisant aussi des actions de formation nous avons décidé
					d'offrir ce blog pour permettre une circulation de l'information </p>

				<?php wp_nav_menu( array(
						'theme location'  => 'footer',
						'container_class' => 'container text-center',
						'container_id'    => 'footer',
						'add_li_class'    => 'btn-footer mb-1'
				) ); ?>
			</div>
		</div>
	</div>

	<p class="px-2 mt-1 text-center">Template réalisé par <?php echo get_theme_mod('company_name') ;?>© SAS
	 la boite a
		dev
		2022</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>