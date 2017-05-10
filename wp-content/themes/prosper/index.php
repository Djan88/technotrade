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
