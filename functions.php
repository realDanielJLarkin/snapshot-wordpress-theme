<?php

function snapshot_theme_support () {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "snapshot_theme_support");

function register_used_inventory() {
    $args = array(
        "public" => true,
        "label" => "Used Inventory",
        "supports" => array("title", "editor", "thumbnail")
    );
    register_post_type("used_inventory", $args);
}

add_action("init", "register_used_inventory");

function snapshot_register_styles() {
    $version = wp_get_theme("Version");
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/assets/css/output.css', array(), $version);
}

add_action( 'wp_enqueue_scripts', 'snapshot_register_styles' );

function snapshot_register_scripts() {
    wp_enqueue_script('snapshot-js', get_template_directory_uri() . '/assets/javascript/main.js', array(), false, true);
}

add_action("wp_enqueue_scripts", "snapshot_register_scripts")

?>