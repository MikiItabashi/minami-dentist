<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="l-header">
      <div class="header__wrapper">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="みなみ歯科クリニック">
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo--drawer">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-drawer.svg" alt="みなみ歯科クリニック">
        </a>
        <!-- /.header__logo -->
        <div class="header__body u-desktop">
          <nav class="header__nav header-nav">
            <div class="header-nav__items">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header-nav__item <?php if (is_front_page() && is_home()) echo 'is-active'; ?>">
                <div class="header-nav__icon"><?php get_template_part('svg/icon-01'); ?></div>
                <p class="header-nav__text">ホーム</p>
              </a>
              <!-- /.header-nav__item -->
              <a href="<?php echo esc_url(home_url('about')); ?>" class="header-nav__item <?php if (is_page('about')) echo 'is-active'; ?>">
                <div class="header-nav__icon"><?php get_template_part('svg/icon-02'); ?></div>
                <p class="header-nav__text">当院について</p>
              </a>
              <!-- /.header-nav__item -->
              <a href="<?php echo esc_url(home_url('medical')); ?>" class="header-nav__item <?php if (is_page('medical')) echo 'is-active'; ?>">
                <div class="header-nav__icon"><?php get_template_part('svg/icon-03'); ?></div>
                <p class="header-nav__text">診療案内</p>
              </a>
              <!-- /.header-nav__item -->
              <a href="<?php echo esc_url(home_url('staff')); ?>" class="header-nav__item <?php if (is_page('staff')) echo 'is-active'; ?>">
                <div class="header-nav__icon"><?php get_template_part('svg/icon-04'); ?></div>
                <p class="header-nav__text">スタッフ紹介</p>
              </a>
              <!-- /.header-nav__item -->
              <a href="<?php echo esc_url(home_url('blogs')); ?>" class="header-nav__item <?php if (is_page('blogs') || get_post_type() == 'blog') echo 'is-active'; ?>">
                <div class="header-nav__icon"><?php get_template_part('svg/icon-05'); ?></div>
                <p class="header-nav__text">スタッフブログ</p>
              </a>
              <!-- /.header-nav__item -->
              <a href="<?php echo esc_url(home_url('contact')); ?>" class="header-nav__item <?php if (is_page('contact')) echo 'is-active'; ?>">
                <div class="header-nav__icon"><?php get_template_part('svg/icon-06'); ?></div>
                <p class="header-nav__text">お問い合わせ</p>
              </a>
              <!-- /.header-nav__item -->
            </div>
            <!-- /.header-nav__items -->
          </nav>
          <!-- /.header__nav header-nav -->
          <div class="header__phone">
            <p class="header__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
            <p class="header__num phone-num">03-1234-5678</p>
          </div>
          <!-- /.header__phone -->
        </div>
        <!-- /.header__body u-desktop -->
      </div>
      <!-- /.header__wrapper -->
    </div>
    <!-- /.l-header -->
  </header>

  <div class="drawer-icon u-mobile js-drawer">
    <div class="drawer-icon__bars">
      <div class="drawer-icon__bar1"></div>
      <div class="drawer-icon__bar2"></div>
      <div class="drawer-icon__bar3"></div>
    </div>
    <!-- ./drawer-icon__bars -->
  </div>
  <!-- /drawer-icon u-mobile -->
  <!-- drawer -->
  <div class="drawer-content">
    <nav class="l-drawer-content">
      <ul class="drawer-content__items">
        <li class="drawer-content__item js-drawer-content__item">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="drawer-content__link">
            <div class="drawer-nav__icon"><?php get_template_part('svg/icon-01'); ?></div>
            <p class="drawer-nav__text">ホーム</p>
          </a>
        </li>
        <li class="drawer-content__item js-drawer-content__item">
          <a href="<?php echo esc_url(home_url('about')); ?>" class="drawer-content__link">
            <div class="drawer-nav__icon"><?php get_template_part('svg/icon-02'); ?></div>
            <p class="drawer-nav__text">当院について</p>
          </a>
        </li>
        <li class="drawer-content__item js-drawer-content__item">
          <a href="<?php echo esc_url(home_url('medical')); ?>" class="drawer-content__link">
            <div class="drawer-nav__icon"><?php get_template_part('svg/icon-03'); ?></div>
            <p class="drawer-nav__text">診療案内</p>
          </a>
        </li>
        <li class="drawer-content__item js-drawer-content__item">
          <a href="<?php echo esc_url(home_url('staff')); ?>" class="drawer-content__link">
            <div class="drawer-nav__icon"><?php get_template_part('svg/icon-04'); ?></div>
            <p class="drawer-nav__text">スタッフ紹介</p>
          </a>
        </li>
        <li class="drawer-content__item js-drawer-content__item">
          <a href="<?php echo esc_url(home_url('blogs')); ?>" class="drawer-content__link">
            <div class="drawer-nav__icon"><?php get_template_part('svg/icon-05'); ?></div>
            <p class="drawer-nav__text">スタッフブログ</p>
          </a>
        </li>
        <li class="drawer-content__item js-drawer-content__item">
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="drawer-content__link">
            <div class="drawer-nav__icon"><?php get_template_part('svg/icon-06'); ?></div>
            <p class="drawer-nav__text">お問い合わせ</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- ./drawer-content -->

  <?php get_template_part('templates/reserve-btn') ?>