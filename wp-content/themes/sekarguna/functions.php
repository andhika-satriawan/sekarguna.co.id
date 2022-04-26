<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

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




// Custom Post Type HRD
add_action('init', function () {

    // define an array of labels
    $post_type_labels = array(
        'name'                  => __('Jobs'),
        'singular_name'         => __('Job'),
        'add_new_item'          => __('Add New Job'),
        'edit_item'             => __('Edit Job'),
        'new_item'              => __('New Job'),
        'view_item'             => __('View Job'),
        'view_items'             => __('View Jobs'),
        'not_found'             => __('No Jobs Found'),
        'not_found_in_trash'    => __('No Jobs Found in Trash'),
        'all_items'             => __('All Jobs'),
        'archives'              => __('Jobs Archives'),
        'insert_into_item'      => __('Insert into Job'),
        'uploaded_to_this_item' => __('Uploaded to this Job')
    );

    $post_type_labels2 = array(
        'name'                  => __('Applicants'),
        'singular_name'         => __('Applicant'),
        'add_new_item'          => __('Add New Applicant'),
        'edit_item'             => __('Edit Applicant'),
        'new_item'              => __('New Applicant'),
        'view_item'             => __('View Applicant'),
        'view_items'             => __('View Applicants'),
        'not_found'             => __('No Applicants Found'),
        'not_found_in_trash'    => __('No Applicants Found in Trash'),
        'all_items'             => __('All Applicants'),
        'archives'              => __('Applicants Archives'),
        'insert_into_item'      => __('Insert into Applicant'),
        'uploaded_to_this_item' => __('Uploaded to this Applicant')
    );

    // define an array of arguments
    $post_type_args = array(
        'labels'                => $post_type_labels,
        'public'                => true,
        'menu_position'         => 2,
        'menu_icon'             => 'dashicons-dashboard',
        'show_in_menu'          => 'jobs-menu',
        'hierarchical'          => 'true',
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'trackbacks'),
        'capability_type'       => 'job',
        'has_archive'           => true,
        'capabilities' => array(
            'edit_post'             => 'edit_job',
            'edit_posts'            => 'edit_jobs',
            'edit_others_posts'     => 'edit_other_jobs',
            'publish_posts'         => 'publish_jobs',
            'edit_published_posts'  => 'edit_published_jobs',
            'read_post'             => 'read_job',
            'read_private_posts'    => 'read_private_jobs',
            'delete_post'           => 'delete_job',
            'create_posts'          => 'create_jobs'
        ),
        'map_meta_cap' => true
    );

    $post_type_args2 = array(
        'labels'                => $post_type_labels2,
        'public'                => true,
        'menu_position'         => 2,
        'menu_icon'             => 'dashicons-dashboard',
        'show_in_menu'          => 'jobs-menu',
        'hierarchical'          => 'true',
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'trackbacks'),
        'capability_type'       => 'job',
        'has_archive'           => true,
        'capabilities' => array(
            'edit_post'             => 'edit_job',
            'edit_posts'            => 'edit_jobs',
            'edit_others_posts'     => 'edit_other_jobs',
            'publish_posts'         => 'publish_jobs',
            'edit_published_posts'  => 'edit_published_jobs',
            'read_post'             => 'read_job',
            'read_private_posts'    => 'read_private_jobs',
            'delete_post'           => 'delete_job',
            'create_posts'          => 'create_jobs'
        ),
        'map_meta_cap' => true
    );

    register_post_type('job', $post_type_args);
    register_post_type('applicants', $post_type_args2);
});

add_action('init', function () {
    add_role('hrd', 'HRD');

    $hrd = get_role('hrd');
    $hrd->add_cap('read');
    $hrd->add_cap('edit_job');
    $hrd->add_cap('edit_jobs');
    $hrd->add_cap('edit_others_job');
    $hrd->add_cap('edit_others_jobs');
    $hrd->add_cap('publish_jobs');
    $hrd->add_cap('edit_published_jobs');
    $hrd->add_cap('delete_job');
    $hrd->add_cap('create_jobs');
});



function wpse_226690_admin_menu()
{
    add_menu_page(
        'Applicants',
        'Jobs',
        'read',
        'jobs-menu',
        '',
        'dashicons-clipboard',
        2
    );
}

add_action('admin_menu', 'wpse_226690_admin_menu');





// Apply Jobs
if (isset($_POST['title'])) {
    $wp_filetype = wp_check_filetype(basename($filename), null);
    $my_post = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_type'     => 'applicants',
        'post_title'    => $_POST['title'],
        'post_content'  => $_POST['description'],
        'post_status'   => 'publish'
    );

    wp_insert_post($my_post);

    die;
}
