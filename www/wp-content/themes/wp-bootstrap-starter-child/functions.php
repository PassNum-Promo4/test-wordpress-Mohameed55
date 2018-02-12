<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-wp-bootstrap-starter-style', get_template_directory_uri() . '/style.css' );
}


function create_post_type() {
 register_post_type( 'projet',
   array(
     'labels' => array(
       'name' => __( 'projet' ),
       'singular_name' => __( 'projet' )
     ),
     'public' => true,
     'has_archive' => true,
   )
 );
}
add_action( 'init', 'create_post_type' );

function create_post_type1() {
 register_post_type( 'acceuil',
   array(
     'labels' => array(
       'name' => __( 'Acceuil' ),
       'singular_name' => __( 'Acceuil' )
     ),
     'public' => true,
     'has_archive' => true,
   )
 );
}
add_action( 'init', 'create_post_type1' );