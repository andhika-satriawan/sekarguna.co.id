<?php /* Template Name: All Products */ ?>

<?php get_header('page'); ?>

<div id="banner-video" class="show-sm-up">
  <div class="bg-banner"></div>
  <h1>SEKARGUNA PRINCIPLE</h1>
  <p>All Product</p>
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
        <div class="video">
          <div class="show-lg-up" id="youtube_principal"></div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- ##### ASK DOCTORS #####-->
<section class="is-xs box-all-products" id="ask-doctors">
  <div class="root">
    <div class="deco"></div>
    <div class="container-fluid fixed-width-md-up">
      <div class="row">

        <!-- ##### MENU BRANDS #####-->
        <div class="col-md-2 pa-0">
          <div id="principle-menu-fixed">
            <div id="menu-principle" class="wow fadeInLeftShort" data-offset="-100" data-delay="0.2s" data-duration="0.3s">
              <div class="side-filter">
                <h4 id="all-products" class="title-primary mt-10">Alcare</h4>
                <ul class="collection nav" id="case_categories">
                  <li class="collection-item filter active"><a href="#tab0" class="waves-effect">all</a></li>
                  <li class="collection-item filter"><a href="#tab1" class="waves-effect">Corpuls</a></li>
                  <li class="collection-item filter"><a href="#tab2" class="waves-effect">Microlife</a></li>
                  <li class="collection-item filter"><a href="#tab3" class="waves-effect">Novos</a></li>
                  <li class="collection-item filter"><a href="#tab4" class="waves-effect">Siem Nova</a></li>
                  <li class="collection-item filter"><a href="#tab5" class="waves-effect">SMT</a></li>
                  <li class="collection-item filter"><a href="#tab6" class="waves-effect">Stihler</a></li>
                  <li class="collection-item filter"><a href="#tab7" class="waves-effect">LMT</a></li>
                  <li class="collection-item filter"><a href="#tab8" class="waves-effect">Sentec</a></li>
                  <li class="collection-item filter"><a href="#tab9" class="waves-effect">Owgels</a></li>
                  <li class="collection-item filter"><a href="#tab10" class="waves-effect">Inezco</a></li>
                  <li class="collection-item filter"><a href="#tab11" class="waves-effect">GE</a></li>
                  <li class="collection-item filter"><a href="#tab12" class="waves-effect">Ardo</a></li>
                  <li class="collection-item filter"><a href="#tab13" class="waves-effect">Kenz</a></li>
                  <li class="collection-item filter"><a href="#tab14" class="waves-effect">Vikacare</a></li>
                  <li class="collection-item filter"><a href="#tab15" class="waves-effect">Vikamed</a></li>
                  <li class="collection-item filter"><a href="#tab16" class="waves-effect">Wellion</a></li>
                  <li class="collection-item filter"><a href="#tab17" class="waves-effect">Arnez</a></li>
                  <li class="collection-item filter"><a href="#tab18" class="waves-effect">Covalon</a></li>
                  <li class="collection-item filter"><a href="#tab19" class="waves-effect">Alcare</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- ##### END MENU BRANDS #####-->

        <div class="col-md-10 pa-6 py-0">

          <!-- ##### LOGO ALL BRANDS #####-->
          <section id="facility">
            <div class="root">
              <div class="carousel-handle">
                <div class="carousel-wrap">
                  <div class="carousel">
                    <div class="slick-carousel" id="brand_carousel">
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/alcare.jpg'; ?>" alt="Alcare" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/Covalon-Logo.jpg'; ?>" alt="Covalon" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-arnez.png'; ?>" alt="Arnez" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-wellion.svg'; ?>" alt="Wellion" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-vikamed.png'; ?>" alt="Vikamed" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-vikacare.png'; ?>" alt="Vikacare" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-kenz.png'; ?>" alt="Kenz" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/ardo.jpg'; ?>" alt="Ardo" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-GE.png'; ?>" alt="General Electric" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-inezco.png'; ?>" alt="Inezco" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/owgels.jpg'; ?>" alt="oxygen concentrat" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/Sentec-Logo.png'; ?>" alt="Sentec" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/LMT-Medical-Systems.svg'; ?>" alt="LMT Medical Systems" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/stihler.jpg'; ?>" alt="Stihler Electronic" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/SMT-Medical.png'; ?>" alt="SMT Medical" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/Siem-Nova-Logo.png'; ?>" alt="Siem Nova" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/novos-logo.png'; ?>" alt="Novos" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/microlife.jpg'; ?>" alt="Microlife" /></figure>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card default-card">
                          <figure><img src="<?= get_stylesheet_directory_uri() . '/assets/images/products/logo-corpuls.jpg'; ?>" alt="Corpuls" /></figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
          <!-- ##### END LOGO ALL BRANDS #####-->

          <div id="tab0" class="massonry tab_content">
            <div class="row" id="productListAll"></div>
          </div>
          <div id="tab1" class="massonry tab_content">
            <div class="row" id="productListCorpuls"></div>
          </div>
          <div id="tab2" class="massonry tab_content">
            <div class="row" id="productListMicrolife"></div>
          </div>
          <div id="tab3" class="massonry tab_content">
            <div class="row" id="productListNovos"></div>
          </div>
          <div id="tab4" class="massonry tab_content">
            <div class="row" id="productListSiemNova"></div>
          </div>
          <div id="tab5" class="massonry tab_content">
            <div class="row" id="productListSMT"></div>
          </div>
          <div id="tab6" class="massonry tab_content">
            <div class="row" id="productListStihler"></div>
          </div>
          <div id="tab7" class="massonry tab_content">
            <div class="row" id="productListLMT"></div>
          </div>
          <div id="tab8" class="massonry tab_content">
            <div class="row" id="productListSentec"></div>
          </div>
          <div id="tab9" class="massonry tab_content">
            <div class="row" id="productListOwgels"></div>
          </div>
          <div id="tab10" class="massonry tab_content">
            <div class="row" id="productListInezco"></div>
          </div>
          <div id="tab11" class="massonry tab_content">
            <div class="row" id="productListGE"></div>
          </div>
          <div id="tab12" class="massonry tab_content">
            <div class="row" id="productListArdo"></div>
          </div>
          <div id="tab13" class="massonry tab_content">
            <div class="row" id="productListKenz"></div>
          </div>
          <div id="tab14" class="massonry tab_content">
            <div class="row" id="productListVikacare"></div>
          </div>
          <div id="tab15" class="massonry tab_content">
            <div class="row" id="productListVikamed"></div>
          </div>
          <div id="tab16" class="massonry tab_content">
            <div class="row" id="productListWellion"></div>
          </div>
          <div id="tab17" class="massonry tab_content">
            <div class="row" id="productListArnez"></div>
          </div>
          <div id="tab18" class="massonry tab_content">
            <div class="row" id="productListCovalon"></div>
          </div>
          <div id="tab19" class="massonry tab_content">
            <div class="row" id="productListAlcare"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!-- ##### END ASK DOCTORS #####-->
