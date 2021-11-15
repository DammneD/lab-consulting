<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lab_Consulting
 */

<?php get_template_part('template-parts/head'); ?>
<body>
	<!-- Preloader -->
	<div class="page-preloader">
		<div class="cssload-loader">
			<div class="cssload-inner cssload-one"></div>
			<div class="cssload-inner cssload-two"></div>
			<div class="cssload-inner cssload-three"></div>
		</div>
	</div>
	<!-- Preloader end -->
	<header class="header-sec" id="header-sec" data-type="parallax" data-speed="5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 col-md-4 d-flex d-sm-block justify-content-center">
					<a href="#" class="logo-link">
						<img src="<?php bloginfo ( 'template_directory' ); ?>/img/logo.png" alt="LAB Consulting" class="logo img-fluid">
					</a>
				</div>
				<div class="d-none d-xl-block col-lg-6 navigation-mobile">
					<nav class="navigation">
						<?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => 'Основное',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'navigation__menu d-flex justify-content-between',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
							) ); 
						?>
					</nav>
				</div>
				<div class="col-9 col-sm-5 col-md-7 col-xl-2 d-flex justify-content-sm-end">
					<button type="button" class="call-back btn">
						<i class="fas fa-phone"></i>
						Заказать звонок
					</button>
					<div style="display: none;">
					    <form class="box-modal" id="exampleModal">
					        <div class="box-modal__close arcticmodal-close">
					        	Х
					        </div>
					        <h4 class="box-modal__title">
					        	Заказать обратный звонок
					        </h4>
					        <p class="box-modal__text">
					        	Заполните форму и мы свяжемся с вами как можно скорее. До скорой встречи
					        </p>
					    	<?php echo do_shortcode('[contact-form-7 id="63" title="Форма обратной связи"]'); ?>
					    </form>
					</div>
				</div>
				<div class="col-3 col-sm-1 d-xl-none">
					<button class="mobile-menu">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>	
			<div class="row">
				<div class="col-12">
					<div class="main">
						<h1 class="main__title">LAB Consulting</h1>
						<p class="main__subtitle">
							Ваш надежный партнер в области транспортно-логистического сопровождения
						</p>
						<div class="main__links d-flex justify-content-between">
							<a href="#" target="_blank" class="main__contact main__contact_facebook">
								<i class="fab fa-facebook"></i>
							</a>
							<a href="#" target="_blank" class="main__contact main__contact_twitter">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="#" target="_blank" class="main__contact main__contact_telegram">
								<i class="fab fa-telegram-plane"></i>
							</a>
						</div>
					</div>
				</div>
			</div>		
		</div>		
	</header>
	<section class="offer-sec" id="offer-sec">
		<div class="container">
			<div class="row text-center">
				<div class="col-12">
					<h3 class="offer-title">Мы заслужили доверие</h3>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="offer-block offer-block_first">
						<span class="offer-block__img offer-block__img_important"></span>
						<h4 class="offer-block__title">Что мы предлагаем?</h4>
						<p class="offer-block__text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua
						</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="offer-block offer-block_second">
						<span class="offer-block__img offer-block__img_cube"></span>
						<h4 class="offer-block__title">Как мы работаем?</h4>
						<p class="offer-block__text">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ill
						</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="offer-block offer-block_third">
						<span class="offer-block__img offer-block__img_asterisk"></span>
						<h4 class="offer-block__title">Почему мы?</h4>
						<p class="offer-block__text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua
						</p>
					</div>
				</div>
				<div class="col-12">
					<a href="#mission-sec" class="learn-more btn move-btn">
						Подробнее
					</a>
				</div>
			</div>
		</div>	
	</section>
	<section class="lab-sec" id="lab-sec">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 col-lg-4">
					<div class="lab-block">
						<span class="lab-block__icon">L</span>
						<h4 class="lab-block__title">Legal</h4>
						<p class="lab-block__text">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
						</p>
					</div>
				</div>
				<div class=" col-md-12 col-lg-4">
					<div class="lab-block">
						<span class="lab-block__icon">A</span>
						<h4 class="lab-block__title">Accounting</h4>
						<p class="lab-block__text">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
						</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="lab-block">
						<span class="lab-block__icon">B</span>
						<h4 class="lab-block__title">Business</h4>
						<p class="lab-block__text">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
						</p>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section class="mission-sec" id="mission-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<h4 class="mission-title">Миссия LAB Consulting</h4>
					<div class="mission d-flex">
						<div class="mission__text-block mission__text-block_first">
							<p class="mission__text">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
							</p>
							<p class="mission__text">
								Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
							</p>
						</div>
						<a href="about.html" class="more-btn d-sm-none">Узнать больше</a>
						<div class="mission__text-block mission__text-block_second">
							<p class="mission__text">
								Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							<p class="mission__text">
								Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
							</p>							
						</div>
					</div>
					<a href="about.html" class="more-btn d-none d-sm-block">Узнать больше</a>
				</div>
				<div class="col-lg-3">
					<h4 class="mission-title">Новости</h4>
					<ul class="news">
						<li class="news__item d-flex">
							<img class="news__img img-fluid" src="<?php bloginfo ( 'template_directory' ); ?>/img/truck.png" alt="truck">
							<div class="news__block">
								<a href="#" target="_blank" class="news__title">
									LAB Consulting запускает новое направление в своих услугах
								</a>
								<span class="news__date">02.12.2015</span>
							</div>
						</li>
						<li class="news__item d-flex">
							<img class="news__img img-fluid" src="<?php bloginfo ( 'template_directory' ); ?>/img/truck.png" alt="truck" >
							<div class="news__block">
								<a href="#" target="_blank" class="news__title">
									LAB Consulting запускает новое направление в своих услугах
								</a>
								<span class="news__date">02.12.2015</span>
							</div>
						</li>
						<li class="news__item d-flex">
							<img class="news__img img-fluid" src="<?php bloginfo ( 'template_directory' ); ?>/img/truck.png" alt="truck">
							<div class="news__block">
								<a href="#" target="_blank" class="news__title">
									LAB Consulting запускает новое направление в своих услугах
								</a>
								<span class="news__date">02.12.2015</span>
							</div>	
						</li>
					</ul>
				</div>
			</div>
		</div>	
	</section>	
<?php get_template_part('template-parts/footer'); ?>
	

