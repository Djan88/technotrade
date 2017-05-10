<?php get_header(); ?>
    <section class="news">
      <div class="title-bg">
        <div class="container">
          <h2>
            <?php if (is_category()) { ?>
              <?php single_cat_title(); ?>
            <?php } else {?>
              <?php the_title(); ?>
            <?php } ?>
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <?php if (is_category('2')) { ?>
            <div class="col-md-3 col-xs-12">
              <?php 
                $menu_sub = wp_nav_menu(array('menu' => 'Sub Navigation', 'container' => false, menu_class => 'sub_nav' ));
                echo $menu_sub;
              ?>
            </div>
            <div class="col-md-9 col-xs-12">
              <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="col-md-4 product_item">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(array(300, 300)); ?>
                      <h4><?php the_title(); ?></h4>
                    </a>
                  </div>
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
            <?php } else { ?>
              <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <h2><?php the_title(); ?></h2>
                  <p>
                    <?php
                      echo the_content();
                    ?>
                  </p>
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
            <?php } ?>
        </div>
    </div>
  </section>
  <!-- o-brende -->
</main>
<!-- Main -->
<?php get_footer(); ?>
