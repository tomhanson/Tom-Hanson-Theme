<?php get_header(); ?>
<section id="home-tagline">
 <div class="container">
   <div class="row">
     <div class="col-xs-12">
        <div class="headline">
         <h1><?php bloginfo( 'name' ); ?></h1>
         <p>I am a front end developer etc...blog</p>
        </div>
     </div>
   </div>
 </div>

</section>
<section id="blog">
<?php query_posts('order=ASC');
  $c = 1; ?>
 <?php if( have_posts() ) {
  while( have_posts() ) {
    the_post(); ?>
  <?php if ( has_post_thumbnail( $post->ID ) ) {?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blogBg' ); ?>
  <article class="blog-post <?php if( $c%2 == 0 ) echo 'blog-post--left'; ?>" style="background-image: url('<?php echo $image[0]; ?>')">
  <?php } else { ?>
  <article class="blog-post no-featured <?php if( $c%2 == 0 ) echo 'blog-post--right'; ?>">
   <?php }?>
     <div class="container">
       <div class="row">
        <div class="col-sm-8 col-lg-7 <?php if( $c%2 == 0 ) echo 'col-sm-push-4 col-lg-push-5'; ?>">
          <div class="blog-post__wrapper">
           <p>By <?php the_author(); ?> on <?php the_date(); ?></p>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a class="btn" href="<?php the_permalink(); ?>" title="the_title(); ?>">Read More</a>
          </div>
        </div>
       </div>
     </div>
  </article>
<?php $c++;
  }
 }
  wp_reset_query();  ?>
</section>
<? get_footer(); ?>