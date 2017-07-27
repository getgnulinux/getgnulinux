<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>">
<head>
  <meta charset="utf-8">
  <title><?php $this->page_title(); ?></title>
  <meta name="description" content="<?php $this->page_description(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  $base_url = $ggl->get('base_url');
  foreach ($ggl->get_locales('complete') as $code => $v) {
    printf("<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"%s%s\">\n",
      $ggl->langdir($code),
      $code,
      $base_url,
      $this->current_page_url($code));
  } ?>

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:700,400,300" media="all">
  <script src="https://use.fontawesome.com/8a60dcb41a.js"></script>

  <!-- build:css /styles/main.css -->
  <link rel="stylesheet" type="text/css" href="/styles/main.css" media="all">
  <!-- endbuild -->

  <?php if ( $ggl->get('dir') == 'rtl' ) { ?>
    <!-- build:css /styles/main-rtl.css -->
    <link rel="stylesheet" type="text/css" href="/styles/main-rtl.css" media="all">
    <!-- endbuild -->
  <?php } ?>

  <!-- build:css /styles/vendor/flexslider.css -->
  <link rel="stylesheet" type="text/css" href="/styles/vendor/flexslider.css" media="all">
  <!-- endbuild -->

  <?php if ( $ggl->no_italics() ) { ?>
    <!-- build:css /styles/no-italics.css -->
    <link rel="stylesheet" type="text/css" href="/styles/no-italics.css" media="all">
    <!-- endbuild -->
  <?php } ?>

  <!-- build:js /scripts/vendor/modernizr.js -->
  <script src="/bower_components/modernizr/modernizr.js"></script>
  <!-- endbuild -->
</head>

<body>

<div class="alertbox browsehappy hidden">
  <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <span class="close"><i class="fa fa-times-circle fa-lg" title="Close"></i></span>
</div>

<header class="navigation">
  <div class="navigation-wrapper">
    <a href="<?php $this->base_url(); ?>" class="mobile-logo">
      <i class="fa fa-home fa-lg" aria-hidden="true"></i>
    </a>
    <a href="#" id="js-navigation-mobile-menu" class="navigation-mobile-menu">
      <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
    </a>
    <nav>
      <ul id="js-navigation-menu" class="navigation-menu show">
        <li class="nav-link logo">
          <a href="<?php $this->base_url(); ?>" class="logo">
            <i class="fa fa-home fa-lg" aria-hidden="true"></i>
          </a>
        </li>
        <?php $this->nav_link('nav-item-linux', 'more', 'linux', _("What is GNU/Linux?")); ?>
          <?php $this->list_chapter_sections('linux'); ?>
        </li>
        <?php $this->nav_link('nav-item-windows', 'more', 'windows', _("Why not Windows")); ?>
          <?php $this->list_chapter_sections('windows'); ?>
        </li>
        <?php $this->nav_link('nav-item-switch', 'more', 'switch_to_linux', _("Switch to GNU/Linux")); ?>
          <?php $this->list_chapter_sections('switch_to_linux'); ?>
        </li>
        <?php $this->nav_link('nav-item-more', '', 'more', _("More")); ?></li>
      </ul>
    </nav>
  </div>
</header>
