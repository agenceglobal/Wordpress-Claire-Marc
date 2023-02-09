<section id="trespostdisplay" class="box cards">
<?php
$args = array(
    'posts_per_page' => 3, /* Poner -1 para infinito */
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