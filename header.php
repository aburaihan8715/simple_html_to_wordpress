<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- owl carousel css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css" />
  <!-- owl theme css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css" />
  <!-- font awesome css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome.min.css" />
  <!-- main css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" />
  <?php wp_head();?>
</head>

<body class="<?php body_class();?>">
  <div class="area">
    <!-- header -->
    <header class="header_area">
      <nav class="menu_bar clear_fix">
        <div class="logo">
          <a href="<?php echo site_url();?>">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="logo" />
          </a>
        </div>
        <div class="menu">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'main_menu',
              'container' => 'nav',
              'container_class' => 'main_menu',
              'menu_class' => 'menu_list',
              'menu_id' => 'menu_list',
            ));
          ?>
        </div>
      </nav>
    </header>