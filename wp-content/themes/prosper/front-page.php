<?php get_header(); ?>
    <main>
      <div class="contact">
        <div class="container">
          <div class="contact__block">
            <a href="" class="zvonok">заказать обратный звонок</a>
            <ul class="social__header">
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Contact -->
      <section class="slider">
        <div class="slider__container" >
          <div class="slider__item">
            <img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="" class="slide__img">
            <div class="content__slider">
              <h1>Неужели это <br>моя посуда?</h1>
              <p>ТАБЛЕТКИ ДЛЯ <br> ПОСУДОМОЕЧНЫХ МАШИН </p>
              <a href="">узнать больше</a>
            </div>
          </div>
          <div class="slider__item">
            <img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="" class="slide__img">
            <div class="content__slider">
              <h1>Неужели это <br>моя посуда?</h1>
              <p>ТАБЛЕТКИ ДЛЯ <br> ПОСУДОМОЕЧНЫХ МАШИН </p>
              <a href="">узнать больше</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Slider -->

        <section class="news">
            <div class="title-bg">
                <div class="container">
                    <h2>Новости</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news__block">
                            <div class="col-md-4">
                                <img src="<?php bloginfo('template_url'); ?>/img/news1.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>15.04.17 Мы говорим нет вредным добавкам</h3>
                                <p>Продукция PROSPER не содержит опасных для здоровья человека и планеты веществ, таких как фосфаты, хлор, продукты нефтехимии, искусственные ароматизаторы.</p>
                                <a href=""> > </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news__block">
                            <div class="col-md-4">
                                <img src="<?php bloginfo('template_url'); ?>/img/sert.png" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>15.04.17 Победа в выставке - Стиральные порошки "Prosper"</h3>
                                <p>Мы уже завоевали популярность на значительной территории Таможенного союза, странах Ближнего Востока и Евросоюза. ароматизаторы.</p>
                                <a href=""> > </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News -->

        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>порошок</h3>
                                <p>Hand Wash Lemon</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/poroshok.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>Гель</h3>
                                <p>ДЛЯ СТИРКИ</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/gel.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>капсулы</h3>
                                <p>для стирки</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/capsuly.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>кондиционер</h3>
                                <p>для черного белья</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/conditioner.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="">узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product -->

        <section class="o-brende">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                          <?php
                            echo the_content();
                          ?>
                      <?php endwhile; else: ?>
                          <section>
                            <div class="container">
                              <div class="row" style="text-align: center;">
                                <?php _e('Sorry, no posts matched your criteria.'); ?>
                              </div>
                            </div>
                          </section> 
                      <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- o-brende -->

    </main>
    <!-- Main -->
<?php get_footer(); ?>
