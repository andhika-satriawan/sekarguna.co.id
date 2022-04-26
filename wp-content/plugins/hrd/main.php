<?php

/**
 * Plugin Name: HRD PT. Sekarguna Medika
 * Description: Plugin yang berkaitan dengan HRD
 * Plugin URI: https://sekarguna.co.id
 * Author: Andhika Satriawan
 * Version: 0.0.1
 */

// Don't access this file
defined('ABSPATH') or die();

// Register user role when activating the plugin
register_activation_hook(__FILE__, 'sekarguna_activation');

// Remove user role when deactivating the plugin
register_deactivation_hook(__FILE__, 'sekarguna_deactivation');

add_action('init', 'create_post_type_hrd');

function sekarguna_activation()
{
    // $caps = [
    //     'read'          => true,
    //     'edit_posts'    => true,
    //     'upload_files'  => true
    // ];

    add_role('hrd', 'HRD');

    $hrd = get_role('hrd');
    $hrd->add_cap('read');
}

function sekarguna_deactivation()
{
    remove_role('hrd');
}

function create_post_type_hrd()
{
    register_post_type(
        'pt_hrd',
        array(
            'labels' => array(
                'name'                  => esc_html('Jobs', 'sekarguna'),
                'singular_name'         => esc_html('Job', 'sekarguna'),
                'add_new'               => esc_html('Add New', 'sekarguna'),
                'add_new_item'          => esc_html('Add New Jobs', 'sekarguna'),
                'edit'                  => esc_html('Edit', 'sekarguna'),
                'edit_item'             => esc_html('Edit Job', 'sekarguna'),
                'new_item'              => esc_html('New Jobs', 'sekarguna'),
                'view'                  => esc_html('View Jobs', 'sekarguna'),
                'view_item'             => esc_html('View Jobs', 'sekarguna'),
                'search_items'          => esc_html('Search Jobs', 'sekarguna'),
                'not_found'             => esc_html('No Jobs Found', 'sekarguna'),
                'not_found_in_trash'    => esc_html('No Jobs Found in Trash', 'sekarguna')
            ),
            'public'            => true,
            'menu_position'     => 2,
            'capability_type'   => 'hrd',
            'map_meta_cap'      => true,
            'hierarchical'      => true,
            'has_archive'       => true,
            'supports'          => array(
                'title',
                'editor'
            )
        )
    );
}

// Add role capabilities
// add_action('admin_init', 'sekarguna_add_role_caps', 999);

// function sekarguna_add_role_caps()
// {
//     $roles = array('hrd');

//     foreach ($roles as $the_role) {
//         $role = get_role($the_role);

//         $role->add_cap('read');
//         // $role->add_cap('read_pt_hrd');
//         // $role->add_cap('read_private_pt_hrd');
//         // $role->add_cap('edit_pt_hrd');
//         // $role->add_cap('edit_other_pt_hrd');
//         // $role->add_cap('edit_published_pt_hrd');
//         // $role->add_cap('publish_pt_hrd');
//         // $role->add_cap('delete_others_pt_hrd');
//         // $role->add_cap('delete_private_pt_hrd');
//         // $role->add_cap('delete_publisher_pt_hrd');
//     }
// }
