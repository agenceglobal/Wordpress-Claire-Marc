<section id="trespostdisplay" class="box cards">
 <?php
 $args=array(
     'posts_per_page'=> 3,
     'post_type'=> 'post',
     'orderby'=> 'date',
     'order'=> 'DESC',
 );
 $the_query = new WP_Query( $args);
 //Un loop
 while ( $the_query->have_posts()){
     $the_query->the_post();

     include $plantillas .'/display-posts/card-posts.php';
 }
wp_rest_postdata();

?>

</section>