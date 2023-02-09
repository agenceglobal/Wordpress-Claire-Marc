<?php
$plantillas = __DIR__ . '/plantillas/';

function tresposts(){
    $plantillas = __DIR__ . '/plantillas/';
    include $plantillas . 'trespost.php';
}
add_shortcode('lastest_posts', 'tresposts') // El shortcode se llama así: [lastest_posts]

?>