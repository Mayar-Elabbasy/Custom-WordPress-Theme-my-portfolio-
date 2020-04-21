<?php

function addAssets(){
wp_enqueue_style('bootstrap', get_template_directory_uri( ). '/assets/css/bootstrap.min.css');  
wp_enqueue_script('bootstrap' ,get_template_directory_uri( ). '/assets/js/bootstrap.min.css',['jquery']);
}
add_action( "wp_enqueue_scripts", "addAssets");

add_theme_support('post-thumbnails' );
add_theme_support("menus");

register_nav_menus( array(
    "main-menu" => "Main Menu",
) );

function addSkillsPostType(){
    register_post_type("skills",array(
        "label" => "Skills",
        "public" => true,
        "menu_position" => 4,
        "supports"=>["title"],
        "show_in_rest" => true,
        "has_archive" => true
    ));
}

add_action("init","addSkillsPostType");
?>
