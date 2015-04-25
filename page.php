<?php get_header(); ?>
<section id="home-tagline">
 <div class="container">
   <div class="row">
     <div class="col-xs-12">
        <div class="headline">
         <h1>Portfolio</h1>
         <p>I am a front end developer etc...</p>
        </div>
     </div>
   </div>
 </div>

</section>
<section id="my-work">
 <?php

   $args = array(
      'posts_type' => My_Work
  );
  $myWork = new WP_Query($args);
    $i = 0;
  if( $myWork->have_posts() ) : while( $myWork->have_posts() ) : $myWork->the_post(); {
    echo "item $i";
    $i++;
  } endwhile; endif;
  ?>
  <div class="my-work__item">
    <img src="http://placehold.it/500x500">
  </div>
  <div class="my-work__item">
    <img src="http://placehold.it/500x500">
  </div>
  <div class="my-work__item">
    <img src="http://placehold.it/500x500">
  </div>
</section>
<? get_footer(); ?>