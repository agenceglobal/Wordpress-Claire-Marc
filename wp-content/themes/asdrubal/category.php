<?php
get_header();
?>

<div class="generico">

    <h1>
        <?php single_cat_title();
        ?>
    </h1>

<section id="contenido">
    <?php
    echo category_description();
    ?>
</section>

<section id="articulos">
    <?php
    $args = array(
        'cat' => get_query_var('cat'),
        'posts_per_page' => -1, /* Poner -1 para infinito */
        'post_type' => 'post',
        'orderby' => 'date', /* Poner rand para que los coja de forma aleatoria */
        'order' => 'DESC', /* Poner ASC para que el orden sea ascendiente */
    );
    $the_query = new WP_Query($args);
    // Un loop
    while ($the_query -> have_posts()){
        $the_query -> the_post();
        // include
        include $plantillas . '/display-posts/card-posts.php';
    }
    wp_reset_postdata();
    ?>
</section>

</div>

<?php
get_footer();
?>