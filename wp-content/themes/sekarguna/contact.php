<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="<?= get_stylesheet_directory_uri().'/assets/images/loading.gif'; ?>" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content fresh fresh-var" id="main-wrap">
      <div class="form-page">
        <div class="decoration">
          <div class="oval"></div>
          <div class="deco-top">
            <div class="capsul"></div>
            <div class="circle"></div>
          </div>
          <div class="deco-bottom">
            <div class="capsul"></div>
            <div class="circle"></div>
          </div>
        </div>
        <div class="form-wrap">
          <div class="hidden-md-up">
            <div class="logo logo-header">
              <a href="<?= get_home_url(); ?>"><img src="./assets/images/medical-logo.png" alt="logo"></a>
            </div>
          </div>
          <div class="hidden-sm-down">
            <a class="waves-effect btn-icon backtohome" href="<?= get_home_url(); ?>">
              <span><i class="ion-ios-home-outline"></i><i class="ion-ios-arrow-thin-left"></i></span>
            </a>
          </div>
          <div class="container max-md">
            <h3 class="use-text-title pb-3 text-center">How we can help?</h3>
            <p class="desc use-text-subtitle2 text-center">Do you have any questions? Are you ready to reduce cost and create new revenue? Or you simply want to say hi? Drop us a message.</p>
            <div class="form">
              <form action="/contact/#wpcf7-f123-o1" method="POST" novalidate="novalidate" data-status="init" id="contact_form">
                <div style="display: none;">
                  <input type="hidden" name="_wpcf7" value="123">
                  <input type="hidden" name="_wpcf7_version" value="5.5.6">
                  <input type="hidden" name="_wpcf7_locale" value="en_US">
                  <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f123-o1">
                  <input type="hidden" name="_wpcf7_container_post" value="0">
                  <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                </div>
                <div class="row spacing6">
                  <div class="col-sm-6 pa-6">
                    <div class="input-field primary">
                      <input class="validate" id="name" type="text" name="your-name" required>
                      <label for="name">What is your name? *</label>
                    </div>
                  </div>
                  <div class="col-sm-6 pa-6">
                    <div class="input-field primary">
                      <input class="validate" id="email" type="email" name="your-email" required>
                      <label for="email">What it your email? *</label>
                    </div>
                  </div>
                  <div class="col-sm-6 pa-6">
                    <div class="input-field primary">
                      <input id="phone" type="tel" name="tel-973">
                      <label for="phone">What is your phone number?</label>
                    </div>
                  </div>
                  <div class="col-sm-6 pa-6">
                    <div class="input-field primary">
                      <input id="company" type="text" name="your-subject">
                      <label for="company">What is your company?</label>
                    </div>
                  </div>
                  <div class="col-sm-12 pa-6">
                    <div class="input-field primary">
                      <textarea name="your-message" class="materialize-textarea" id="message" rows="6"></textarea>
                      <label for="message">Write your message here</label>
                    </div>
                  </div>
                </div>
                <div class="btn-area">
                  <div class="form-control-label">
                    <label><input class="filled-in primary" type="checkbox" required><span>I have read and accept the Terms of</span></label>
                    <br/><a href="#">Service &amp; Privacy Policy *</a>
                  </div>
                  <button class="btn btn-large waves-effect primary" type="submit">Send Message
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer('contact'); ?>