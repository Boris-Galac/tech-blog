<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tech blog</title>
    <?php wp_head(); ?>
  </head>

  <body<?php body_class(); ?>>
    <!-- main -->
    <header class="header">
      <h1 class="logo">
        <a href="<?php echo site_url() ?>" class="logo"
        ><img src="<?php echo get_theme_file_uri('src/styles/images/logo.svg') ?>" alt="logo"
        /></a>
      </h1>
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__item">
            <a <?php if(is_front_page() ) echo 'class="current"'; ?> href="<?php echo site_url() ?>">Home</a>
          </li>
          <li class="header__item">
            <a <?php if(get_post_type() === 'post') echo 'class="current"'; ?> href="<?php echo site_url('blog') ?>">Blog</a>
          </li>
          <li class="header__item"><a href="#">Projects</a></li>
          <li class="header__item"><a <?php if(is_page('about')) echo 'class="current"'; ?> href="<?php echo site_url('about')?>">About</a></li>
        </ul>
      </nav>
      <div class="header__search">
        <i class="fa-sharp fa-solid fa-magnifying-glass search-icon"></i>
      </div>
      <div class="header__ham d-hidden">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </header>
