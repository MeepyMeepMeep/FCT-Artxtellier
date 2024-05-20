<?php
//  Funciones que habilitarán ciertas funcionalidades en el tema de Wordpress


// Creamos una función para cargar los estilos y la ejecutamos
function cargar_css(){

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap-css/bootstrap.min.css');    
    wp_enqueue_style('bootstrap-css');

    //Cargamos estilos personalizados
    wp_register_style('custom-css', get_template_directory_uri() . '/css/custom.css');    
    wp_enqueue_style('custom-css');

}
add_action('wp_enqueue_scripts', 'cargar_css');

// Creamos una función para cargar los scripts y la ejecutamos
function cargar_scripts(){

    wp_enqueue_script('jquery');

    // Nombre, directorio, dependencia, version, in-footer(scripts mostrados en el footer)
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap-js/bootstrap.min.js', 'jquery', false, true);    
    wp_enqueue_script('bootstrap-js');

}
add_action('wp_enqueue_scripts', 'cargar_scripts');

?>