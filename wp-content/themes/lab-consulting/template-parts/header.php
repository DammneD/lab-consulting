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
	<header class="header-another" id="header-another">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-sm-6 col-md-4 d-flex d-sm-block justify-content-center">
					<a href="http://lab.dammned.ru" class="logo-link">
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
		</div>
	</header>
	<section class="breadcrumb-sec" id="breadcrumb-sec">
		<div class="container">		
			<div class="row align-items-center">
				<div class="col-12 col-lg-5">
					<h2 class="breadcrumb-title"><?php the_title(); ?></h2>
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				</div>
				<div class="col-12 col-lg-7">
                    <?php if ((get_the_ID())) { ?>
                    <ul class="breadcrumb-nav d-flex justify-content-lg-end flex-column flex-md-row">
						<?php wp_list_pages( array (
							'child_of' => get_the_ID(),
							'title_li' => 0
							));
						 ?>
					</ul>
                    <?php } ?>

					
				</div>
			</div>			
		</div>
	</section>