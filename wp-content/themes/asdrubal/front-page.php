<?php get_header();?>

<h1><?php the_title();?></h1>

<?php the_content();?>

<?php
    include $plantillas . 'trespost.php';
// Otra forma de hacer el include
// include 'plantillas/trespost.php';
?>

<?php get_footer();?>