</main>
</div>

<script>
  const getDataFromAPI = (letId, linkAPI) => {
    const elementMicrolife = document.getElementById(letId);

    fetch(linkAPI, {
        method: "GET",
        header: {
          "Content-Type": "application/json"
        }
      })

      .then((response) => response.json())
      .then((microlife) => {
        microlife.products.data.map((product) => {
          elementMicrolife.innerHTML += `
          <div class="col-sm-6 col-md-4 py-3">
            <div class="wow fadeInUpShort" data-wow-delay="0s" data-wow-duration="0.4s">
              <div class="card profile">
                <div class="person">
                  <div class="avatar-img avatar"></div>
                    <div class="name">
                      <img class="img-fluid" src="https://assets.myalkes.com/${product.photo}" >
                      <h4>${product.name}</h4>
                    </div>
                  </div>
                  <hr class="divider" />
                  <small>${product.category.name}</small>
                  <div class="action">
                    <div class="property">
                      <span><i class="ion-thumbsup"></i>&nbsp; 95%</span><span><i class="ion-share"></i>&nbsp; Share</span>
                    </div>
                    <a class="btn secondary waves-effect" target="_blank" href="https://myalkes.com/produk/${product.slug}">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        `
        })
      })
  }

  getDataFromAPI('productListAll', 'https://app.myalkes.com/api/v1/products');
  getDataFromAPI('productListCorpuls', 'https://app.myalkes.com/api/v1/products?brand=corpuls');
  getDataFromAPI('productListMicrolife', 'https://app.myalkes.com/api/v1/products?brand=microlife');
  getDataFromAPI('productListNovos', 'https://app.myalkes.com/api/v1/products?brand=novos');
  getDataFromAPI('productListSiemNova', 'https://app.myalkes.com/api/v1/products?brand=siem%20nova');
  getDataFromAPI('productListSMT', 'https://app.myalkes.com/api/v1/products?brand=smt');
  getDataFromAPI('productListStihler', 'https://app.myalkes.com/api/v1/products?brand=stihler');
  getDataFromAPI('productListLMT', 'https://app.myalkes.com/api/v1/products?brand=lmt');
  getDataFromAPI('productListSentec', 'https://app.myalkes.com/api/v1/products?brand=sentec');
  getDataFromAPI('productListOwgels', 'https://app.myalkes.com/api/v1/products?brand=owgels');
  getDataFromAPI('productListInezco', 'https://app.myalkes.com/api/v1/products?brand=inezco');
  getDataFromAPI('productListGE', 'https://app.myalkes.com/api/v1/products?brand=ge');
  getDataFromAPI('productListArdo', 'https://app.myalkes.com/api/v1/products?brand=ardo');
  getDataFromAPI('productListKenz', 'https://app.myalkes.com/api/v1/products?brand=kenz');
  getDataFromAPI('productListVikacare', 'https://app.myalkes.com/api/v1/products?brand=vikacare');
  getDataFromAPI('productListVikamed', 'https://app.myalkes.com/api/v1/products?brand=vikamed');
  getDataFromAPI('productListWellion', 'https://app.myalkes.com/api/v1/products?brand=wellion');
  getDataFromAPI('productListArnez', 'https://app.myalkes.com/api/v1/products?brand=arnez');
  getDataFromAPI('productListCovalon', 'https://app.myalkes.com/api/v1/products?brand=covalon');
  getDataFromAPI('productListAlcare', 'https://app.myalkes.com/api/v1/products?brand=alcare');
</script>

<?php get_footer(); ?>