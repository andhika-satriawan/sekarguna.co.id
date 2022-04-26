<?php get_header('page'); ?>

  

            <div class="brand-name-product">
              <div class="container">
                <h4 class="title-primary">All Outlets</h4>
              </div>
            </div>

            <!-- ##### ASK DOCTORS #####-->
            <section class="is-xs" id="ask-doctors">
              <div class="root">
                <div class="deco"></div>
                <div class="container fixed-width-md-up">
                  <div class="spacing6 justify-content-center">

                      <div class="massonry">
                        <div class="row">

                          <?php
                            if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                          ?>

                          <div class="col-sm-6 col-md-4 px-lg-8 px-3 py-3">
                            <div class="wow fadeInUpShort" data-wow-delay="0s" data-wow-duration="0.4s">
                              <div class="card profile">
                                <div class="person">
                                  <div class="avatar-img avatar"></div>
                                  <div class="name">
                                    <h4><?php the_title();  ?></h4>
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                    <p><?php the_excerpt(); ?></p>
                                  </div>
                                </div>
                                <hr class="divider" />
                                <div class="action">
                                  <div class="property">
                                    <span><i class="ion-thumbsup"></i>&nbsp; 95%</span><span><i class="ion-share"></i>&nbsp; Share</span>
                                  </div>
                                  <a class="btn secondary waves-effect" href="<?= get_permalink(); ?>">Details</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php endwhile; ?>
                          <?php endif; ?>

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END ASK DOCTORS #####-->


          </main>
        </div>

<?php get_footer(); ?>
