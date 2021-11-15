<?php
	/*
	Template Name: Контакты
	Template Post Type: post, page, product
	*/
 ?>

<?php get_template_part('template-parts/head'); ?>
	<?php get_template_part('template-parts/header'); ?>
	<section class="map-sec" id="map-sec">
		<div class=".container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1942.9292919514817!2d30.744533031960167!3d46.474114183111446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63177c4ed7b2b%3A0x73d09f0b217b7a6!2z0YPQuy4g0JHQsNC30LDRgNC90LDRjywgMzYsINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1533945455798" width="100%" height="443" frameborder="0" style="border:0" allowfullscreen></iframe>
						<div class="overlay-block">							
							<div class="overlay-block__header d-flex justify-content-between align-items-center">
								<h4 class="overlay-block__title">LAB Consulting</h4>
								<div class="overlay-block__links d-flex">
									<a href="#" target="_blank" class="overlay-block__contact">
										<i class="fab fa-facebook"></i>
									</a>
									<a href="#" target="_blank" class="overlay-block__contact">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#" target="_blank" class="overlay-block__contact">
										<i class="fab fa-telegram-plane"></i>
									</a>
								</div>
							</div>
							<div class="overlay-block__content d-flex flex-column flex-md-row">
								<ul class="overlay-block__numbers">
									<li class="overlay-block__item d-flex">
										<i class="fas fa-phone"></i>
										<a href="tel:+380487562354" class="overlay-block__phone">	+38 (048) 756-23-54
										</a>
									</li>
									<li class="overlay-block__item d-flex">
										<i class="fas fa-phone"></i>
										<a href="tel:+380487562354" class="overlay-block__phone">	+38 (048) 756-23-54
										</a>
									</li>
									<li class="overlay-block__item d-flex">
										<i class="fas fa-location-arrow"></i>
										<p class="overlay-block__adress">							65000, <br>
											Украина, г. Одесса <br>
											Ул Базарная, 36
										</p>
									</li>
									<li class="overlay-block__item d-flex">
										<i class="fas fa-envelope"></i>
										<a href="mailto:info@lab-consult.com" class="overlay-block__mail">									
											info@lab-consult.com
										</a>
									</li>
								</ul>
								<div class="overlay-block__info">
									<p class="overlay-block__text overlay-block__text_first">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<p class="overlay-block__text overlay-block__text_second">
										Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
<?php get_template_part('template-parts/footer'); ?>		