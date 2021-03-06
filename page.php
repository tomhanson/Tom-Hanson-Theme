<?php get_header(); ?>
<?php if( is_page('portfolio') ) { ?>
  <section class="header-spacer" id="home-tagline">
 <div class="container">
   <div class="row">
     <div class="col-xs-12">
        <div class="headline">
         <h1><?php the_title(); ?></h1>
         <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
         <p><?php the_content(); ?></p>
         <?php endwhile; endif;
          wp_reset_query();
          ?>
        </div>
     </div>
   </div>
 </div>

</section>
<section class="header-spacer" id="my-work">
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

<?php } else { ?>
  add a template
<?php } ?>
<? get_footer(); ?>