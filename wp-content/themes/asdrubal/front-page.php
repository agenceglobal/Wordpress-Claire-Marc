<?php
get_header();
//include_once 'header.php';?>

<div class="generico">

    <h1><?php the_title();?></h1>

    <section id="contenido">
    <?php the_content();?>
    </section>
    <?php  
   include $plantillas.'trespost.php';
    ?>

</div>

<?php get_footer();?>