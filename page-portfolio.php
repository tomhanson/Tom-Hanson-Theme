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
   $args = array( 'posts_per_page' => '3', 'post_type' => My_Work );
  $myWork = new WP_Query($args);
  if( $myWork->have_posts() ) : while( $myWork->have_posts() ) : $myWork->the_post(); { ?>

      <article class="my-work__item">
           <i class="fa fa-code"></i>
           <?php the_title(); ?>
           <?php the_excerpt(); ?>
           <?php the_field('work_piece'); ?>
           <?php the_field('work_image'); ?>
           <div class="my-work__overlay <?php the_field('work_type'); ?>">
           </div>
        <img src="http://placehold.it/500x500">
      </article>
  <?php } endwhile; endif; ?>


</section>
<? get_footer(); ?>