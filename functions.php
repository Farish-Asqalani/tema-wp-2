<?php 

// menambah navbar 
register_nav_menus(["header" => "navbar"]);

// register_sidebar_widget()

function widget_setup (){
    register_sidebar(
        ["name" => "sidebar1"],
        ["name2" => "sidebar2"],
    );
}

add_action("widgets_init", "widget_setup");


?>