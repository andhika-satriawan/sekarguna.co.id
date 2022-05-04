<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', function () {
    wp_add_inline_script('jquery', 'var $ = jQuery.noConflict();');
});

function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/vendors/normalize.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/vendors/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style('youtubebackground', get_template_directory_uri() . '/assets/css/vendors/jquery.youtubebackground.css', array(), '1.1', 'all');
    wp_enqueue_style('materialize', get_template_directory_uri() . '/assets/css/vendors/materialize.css', array(), '1.1', 'all');
    wp_enqueue_style('hamburger-menu', get_template_directory_uri() . '/assets/css/vendors/hamburger-menu.css', array(), '1.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/vendors/animate.css', array(), '1.1', 'all');
    wp_enqueue_style('animate-extends', get_template_directory_uri() . '/assets/css/vendors/animate-extends.css', array(), '1.1', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/vendors/slick-carousel/slick.css', array(), '1.1', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/vendors/slick-carousel/slick-theme.css', array(), '1.1', 'all');
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.1', 'all');
    wp_enqueue_style('develop', get_template_directory_uri() . '/assets/css/develop.css?ver=', array(), rand(1, 999999999), 'all');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendors/jquery.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendors/bootstrap.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('enquire', get_template_directory_uri() . '/assets/js/vendors/enquire.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('enllax', get_template_directory_uri() . '/assets/js/vendors/jquery.enllax.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('form-validator', get_template_directory_uri() . '/assets/js/vendors/jquery.form-validator.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('touchSwipe', get_template_directory_uri() . '/assets/js/vendors/jquery.touchSwipe.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('youtubebackground', get_template_directory_uri() . '/assets/js/vendors/jquery.youtubebackground.js', array('jquery'), 1.1, true);
    wp_enqueue_script('pace', get_template_directory_uri() . '/assets/js/vendors/pace.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/vendors/slick.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/vendors/wow.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/vendors/parallax.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendors/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('materialize', get_template_directory_uri() . '/assets/js/vendors/materialize.js', array('jquery'), 1.1, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js?ver=', array('jquery'), rand(1, 999999999), true);
    wp_enqueue_script('develop', get_template_directory_uri() . '/assets/js/develop.js?ver=', array('jquery'), rand(1, 999999999), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts', 1);


function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?= get_stylesheet_directory_uri(); ?>/screenshot.png);
            height: 230px;
            width: 100%;
            background-size: 313px;
            background-repeat: no-repeat;
        }

        h2#text-login {
            text-align: center;
            font-size: 30px;
            color: #2e7d32;
            padding-bottom: 20px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

function custom_login_message()
{
    $message = "<h2 id='text-login'>PT. Sekarguna Medika</h2>";
    return $message;
}
add_filter('login_message', 'custom_login_message');

// changing the logo link from wordpress.org to your site
function mb_login_url()
{
    return home_url();
}
add_filter('login_headerurl', 'mb_login_url');

// changing the alt text on the logo to show your site name
function mb_login_title()
{
    return get_option('blogname');
}
add_filter('login_headertitle', 'mb_login_title');

function add_site_favicon()
{
    echo '<link rel="shortcut icon" 
href="' . get_stylesheet_directory_uri() . '/assets/favicons/favicon.ico" />';
}

add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');


function my_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');




/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'My_Widgtet_Area',
        'id' => 'partner-slide',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');



// Searching Form
function wpdocs_after_setup_theme()
{
    add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'wpdocs_after_setup_theme');
// End Searching Form
