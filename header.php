<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ); ?> | <?php wp_title("",true); ?> </title>
    <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
    <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<script type="text/javascript">
  jQuery(document).ready(function($){
    var nav = $('#primary-nav');
    var navParent = $('#js-nav-perspective');
    nav.on("click", function() {
      if( navParent.hasClass('active') ) {
        $(navParent).stop().removeClass('active');
      } else {
        $(navParent).stop().addClass('active');
      }
    });
  });
</script>
<body>
  <div id="js-nav-perspective" class="perspective">
    <nav id="primary-nav" role="navigation">
     you can click me
      <?php get_sidebar(); ?>
    </nav>
    <div class="wrapper">
      <header>
        <div class="container">
          <div class="row">

          </div>
        </div>
      </header>