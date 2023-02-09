<?php
$plantillas=__DIR__.'/plantillas/';

function trespost(){
    $plantillas=__DIR__.'/plantillas/';
    include $plantillas . 'trespost.php';
}
add_shortcode('lastest_posts','trespost');
?>

}