<?php /* Template Name: Home */ ?>

<?php get_header('page'); ?>

            <!-- ##### BANNER #####-->
            <section id="banner">
              <div class="hero-content">
                <div class="hidden-sm-up">
                  <figure class="mobile-cover">
                    <img src="https://sekarguna.co.id/wp-content/uploads/2022/03/head-office-sekarguna-medika.jpg" alt="cover">
                  </figure>
                </div>
                <div class="container mq-lg-up" data-class="fixed-width">
                  <div class="row">
                    <div class="col-md-6 px-0">
                      <div class="banner-text">
                        <div class="title">
                          <h3 class="text-helper use-text-title">Online Medical Equipment Consultation</h3>
                        </div>
                        <h5 class="subtitle use-text-subtitle2">Get consultation on the use of medical equipment from quality medical equipment providers.</h5>

                        <div class="card search">
                          <?php get_search_form(); ?>
                          <!-- <div class="input-field primary search">
                            <input id="search" type="text" name="search" />
                            <label class="show-sm-up" for="search">Search product, outlet or consultation...</label><label class="show-xs-down" for="search">Search...</label>
                          </div>
                          <div class="action">
                            <button class="waves-effect btn secondary button">
                              <i class="material-icons icon show-sm-down">search</i><span class="show-md-up">search</span>
                            </button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 pa-6 show-sm-up">
                      <div class="deco-banner">
                        <div class="menu-bg"></div>
                        <div class="video-bg"></div>
                      </div>
                      <div class="video-wrap">
                        <div class="video-figure">
                          <div class="inner-figure">
                            <div class="hidden-sm-down">
                              <button class="btn-play btn-floating waves-effect hide" id="btn_play">
                                <i class="material-icons play">play_arrow</i>
                                <i class="material-icons pause">pause</i>
                              </button>
                            </div>
                            <img class="show-md-down" src="<?= get_stylesheet_directory_uri().'/assets/images/HO Sekarguna.jpg'; ?>" alt="HO Sekarguna Medika" />
                            <img class="hidden-md-down" id="banner_cover" src="<?= get_stylesheet_directory_uri().'/assets/images/HO Sekarguna.jpg'; ?>" alt="HO Sekarguna Medika" />
                            <div class="video">
                              <div class="show-lg-up" id="youtube"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="parallax-banner">
                        <div class="parallax-wrap dots-wrap">
                          <div class="inner-parallax">
                            <div class="figure">
                              <div>
                                <div data-enllax-ratio="0.2" data-enllax-type="foreground">
                                  <img src="<?= get_stylesheet_directory_uri().'/assets/images/decoration/dot-deco.svg'; ?>" alt="dot deco" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END BANNER #####-->
            <!-- ##### ABOUT #####-->
            <section class="space-top-short is-md" id="about">
              <div class="root">
                <div class="container fixed-width">
                  <div class="row">
                    <div class="col-md-5 py-md-6 px-sm-6 px-0">
                      <div class="text-center">
                        <div>
                          <div class="title-deco">
                            <h3 class="bg-img" style="background-image: url('https://sekarguna.co.id/wp-content/themes/sekarguna/assets/images/HO%20Sekarguna.jpg')">
                              <span>About us</span>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 pa-6">
                      <h4 class="title-default use-text-subtitle">Get quality medical equipment immediately wherever you are.</h4>
                      <div class="counter-wrap">
                        <div class="container fixed-width">
                          <div class="row justify-content-center align-items-center">
                            <div class="col ma-sm-0 my-4">
                              <div class="counter-item deco">
                                <div class="text">
                                  <h3>+30</h3>
                                  <p>Outlets</p>
                                </div>
                              </div>
                            </div>
                            <div class="col ma-sm-0 my-4">
                              <div class="counter-item deco">
                                <div class="text">
                                  <h3>+5000</h3>
                                  <p>products</p>
                                </div>
                              </div>
                            </div>
                            <div class="col ma-sm-0 my-4">
                              <div class="counter-item">
                                <div class="text">
                                  <h2>24</h2>
                                  <p style="font-size: 20px;">hours online</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <blockquote>Get quality medical equipment easily.</blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END ABOUT #####-->

            <!-- ##### FACILITIES #####-->
            <section class="space-top" id="facility">
              <div class="root">
                <div class="carousel-handle">
                  <div class="carousel-wrap">
                    <div class="carousel">
                      <div class="slick-carousel" id="services_carousel" data-length="19">
                        <div class="item show-lg-up">
                          <div class="carousel-prop">
                            <div></div>
                          </div>
                        </div>
                        <div class="item show-lg-up">
                          <div class="carousel-prop">
                            <div></div>
                          </div>
                        </div>
                        
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/alcare.jpg'; ?>" alt="Alcare" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(3); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/Covalon-Logo.jpg'; ?>" alt="Covalon" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-arnez.png'; ?>" alt="Arnez" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-wellion.svg'; ?>" alt="Wellion" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-vikamed.png'; ?>" alt="Vikamed" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-vikacare.png'; ?>" alt="Vikacare" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-kenz.png'; ?>" alt="Kenz" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/ardo.jpg'; ?>" alt="Ardo" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(6); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-GE.png'; ?>" alt="General Electric" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(4); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-inezco.png'; ?>" alt="Inezco" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(4); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/owgels.jpg'; ?>" alt="oxygen concentrat" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(4); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/Sentec-Logo.png'; ?>" alt="Sentec" /></figure>
                            <a class="btn waves-effect block secondary button" href="#">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/LMT-Medical-Systems.svg'; ?>" alt="LMT Medical Systems" /></figure>
                            <a class="btn waves-effect block secondary button" href="#">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/stihler.jpg'; ?>" alt="Stihler Electronic" /></figure>
                            <a class="btn waves-effect block secondary button" href="#">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/SMT-Medical.png'; ?>" alt="SMT Medical" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(9); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/Siem-Nova-Logo.png'; ?>" alt="Siem Nova" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(9); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/novos-logo.png'; ?>" alt="Novos" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(9); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/microlife.jpg'; ?>" alt="Microlife" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(9); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="card default-card">
                            <figure><img src="<?= get_stylesheet_directory_uri().'/assets/images/products/logo-corpuls.jpg'; ?>" alt="Corpuls" /></figure>
                            <a class="btn waves-effect block secondary button" href="<?= get_category_link(3); ?>">see detail</a>
                          </div>
                        </div>
                        <div class="item show-lg-up">
                          <div class="carousel-prop">
                            <div></div>
                          </div>
                        </div>
                        <div class="item show-lg-up">
                          <div class="carousel-prop">
                            <div></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="floating-title">
                  <div class="container fixed-width">
                    <div class="title">
                      <div class="title-icon-deco">
                        <div class="capsul"></div>
                        <div class="circle"></div>
                        <i class="material-icons icon">library_add</i>
                        <h3>Our Products</h3>
                        <div class="align-items-center justify-content-end see-all-products">
                          <a class="waves-effect btn primary button" href="<?= get_home_url(); ?>/all-products">See All Products</a>
                        </div>
                      </div>
                      <nav class="arrow">
                        <button class="btn-floating margin waves-effect" id="next_services"><i class="material-icons">arrow_back</i></button>
                        <button class="btn-floating margin waves-effect" id="prev_services"><i class="material-icons">arrow_forward</i></button>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### END FACILITIES #####-->

            <!-- ##### EXPERTISE #####-->
            <section class="space-top is-md" id="our-expertise">
              <div class="root">
                <div class="container">
                  <div class="row spacing8">
                    <div class="col-lg-1 show-lg-up"></div>
                    <div class="col-md-5 text-center text-lg-start">
                      <div class="title-deco">
                        <div class="decoration show-lg-up"></div>
                        <div>
                          <div class="title-deco">
                            <h3 style="background-image: url()">
                              <span>Category Products</span>
                            </h3>
                          </div>
                        </div>
                      </div>
                      <div class="wow parallax-scene zoomInShort" data-wow-offset="-100" data-wow-delay="0.1s" data-wow-duration="0.3s">
                        <div class="parallax-scene">
                          <div id="scene">
                            <div data-depth="0.15"><span class="icon-green"></span></div>
                            <div data-depth="0.1"><span class="icon-red"></span></div>
                            <div data-depth="0.3"><span class="icon-blue"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                      <h4 class="title-default use-text-subtitle">We are the first company to provide medical equipment in Indonesia.</h4>
                      <p class="desc use-text-paragraph">Our customer service team is always available to listen and help. Because we believe happiness is a big part of good health.</p>
                      <div class="hidden-xs-down">
                        <div class="running-tag">
                          <div class="slick-carousel" id="expertise_carousel">
                            <div class="tag-group">
                              <span class="tag-item">Rehabilitation Equipment</span>

                              <span class="tag-item">Scales</span>

                              <span class="tag-item">Sphygmomanometer</span>
                            </div>
                            <div class="tag-group">
                              <span class="tag-item">Respiratory Therapy Device</span>

                              <span class="tag-item">Medical Device</span>

                              <span class="tag-item">Blood Check Equipment</span>
                            </div>
                            <div class="tag-group">
                              <span class="tag-item">Thermometer</span>

                              <span class="tag-item">Emergency Kit</span>

                              <span class="tag-item">Hospital Equipment</span>
                            </div>
                            <div class="tag-group">
                              <span class="tag-item">Walking Aid</span>

                              <span class="tag-item">Hearing Aid</span>

                              <span class="tag-item">Accessories</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END EXPERTISE #####-->
            <!-- ##### TESTIMONIAL #####-->
            <section class="space-top-short" id="testimonials">
              <div class="root">
                <div class="carousel">
                  <div class="slick-carousel" id="testimonial_carousel" data-length="4">
                    <div class="item show-lg-up">
                      <div class="item-props-first"></div>
                    </div>
                    
                    <div class="item">
                      <div class="testi-card">
                        <div class="card paper">
                          <p>Even more so, especially products that have been discontinued to immediately get a replacement whose technology is commensurate or more is needed at this time.</p>
                          <div class="rating"><i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i><i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i></div>
                        </div>
                        <div class="person">
                          <div class="name">
                            <h6>Erawati</h6><span class="caption">RSUP Dr. Sardjito</span>
                          </div>
                          <div class="avatar-img avatar">
                            <img src="https://avatars.dicebear.com/api/avataaars/qwert.svg" alt="name" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="testi-card">
                        <div class="card paper">
                          <p>Increasing quality and quality, to listen more to the input and suggestions of consumers … Thank you.</p>
                          <div class="rating"><i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i><i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon" title="5">star</i></div>
                        </div>
                        <div class="person">
                          <div class="name">
                            <h6>Rica</h6><span class="caption">Puskesmas Mandala</span>
                          </div>
                          <div class="avatar-img avatar">
                            <img src="https://avatars.dicebear.com/api/avataaars/qwert.svg" alt="name" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="testi-card">
                        <div class="card paper">
                          <p>The service is good and the response is fast. It would be better to open a branch in Samarinda, so that it can be closer to consumers in the city of Samarinda. The quality of medical equipment offered is satisfying.</p>
                          <div class="rating"><i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i><i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i></div>
                        </div>
                        <div class="person">
                          <div class="name">
                            <h6>Dani Tarigan, M.Si</h6><span class="caption">RSUD IA Moeis Samarinda</span>
                          </div>
                          <div class="avatar-img avatar">
                            <img src="https://avatars.dicebear.com/api/avataaars/as.svg" alt="name" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="testi-card">
                        <div class="card paper">
                          <p>Adding a variety of products for PICU, NICU, OK, IGD, MEDICAL REHAB, so that a wider range of products is owned. And if possible laboratory equipment. thank you.</p>
                          <div class="rating"><i class="material-icons star-icon" title="1">star</i><i class="material-icons star-icon" title="2">star</i><i class="material-icons star-icon" title="3">star</i><i class="material-icons star-icon" title="4">star</i><i class="material-icons star-icon-disable" title="1">star</i></div>
                        </div>
                        <div class="person">
                          <div class="name">
                            <h6>Andi Helmi S</h6><span class="caption">RSUD Pariama</span>
                          </div>
                          <div class="avatar-img avatar">
                            <img src="https://avatars.dicebear.com/api/avataaars/as.svg" alt="name" />
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item show-lg-up">
                      <div class="item-props-last"></div>
                    </div>
                  </div>
                </div>
                <div class="floating-title">
                  <div class="container fixed-width">
                    <div class="title">
                      <div class="title-icon-deco">
                        <div class="capsul"></div>
                        <div class="circle"></div>
                        <i class="material-icons icon">format_quote</i>
                        <h3>people testimonials</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END TESTIMONIAL #####-->
            <!-- ##### CALL ACTION #####-->
            <section class="space-top-short" id="call-to-action">
              <div class="container fixed-width-md-up">
                <div class="root">
                  <div class="card paper">
                    <div class="row align-items-center mb-0">
                      <div class="col-md-8 pa-0">
                        <h4 class="display-1 pb-2">Ready to get started?</h4>
                        <p>No waiting room. We make it easy to get medical equipment whenever and wherever you want</p>
                      </div>
                      <div class="col-md-4 pa-0">
                        <div class="d-flex align-items-center justify-content-end">
                          <a class="waves-effect btn primary button" href="<?= get_home_url(); ?>/contact">Create Appointment Now!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END CALL ACTION #####-->
            <!-- ##### CLINICS #####-->
            <section class="space-top-short" id="clinics">
              <div id="our-office" class="root">
                <div class="parallax-bottom">
                  <div class="parallax-wrap">
                    <div>
                      <div class="inner-parallax">
                        <div class="figure">
                          <div>
                            <div data-enllax-ratio="-0.15" data-enllax-type="foreground">
                              <div class="parallax-oval parallax-primary"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container fixed-width">
                  <div class="row spacing6">
                    <div class="col-lg-1 pa-6 show-lg-up"></div>
                    <div class="col-lg-5 col-md-6 pa-6">
                      <h4 class="title-primary mt-10">Our Office</h4>

                      <div class="row">
                        <div>
                          <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0s" data-duration="0.3s">
                            <div class="address-card">
                              <div class="paper">
                                <h6 class="title title-head-office-home">Head Office Sekarguna</h6>
                                <img class="head-office-img" src="https://sekarguna.co.id/wp-content/themes/sekarguna/assets/images/HO Sekarguna.jpg" alt="HO Sekarguna Medika">
                                <div class="row">
                                  <div class="col-md-6 pa-0"><i class="material-icons icon">phone</i>+62 21 7655 678</div>
                                  <div class="col-md-6 pa-0"><i class="material-icons icon">email</i>mail@sekarguna.co.id</div>
                                  <div class="col-sm-12 pa-0"><i class="material-icons icon">location_on</i>Jl. Ciputat Raya No.64, Pondok Pinang, Jakarta Selatan 12310</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <h6 class="title-branch-office-home">Branch Office :</h6>
                       
                        <div class="row">
                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.4s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-bandung"><h6 class="title">Bandung</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-palembang"><h6 class="title">Palembang</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-malang"><h6 class="title">Malang</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-lampung"><h6 class="title">Lampung</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.2s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-yogyakarta"><h6 class="title">Yogyakarta</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-medan"><h6 class="title">Medan</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-surabaya"><h6 class="title">Surabaya</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-semarang"><h6 class="title">Semarang</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-solo"><h6 class="title">Solo</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 pa-0">
                            <div class="wow fadeInLeftShort" data-wow-offset="-50" data-wow-delay="0.6000000000000001s" data-duration="0.3s">
                              <div class="address-card">
                                <div class="paper">
                                  <a href="<?= get_home_url(); ?>/branch-office-bali"><h6 class="title">Bali</h6></a>
                                </div>
                              </div>
                            </div>
                          </div>

                        <!-- <div class="align-items-center justify-content-end">
                          <a class="waves-effect btn secondary button button-all-outlet" href="">See All Outlet</a>
                        </div> -->
                        </div>

                      </div>
                    </div>
                    <div class="col-md-6 pa-6">
                      <div class="card map">
                        <!-- <div id="map"></div> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4866319726564!2d106.77541294222775!3d-6.270762628876003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1b21e0f28bd%3A0x62f234a08fccf288!2sJl.%20Ciputat%20Raya%20No.64%2C%20RT.1%2FRW.6%2C%20Pd.%20Pinang%2C%20Kec.%20Kby.%20Lama%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012310!5e0!3m2!1sen!2sid!4v1646990108511!5m2!1sen!2sid" width="584" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ##### END CLINICS #####-->
          </main>
        </div>

<?php get_footer(); ?>
