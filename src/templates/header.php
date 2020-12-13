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
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons" media="all">

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
</head>

<body>

<header class="navigation">
  <div class="navigation-wrapper">
    <nav>
      <div class="nav-wrapper">
        <a href="#" data-target="sidenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="hide-on-med-and-down left">
          <?php $this->nav_link('nav-item-linux', '', _("Home")); ?>
          <?php $this->nav_link('nav-item-linux', 'linux', _("What is GNU/Linux?")); ?>
          <?php $this->nav_link('nav-item-windows', 'windows', _("Why not Windows")); ?>
          <?php $this->nav_link('nav-item-switch', 'switch_to_linux', _("Switch to GNU/Linux")); ?>
          <?php $this->nav_link('nav-item-more', 'more', _("More")); ?>
        </ul>
        <ul class="right">
          <li>
            <a class="btn btn-flat transparent waves-effect waves-light dropdown-trigger" href="#" data-target="language-menu">
              <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">translate</i>
              <?php print $ggl->get('lang-native'); ?>
              <i class="material-icons <?php print $this->rtltr("right", "left"); ?>">keyboard_arrow_down</i>
            </a>
          </li>
          <li>
            <a class="btn-floating btn-flat waves-effect waves-light" href="<?php $this->text('project_url'); ?>" title="<?php print _("GitHub repository"); ?>" target="_blank">
              <i class="material-icons <?php print $this->rtltr("right", "left"); ?>">code</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="sidenav">
      <?php $this->sidenav_link('home', _("Home")); ?>
      <?php $this->sidenav_link('linux', _("What is GNU/Linux?")); ?>
      <?php $this->sidenav_link('linux/linux_faq', _("GNU/Linux FAQ")); ?>
      <?php $this->sidenav_link('windows', _("Why not Windows")); ?>
      <?php $this->sidenav_link('switch_to_linux', _("Switch to GNU/Linux")); ?>
      <?php $this->sidenav_link('more', _("More")); ?>
    </ul>

    <ul class="dropdown-content" id="language-menu">
      <?php foreach ($ggl->get_locales('complete') as $lng => $items) {
        list($locale, $native) = $items;
        $info = $ggl->get_lang_info($lng);
        printf("<li class=\"waves-effect\"><a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a></li>\n",
          $this->current_page_path($lng),
          $lng,
          $info['dir'],
          $native);
      } ?>
      <li class="divider" tabindex="-1"></li>
      <li><a href="<?php $this->text('l10n_url'); ?>" rel="external"><?php print _("Help translate"); ?></a></li>
    </ul>
  </div>
</header>
