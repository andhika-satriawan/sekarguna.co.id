<?php /* Template Name:Magazine */ ?>

<?php get_header('page'); ?>

<div id="banner-video" class="show-sm-up">
    <div class="bg-banner"></div>
    <h1>SEKARGUNA MAGAZINE</h1>
    <p>News & Event</p>
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
                    <div class="show-lg-up" id="youtube_event"></div>
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

<div class="box-magazine">
    <div class="container">
        <div id="articleMyAlkes" class="row">

<?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'magazine',
        'posts_per_page' => 5,
    );
    $arr_posts = new WP_Query( $args );
      
    if ( $arr_posts->have_posts() ) :
      
        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            
            <div class="col-md-4">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="bg-hover-mag"></div>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <header class="entry-header">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </header>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            </div>
            
            <?php
        endwhile;
    endif;
?>

        </div>
    </div>
</div>

<script>
    const getArticleDataFromAPI = () => {
        const elementArticle = document.getElementById('articleMyAlkes');

        fetch('https://app.myalkes.com/api/v1/articles', {
            method: "GET",
            header: {
                "Content-Type" : "application/json"
            }
        })
        .then((response) => response.json())
        .then((dataArticles) => {
            
            dataArticles.articles.data.map((article) => {
                elementArticle.innerHTML += `
                    <div class="col-md-4">
                        <article>
                            <div class="bg-hover-mag"></div>
                            <a target="_blank" href="https://myalkes.com/blog/${article.slug}">Read More</a>
                            <img src="https://assets.myalkes.com/${article.image}"/>
                            <header class="entry-header">
                                <h2 class="entry-title">${article.title}</h2>
                            </header>
                            <div class="entry-content">
                                ${article.summary}
                            </div>
                        </article>
                    </div>
                `
            })
        })
    }
    getArticleDataFromAPI();
</script>

<?php get_footer(); ?>