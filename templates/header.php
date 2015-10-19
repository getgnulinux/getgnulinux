<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>">
<head>
  <meta charset="utf-8">
  <title><?php $this->page_title(); ?></title>
  <meta name="description" content="<?php $this->page_description(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="copyright" type="text/html" title="Copyright notice for this website." href="<?php $this->url('legal/'); ?>" hreflang="en">
  <?php
  $base_url = $ggl->get('base_url');
  foreach ($ggl->get_locales('complete') as $code => $v) {
    printf("<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"%s%s\">\n",
      $ggl->langdir($code),
      $code,
      $base_url,
      $this->current_page_url($code));
  } ?>

  <link rel="stylesheet" type="text/css" href="<?php $this->filever('/style/normalize.css'); ?>" media="all">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:700,400,300" media="all">
  <link rel="stylesheet" type="text/css" href="<?php $this->filever('/style/main-ltr.css'); ?>" media="all">
  <?php if ( $ggl->get('dir') == 'rtl' ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php $this->filever('/style/main-rtl.css'); ?>" media="all">
  <?php } ?>
  <link rel="stylesheet" type="text/css" href="<?php $this->filever('/style/font-awesome/css/font-awesome.min.css'); ?>" media="all">
  <link rel="stylesheet" type="text/css" href="<?php $this->filever('/style/flexslider.css'); ?>" media="all">
  <?php if ( $ggl->no_italics() ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php $this->filever('/style/no-italics.css'); ?>" media="all">
  <?php } ?>
  <script src="<?php $this->filever('/js/vendor/modernizr.min.js'); ?>"></script>
</head>

<body>

<div class="alertbox browsehappy hidden">
  <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <span class="close"><i class="fa fa-times-circle fa-lg" title="Close"></i></span>
</div>

<header id="header">
  <nav id="navbar" role="navigation">
    <ul>
      <li id="home"><a href="<?php $this->base_url(); ?>"><i class="fa fa-home fa-lg"></i></a></li>
      <?php
      $menu_items = array(
        'linux' => _("What is Linux?"),
        'windows' => _("Why not Windows"),
        'switch_to_linux' => _("Switch to Linux"),
        'more' => _("More"),
      );

      foreach ($menu_items as $id => $title) {
        printf("<li%s><a href=\"%s\">%s</a></li>\n",
          $this->we_are_here($id, true) ? " class='active'" : "",
          $this->base_url($id,1),
          $title);
      }
      ?>
    </ul>
  </nav>
</header>
