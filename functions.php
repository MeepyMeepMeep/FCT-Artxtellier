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

    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js');    
    wp_enqueue_script('custom-js');

}
add_action('wp_enqueue_scripts', 'cargar_scripts');



//Tema
add_theme_support('menus', 'custom logo');
add_theme_support( 'post-thumbnails' );



//Menus
register_nav_menus( 
    //Establecemos los menús del tema
    array(
        'menu-header' => 'Header menu',
        'menu-footer-1' => 'Footer menu 1',
        'menu-footer-2' => 'Footer menu 2',
    )
);


//Logo
function logo_sitio() {
	$defaults = array(
		'height'               => 50,
		'width'                => 251,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'logo_sitio' );

/*Anadir clase a body en ciertas paginas cortas de contenido para 
situar el footer en la parte de abajo de la pantalla*/
function clase_body( $clase ){
  if (is_404() || is_page_template( 'template-information.php' )){
    $clase[] = 'at--information__body';
  }
  return $clase;
}
add_filter( 'body_class', 'clase_body' );

/*
-----------------
Código de terceros
-----------------
*/

/*
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
          }
        );
      }
    }
  }
fa_custom_setup_kit('https://kit.fontawesome.com/9416b52d54.js'); 

?>
