<?php get_header();?>

<h1><?php the_title();?></h1>

<?php
if (get_field('descripcion')){
    ?>
<div class="descripcion"><?php the_field( 'descripcion' ); ?></div>
    <?php
}

else {echo "<img src='/wp-content/imagenes/agencia-marketing-digital.jpg'>";
}
?>
<?php the_content();?>

<?php get_footer();?>