<?php
$plantillas = __DIR__ . '/plantillas/';

function tresposts(){
    $plantillas = __DIR__ . '/plantillas/';
    include $plantillas . 'trespost.php';
}
add_shortcode('lastest_posts', 'tresposts') // El shortcode se llama así: [lastest_posts]

?>

<?php

 //borrar canonical por defecto
remove_action('wp_head', 'rel_canonical');

/** Remove Canonical URL **/
remove_action('embed_head', 'rel_canonical');
add_filter('wpseo_canonical', '__return_false');

//Eliminar meta robots

remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );

//ELIMINAR EL SITEMAP POR DEFECTO DE WORDPRESS
add_filter( 'wp_sitemaps_enabled', '__return_false' );

?>
