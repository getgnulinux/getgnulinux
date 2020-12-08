<!DOCTYPE html>
<html lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title><?php print $this->page_title(); ?></title>
  <meta name="description" content="<?php print $this->page_description(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->og_tags(); ?>
  <?php $this->link_alternate_tags(); ?>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:700,400,300" media="all">
  <script src="https://use.fontawesome.com/8a60dcb41a.js"></script>

  <!-- build:css /styles/vendor/flexslider.css -->
  <link rel="stylesheet" type="text/css" href="/styles/vendor/flexslider.css" media="all">
  <!-- endbuild -->

  <!-- build:css /styles/main.css -->
  <link rel="stylesheet" type="text/css" href="/styles/main.css" media="all">
  <!-- endbuild -->

  <?php if ( $ggl->get('dir') == 'rtl' ) { ?>
    <!-- build:css /styles/main-rtl.css -->
    <link rel="stylesheet" type="text/css" href="/styles/main-rtl.css" media="all">
    <!-- endbuild -->
  <?php } ?>

  <?php if ( $ggl->no_italics() ) { ?>
    <!-- build:css /styles/no-italics.css -->
    <link rel="stylesheet" type="text/css" href="/styles/no-italics.css" media="all">
    <!-- endbuild -->
  <?php } ?>

  <!-- build:js /scripts/modernizr.js -->
  <script src="/scripts/modernizr.js"></script>
  <!-- endbuild -->
</head>

<body>

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
