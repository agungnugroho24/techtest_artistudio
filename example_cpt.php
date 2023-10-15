<?php
/*
Plugin Name: Tes1
Description: A WordPress Pop Up Plugin utilizing the Dot Framework.
Version: 1.0
Author: Agung N.
*/

// Load the Dot Framework
// require_once 'dot-framework/dot-framework.php';

// Register the Popup CPT
function wp_popup_plugin_register_popup_cpt() {
    $args = array(
        'labels' => array(
            'name' => __('Example CPT', 'popup-plugin'),
            'singular_name' => __('Example CPT', 'popup-plugin'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => array('title', 'editor'),
    );
    register_post_type('popup', $args);
}
add_action('init', 'wp_popup_plugin_register_popup_cpt');

// Add custom fields to the Popup CPT
function wp_popup_plugin_add_custom_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'popup_fields',
            'title' => 'Popup Fields',
            'fields' => array(
                array(
                    'key' => 'popup_title',
                    'label' => 'Popup Title',
                    'name' => 'popup_title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'popup_description',
                    'label' => 'Popup Description',
                    'name' => 'popup_description',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'popup_page',
                    'label' => 'Popup Page',
                    'name' => 'popup_page',
                    'type' => 'post_object',
                    'post_type' => array('page'),
                    'allow_null' => true,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'popup',
                    ),
                ),
            ),
        ));
    }
}
add_action('acf/init', 'wp_popup_plugin_add_custom_fields');

function wp_popup_plugin_display_popup() {
    $args = array(
        'post_type' => 'popup',
        'posts_per_page' => 1,
    );

    $popups = new WP_Query($args);

    if ($popups->have_posts()) {
        while ($popups->have_posts()) {
            $popups->the_post();
            $popup_title = get_field('popup_title');
            $popup_description = get_field('popup_description');
            $popup_page_id = get_field('popup_page');

            if ($popup_page_id) {
                $popup_page_url = get_permalink($popup_page_id);
                echo "<a href='$popup_page_url' class='popup-link'>$popup_title</a>";
            }

            echo "<div class='popup-content'>";
            echo "<h2>$popup_title</h2>";
            echo "<p>$popup_description</p>";
            echo "</div>";
        }
    }

    wp_reset_postdata();
}

add_action('wp_footer', 'wp_popup_plugin_display_popup');