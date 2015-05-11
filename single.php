<?php get_header(); ?>
<section class="individual-post header-spacer">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
       <?php while( have_posts() ) : the_post(); ?>
       <div class="headline">
        <h5>Posted on <?php the_date(); ?> by <?php the_author(); ?></h5>
         <h1><?php the_title(); ?></h1>
       </div>
       <div class="individual-post__content">
         <?php the_content(); ?>
         <div class="individual-post__categories">
            <?php if( !is_category('uncategorized') ) {?>
           <span>Posted in:</span> <?php the_category(', '); ?>
           <?php } ?>
         </div>
       </div>
        <?php endwhile; ?>
        <?php comments_template(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>