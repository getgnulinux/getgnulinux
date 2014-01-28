<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en-US" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <!-- alternate languages -->
  <?php
  $base_url = $ggl->get('base_url');
  foreach ($ggl->get_locales() as $code => $items) {
    list($locale, $native) = $items;
    if ( $ggl->lang_is_complete($code) ) {
      printf("<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"%s%s\" />\n",
        $ggl->get_lang_directionality($code),
        $code,
        $base_url,
        $this->current_page_url($code));
    }
  } ?>
  <!-- end alternate languages -->
  <title><?php $this->page_title(); ?></title>
  <link rel="copyright" type="text/html" title="Copyright notice for this website." href="<?php $this->url('legal/'); ?>" hreflang="en" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php $this->url('favicon.ico'); ?>" />
  <meta name="description" content="<?php $this->page_description(); ?>"/>
  <meta name="keywords" content="<?php print _("linux, gnu/linux, free software, software freedom, open-source, windows alternative, get linux, switch to linux"); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:700,400,300"/>
  <link rel="stylesheet" type="text/css" href="<?php $this->addver('/style/font-awesome/css/font-awesome.min.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php $this->addver('/style/main-ltr.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php $this->addver('/style/flexslider.css'); ?>" />
  <?php
  // Show right-to-left specific styles?
  if ( $ggl->get('dir') == 'rtl' ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php $this->addver('/style/main-rtl.css'); ?>" />
  <?php }
  // For some languages italic text is not displayed properly. Disable
  // italics for selected languages.
  if ( $ggl->no_italics() ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php $this->addver('/style/no-italics.css'); ?>" />
  <?php } ?>
</head>

<body>

<header id="header">
  <nav id="navigation" role="navigation">
    <ul>
      <li><a href="<?php $this->base_url(); ?>"><i class="fa fa-home fa-lg"></i></a></li>
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
