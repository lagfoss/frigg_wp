<!DOCTYPE html>
<html lang="da" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="keywords" content="Frigg, nordisk, vikingeskib, færøbåd, Odense, Fyn, vikinger,
    historie, traditioner, håndværk, naust, nordlandsbåd, kystkultur, havet, middelalderen">
    <meta name="author" content="Lagfoss - Den Færøske Multimediedesigner">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_directory'); ?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#990000">
<?php wp_head();?>
  </head>
  <body style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/images/runesten.png');">
    <header>
        <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo-mini.svg" alt="logo" title="Frigglauget logo"></a>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/header.png" class="header" alt="Frigglauget header">
    </header>
    <nav id="myNav">
      <?php quadmenu(array("theme_location" => "menu", "theme" => "default_theme")); ?>
    </nav>
    <main>
      <section class="welcome">
        <h1>FRIGGLAUGET -
          <span
          class="txt-rotate"
          data-period="2000"
          data-rotate='[ "Frigg af Odense", "Vikingeskibslaug", "Nordisk kystkultur" ]'></span>
        </h1>
      </section>
