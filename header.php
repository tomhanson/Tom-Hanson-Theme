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
    <link href='http://fonts.googleapis.com/css?family=Abel|Raleway' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<script type="text/javascript">

  jQuery(document).ready(function($){
    var headerHeight = $('header').outerHeight();
    var windowHeight = $(window).outerHeight();
    var elementHeight = windowHeight;


    function homepageSize() {
      $('#home-tagline').css('height', (elementHeight) + 'px');
      $('#home-tagline').css('padding-top', (headerHeight) + 'px');
    }
    homepageSize();
    var nav = $('.js-nav-click');
    var navParent = $('html');
    nav.on("click", function() {
      if( navParent.hasClass('active') ) {
        navParent.stop().removeClass('active');
      } else {
        navParent.stop().addClass('active');
      }
    });

    //Add a class after scroll passes 100%
    $(window).on('scroll', function() {
      
        var scroll = $(window).scrollTop();
      console.log(scroll);
      if (scroll > windowHeight ) {
        navParent.addClass('scrolled');

      } else if( scroll <= windowHeight ) {
        navParent.removeClass('scrolled');

      }
    });
  });
</script>
<body style="background-image: url('<?php print TEMPPATH; ?>/css/smitherines2.jpg');">
  <div id="js-nav-perspective" class="perspective">
    <nav id="primary-nav" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-right back">
            <div class="primary-nav__toggle">
              <button class="js-nav-click primary-nav__mobile-button">
                <span class="mobile-button--sr-only">Toggle navigation</span>
                <span class="mobile-button--social-line">&nbsp;</span>
                <span class="mobile-button--social-line">&nbsp;</span>
                <span class="mobile-button--social-line">&nbsp;</span>
              </button>
            </div>
            <div class="social-icons">
              <i class="fa fa-codepen"></i>
              <i class="fa fa-linkedin"></i>
              <i class="fa fa-github"></i>
              <i class="fa fa-twitter"></i>
            </div>
          </div>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </nav>
    <div class="wrapper" style="background-image: url('<?php print TEMPPATH; ?>/css/smitherines.jpg');">
      <div class="nav-overflow">
        <header>
          <div class="container">
            <div class="row">
              <div class="col-xs-6 text-left">
               <a href="/" title="home">
                  <div id="logo">
                    <span class="glyphicon glyphicon-flash"></span>
                  </div>
                </a>
              </div>
              <div class="col-xs-6 text-right front">
                <div class="primary-nav__toggle">
                  <button class="js-nav-click primary-nav__mobile-button">
                    <span class="mobile-button--sr-only">Toggle navigation</span>
                    <span class="mobile-button--social-line">&nbsp;</span>
                    <span class="mobile-button--social-line">&nbsp;</span>
                    <span class="mobile-button--social-line">&nbsp;</span>
                  </button>
                </div>
                <div class="social-icons">
                  <i class="fa fa-codepen"></i>
                  <i class="fa fa-linkedin"></i>
                  <i class="fa fa-github"></i>
                  <i class="fa fa-twitter"></i>
                </div>
              </div>
            </div>
          </div>
        </header>