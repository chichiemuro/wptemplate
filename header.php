<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Sophie   Murowe"/>
  <title>
    <?php if (is_front_page()) {
      echo get_bloginfo('title') . ' - ' . get_bloginfo('description');
    } else {
      wp_title(get_bloginfo('title') . ' | ', true, 'left');
    } ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
  <link rel="shortcut icon" href="<?php echo images. 'favicon.ico'; ?>" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- the nav -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= site_url('/'); ?>"><?= get_bloginfo('title'); ?></a>
      </div>
      <?php
      wp_nav_menu(array(
        'menu' => 'top',
        'theme_location' => 'top',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'      => 'navbar',
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker())
      );
      ?>
    </div>
  </nav>
