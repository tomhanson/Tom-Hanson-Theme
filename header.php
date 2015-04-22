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
    function homepageSize() {
    var headerHeight = $('header').outerHeight();
    var windowHeight = $(window).outerHeight();
    var elementHeight = windowHeight;
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
  });

</script>
<body>
  <div id="js-nav-perspective" class="perspective">
    <nav id="primary-nav" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-right">
            <div class="primary-nav__toggle">
              <button class="js-nav-click primary-nav__mobile-button">
                <span class="mobile-button--sr-only">Toggle navigation</span>
                <span class="mobile-button--social-line">&nbsp;</span>
                <span class="mobile-button--social-line">&nbsp;</span>
                <span class="mobile-button--social-line">&nbsp;</span>
              </button>
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
                <div id="logo">
                  <span class="glyphicon glyphicon-flash"></span>
                </div>
              </div>
              <div class="col-xs-6 text-right">
                <div class="primary-nav__toggle">
                  <button class="js-nav-click primary-nav__mobile-button">
                    <span class="mobile-button--sr-only">Toggle navigation</span>
                    <span class="mobile-button--social-line">&nbsp;</span>
                    <span class="mobile-button--social-line">&nbsp;</span>
                    <span class="mobile-button--social-line">&nbsp;</span>
                  </button>
                </div>
              </div>
              <div class="col-xs-12 text-right">
              social media
              </div>
            </div>
          </div>
        </header>