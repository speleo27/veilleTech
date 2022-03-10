<footer class="footer-container py-4 mt-4 w-auto">
	<div class="society-visual container ">
		<div class="row d-flex justify-content-between gx-0">
			<div class="col-md-6 col-6">
				<div class="logo-part align-items-center">
					<div class="text-center">
						<img src="<?=
						wp_get_attachment_image_url(get_theme_mod('company_logo'), 'full'); ?>" alt="">

					</div>
					<p class="text-center"><?= get_theme_mod('company_address').' '
					                                  .get_theme_mod('company_zip').' '.
					                                  get_theme_mod('company_city') ;?>
						</p>
					<?php if((get_theme_mod('monday')!== '') && (get_theme_mod('tuesday')!== '')&&
					         (get_theme_mod('wednesday')!== '')&& (get_theme_mod('thursday')!== '')&&
					         (get_theme_mod('friday')!== '') && (get_theme_mod('saturday')!='') &&
					         (get_theme_mod('sunday')!== '')){ ?>
						<div class="d-flex justify-content-between px-5 ">
							<ul class="list-unstyled">
								<li>Lundi: <?= get_theme_mod('monday');?></li>
								<li>Mardi: <?= get_theme_mod('tuesday');?></li>
								<li>Mercredi: <?= get_theme_mod('wednesday');?></li>
								<li>Jeudi: <?= get_theme_mod('thursday');?></li>
							</ul>
							<ul class="list-unstyled">
								<li>Vendredi: <?= get_theme_mod('friday');?></li>
								<li>Samedi: <?= get_theme_mod('saturday');?></li>
								<li>Dimanche: <?= get_theme_mod('sunday');?></li>
							</ul>
						</div>
					<?php }?>
				</div>


			</div>
			<div class=" society-link col-md-6 px-4 col-6">
				<h6> A propos de nous</h6>
				<p><?= get_theme_mod('company_about') ;?></p>

				<?php wp_nav_menu( array(
						'theme location'  => 'footer',
						'container_class' => 'container text-center',
						'container_id'    => 'footer',
						'add_li_class'    => 'btn-footer mb-1'
				) ); ?>
			</div>
		</div>
	</div>

	<p class="px-2 mt-1 text-center">Template réalisé par SAS.
		La boite a
		dev
		 © <?php echo get_theme_mod('company_name') .' ';
		 $date =new DateTime();
		 echo date_format($date,'Y');
		?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>