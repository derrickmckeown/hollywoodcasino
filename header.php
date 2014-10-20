<?php
/**
 * The template for displaying the header.
 *
 * Contains the opening tag for the page structure
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>
<?php wp_title(''); ?>
</title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"><![endif]-->
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if lt IE 9]>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
<script>
      $(function(){
        $(".digits").countdown({
          image: "/wp-content/themes/hollywood/images/digits.png",
          format: "dd",
          endTime: new Date(2015, 12, 2)
        });
      });
    </script>
</head>

<body <?php body_class(); ?>>
<div id="container">
<header id="masthead" class="header col-lg-2 col-md-2" role="banner">
  <div id="logo"> <a href="<?php  echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo" /></a> </div>
  <nav id="main-navigation" class="clearfix" role="navigation">
    <?php scaffolding_main_nav(); ?>
  </nav>
  <div id="phone">
    <p>(310) 330-2800</p>
  </div>
  <div class="social">
    <ul>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" /></li>
      <li>Follow Us</li>
    </ul>
  </div>
</header>

<div id="content">