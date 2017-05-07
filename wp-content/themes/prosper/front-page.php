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
      <?php if( have_rows('slider') ): ?>
        <section class="slider">
          <div class="slider__container" >
          <?php while( have_rows('slider') ): the_row(); 
            // vars
            $slider_img = get_sub_field('slider_img');
            $slider_title = get_sub_field('slider_title');
            $slider_subtitle = get_sub_field('slider_subtitle');
            $slider_btn_text = get_sub_field('slider_btn_text');
            $slider_btn_link = get_sub_field('slider_btn_link');
            ?>
            <div class="slider__item">
              <img src="<?php echo $slider_img; ?>" alt="" class="slide__img">
              <div class="content__slider">
                <?php if( $slider_title ): ?>
                  <h1><?php echo $slider_title; ?></h1>
                <?php endif; ?>
                <?php if( $slider_subtitle ): ?>
                  <p><?php echo $slider_subtitle; ?></p>
                <?php endif; ?>
                <?php if( $slider_btn_link ): ?>
                  <a href="<?php echo $slider_btn_link; ?>"><?php echo $slider_btn_text; ?></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
          </div>
        </section>
      <?php endif; ?>
      <!-- Slider -->

        <section class="news">
          <div class="title-bg">
              <div class="container">
                  <h2>Новости</h2>
              </div>
          </div>
          <?php
            // задаем нужные нам критерии выборки данных из БД
            $args = array(
              'posts_per_page' => 2,
              'category_name' => 'novosti-i-stati'
            );

            $query = new WP_Query( $args );

            // Цикл
            if ( $query->have_posts() ) {
              echo '<div class="container">';
              echo '<div class="col-md-6">';
              echo '<div class="news__block">';
              echo '<div class="col-md-4">';
              echo get_the_post_thumbnail(array(200,200));
              echo '</div">';
              echo '<div class="col-md-8">';
              echo '<h3>';
              echo the_time('d.m.Y');
              echo ' ';
              echo get_the_title();
              echo '</h3>';
              echo '<p>';
              echo get_the_content();
              echo '</p>';
              echo '<a href="';
              echo get_the_permalink();
              echo '"> > </a>';
              echo '</div">';
              echo '</div">';
              echo '</div">';
              while ( $query->have_posts() ) {
                $query->the_post();
                echo '<div class="row">';
                echo '<li>' . get_the_title() . '</li>';
              }
              echo '</div>';
              echo '</div>';
            } else {
              // Постов не найдено
            }
            /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
            wp_reset_postdata();
          ?>
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
