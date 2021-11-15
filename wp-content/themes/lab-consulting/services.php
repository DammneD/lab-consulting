<?php
	/*
	Template Name: Услуги
	Template Post Type: post, page, product
	*/
 ?>

<?php get_template_part( 'template-parts/head' ); ?>
<?php get_template_part('template-parts/header'); ?>
	<section class="juristic-sec" id="juristic-sec">
		<div class="container">	
			<div class="row">
				<div class="col-md-4 col-lg-3">
					<span class="juristic-img"></span>
				</div>
				<div class="col-md-8 col-lg-4">
					<div class="juristic-main">
						<h4 class="juristic-main__title">
							Юридическое
							сопровождение
						</h4>
						<p class="juristic-main__text">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau-dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
						</p>
					</div>
				</div>
				<div class="d-none d-lg-block col-lg-5">
					<ul class="juristic-list">
						<li class="juristic-list__item">
							<span class="juristic-list__arrow">→</span>
							<a href="#" class="juristic-list__link">
								Подкатегория услуг первая
							</a>
						</li>
						<li class="juristic-list__item active-link">
							<span class="juristic-list__arrow">→</span>
							<a href="#" class="juristic-list__link">
								Вторая подкатегория
							</a>
						</li>
						<li class="juristic-list__item">
							<span class="juristic-list__arrow">→</span>
							<a href="#" class="juristic-list__link">
								Маленькая услуга
							</a>
						</li>
						<li class="juristic-list__item">
							<span class="juristic-list__arrow">→</span>
							<a href="#" class="juristic-list__link">
								Довольно длинная и замысловатая
							</a>
						</li>
						<li class="juristic-list__item">
							<span class="juristic-list__arrow">→</span>
							<a href="#" class="juristic-list__link">
								Ещё одна
							</a>
						</li>
						<li class="juristic-list__item">
							<span class="juristic-list__arrow">→</span>
							<a href="#" class="juristic-list__link">
								И ещё одна в конце
							</a>
						</li>
					</ul>
				</div>
			</div>	
		</div>	
	</section>
	<section class="consult-sec" id="consult-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h3 class="consult-title">Вторая подкатегория</h3>
					<div class="consult-text">
						<p class="consult-text__block">
							But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
						</p>
						<p class="consult-text__block">
							To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
						</p>
						<p class="consult-text__block">
							To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
						</p>
						<p class="consult-text__block">
							Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
						</p>
						<p class="consult-text__block">
							To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
						</p>
						<p class="consult-text__block">
							No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. 
						</p>
					</div>
					<div class="consult-card">
						<h5 class="consult-card__title">Нужна бесплатная консультация?</h5>
						<div class="consult-card__request d-flex">
							<button type="submit" class="consult-card__btn">
								Оставить заявку
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
							        <input type="name" placeholder="Имя" class="box-modal__item" required>    
							        <input type="email" placeholder="E-mail" class="box-modal__item" required>
							        <input type="tel" placeholder="Телефон" class="box-modal__item" required> 
							        <button type="submit" class="box-modal__btn btn">
							        	<i class="fas fa-phone"></i>
							        	Заказать звонок
							    	</button>
							    </form>
							</div>
							<a href="tel:+380487542356" class="consult-card__number">
								+38 (048) 754-23-56
							</a>
						</div>
						<p class="consult-card__text">
							Наши консультанты свяжутся с Вами максимально быстро и ответят на все интересующие Вас вопросы
						</p>
					</div>					
				</div>
				<div class="col-lg-4">
					<div class="consult-nav">
						<h4 class="consult-nav__title">Навигация</h4>
						<ul class="consult-nav__list">	
							<li class="consult-nav__item">
								<span class="consult-nav__cube"></span>
								<a href="#" class="consult-nav__link">
									Подпункт номер один
								</a>
							</li>
							<li class="consult-nav__item active-cube">
								<span class="consult-nav__cube"></span>
								<a href="#" class="consult-nav__link">
									Второй подпункт
								</a>
							</li>
							<li class="consult-nav__item">
								<span class="consult-nav__cube"></span>
								<a href="#" class="consult-nav__link">
									Третья подкатегория c <br>
									длинным названием
								</a>
							</li>
							<li class="consult-nav__item">
								<span class="consult-nav__cube"></span>
								<a href="#" class="consult-nav__link">
									Категория номер четыре
								</a>
							</li>
						</ul>
						<div class="consult-nav__slider">
							<h4 class="consult-nav__title">Отзывы</h4>
							<div class="consult-nav__slider-body text-center">
								<div class="consult-nav__slider-item">
									<img src="<?php bloginfo ( 'template_directory' ); ?>/img/slide.png" alt="man" class="consult-nav__slider-img img-fluid">
									<h5 class="consult-nav__slider-title">
										Валерий Цукерберг
									</h5>
									<p class="consult-nav__slider-text">
										al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy
									</p>
									<i class="fab fa-facebook-f"></i>
								</div>
								<div class="consult-nav__slider-item">
									<img src="<?php bloginfo ( 'template_directory' ); ?>/img/slide1.png" alt="man" class="consult-nav__slider-img img-fluid">
									<h5 class="consult-nav__slider-title">
										Василий Цукерберг
									</h5>
									<p class="consult-nav__slider-text">
										al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy
									</p>
									<i class="fab fa-facebook-f"></i>
								</div>
								<div class="consult-nav__slider-item">
									<img src="<?php bloginfo ( 'template_directory' ); ?>/img/slide2.png" alt="man" class="consult-nav__slider-img img-fluid">
									<h5 class="consult-nav__slider-title">
										Ибрагим Цукерберг
									</h5>
									<p class="consult-nav__slider-text">
										al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy
									</p>
									<i class="fab fa-facebook-f"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<?php get_template_part( 'template-parts/footer' ) ?>	