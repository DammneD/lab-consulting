<?php
	/*
	Template Name: О компании
	Template Post Type: post, page, product
	*/
 ?>

<?php get_template_part('template-parts/head'); ?>
	<?php get_template_part('template-parts/header'); ?>		
	<section class="advantages-sec" id="advantages-sec">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="advantage-title">Преимущества LAB Consult</h3>
				</div>
				<div class="col-md-6">
					<p class="advantage-text">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
					</p>
				</div>
				<div class="col-md-6">
					<p class="advantage-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
					</p>
				</div>
				<div class="col-12">
					<ul class="advantage">
						<li class="advantage__item d-flex">
							<span class="advantage__icon"></span>
							<div class="advantage__block">
								<h4 class="advantage__subtitle">
									Первое весомое преимущество
								</h4>
								<p class="advantage__descript">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</li>
						<li class="advantage__item d-flex">
							<span class="advantage__icon"></span>
							<div class="advantage__block">
								<h4 class="advantage__subtitle">
									Второе сильное и мощное преимущество
								</h4>
								<p class="advantage__descript">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</li>
						<li class="advantage__item d-flex">
							<span class="advantage__icon"></span>
							<div class="advantage__block">
								<h4 class="advantage__subtitle">
									Третье и финальное сильное и мощное преимущество
								</h4>
								<p class="advantage__descript">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>			
		</div>	
	</section>
	<section class="capacity-sec" id="capacity-sec">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="capacity-title">Фото наших мощностей</h3>
				</div>
				<?php echo do_shortcode('[rl_gallery id="65"]'); ?>
				<!-- <div class="col-md-3">
					<div class="capacity-gallery">
						<a href="<?php bloginfo ( 'template_directory' ); ?>/img/shovel.jpg" data-lightbox="capacity-lightbox" data-title="Shovel">
							<img src="<?php bloginfo ( 'template_directory' ); ?>/img/shovel.jpg" alt="shovel" class="capacity-gallery__img img-fluid">
							<div class="capacity-gallery__overlay">
								<i class="fas fa-arrows-alt d-none d-lg-block"></i>
								<i class="fas fa-expand d-lg-none"></i>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="capacity-gallery">
						<a href="<?php bloginfo ( 'template_directory' ); ?>/img/truck-parking.jpg" data-lightbox="capacity-lightbox" data-title="Truck Parking">
							<img src="<?php bloginfo ( 'template_directory' ); ?>/img/truck-parking.jpg" alt="truck" class="capacity-gallery__img img-fluid">
							<div class="capacity-gallery__overlay">
								<i class="fas fa-arrows-alt d-none d-lg-block"></i>
								<i class="fas fa-expand d-lg-none"></i>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="capacity-gallery">
						<a href="<?php bloginfo ( 'template_directory' ); ?>/img/truck-ride.jpg" data-lightbox="capacity-lightbox" data-title="Truck">
							<img src="<?php bloginfo ( 'template_directory' ); ?>/img/truck-ride.jpg" alt="truck" class="capacity-gallery__img img-fluid">
							<div class="capacity-gallery__overlay">
								<i class="fas fa-arrows-alt d-none d-lg-block "></i>
								<i class="fas fa-expand d-lg-none"></i>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="capacity-gallery">
						<a href="<?php bloginfo ( 'template_directory' ); ?>/img/ark.jpg" data-lightbox="capacity-lightbox" data-title="Ark">
							<img src="<?php bloginfo ( 'template_directory' ); ?>/img/ark.jpg" alt="ark" class="capacity-gallery__img img-fluid">
							<div class="capacity-gallery__overlay">
								<i class="fas fa-arrows-alt d-none d-lg-block"></i>
								<i class="fas fa-expand d-lg-none"></i>
							</div>
						</a>
					</div>
				</div> -->
			</div>
		</div>	
	</section>
<?php get_template_part('template-parts/footer'); ?>