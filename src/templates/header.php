<!DOCTYPE html>
<html class="<?php print($ggl->get_css_features()); ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title><?php print $this->page_title(); ?></title>
  <meta name="description" content="<?php print $this->page_description(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->og_tags(); ?>
  <?php $this->link_alternate_tags(); ?>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons" media="all">

  <!-- build:css /styles/vendor/flexslider.css -->
  <link rel="stylesheet" type="text/css" href="/styles/vendor/flexslider.css" media="all">
  <!-- endbuild -->

  <!-- build:css /styles/main.css -->
  <link rel="stylesheet" type="text/css" href="/styles/main.css" media="all">
  <!-- endbuild -->
</head>

<body>

<header class="navigation">
  <div class="navigation-wrapper">
    <nav>
      <div class="nav-wrapper">
        <a href="#" data-target="sidenav" class="sidenav-trigger <?php print $this->rtltr("left", "right"); ?>"><i class="material-icons">menu</i></a>
        <ul class="hide-on-large-and-down <?php print $this->rtltr("left", "right"); ?>">
          <?php
          $navigation_items = $ggl->get('navigation_items');

          if (!$this->is_ltr()) {
              krsort($navigation_items, SORT_NUMERIC);
          }

          foreach ($navigation_items as $i => $items) {
              list($page, $title) = $items;
              $this->nav_link($page, $title);
          }
          ?>
        </ul>
        <ul class="<?php print $this->rtltr("right", "left"); ?>">
          <li>
            <span class="hide-on-med-and-up">
              <a class="btn-floating btn-flat waves-effect waves-light language-button-small" href="#" data-target="language-menu-1">
                <i class="material-icons">translate</i>
              </a>
            </span>
            <span class="hide-on-small-only">
              <a class="btn btn-flat waves-effect waves-light language-button-large" href="#" data-target="language-menu-2">
                <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">translate</i>
                <?php print $ggl->get('lang-native'); ?>
                <i class="material-icons <?php print $this->rtltr("right", "left"); ?>">keyboard_arrow_down</i>
              </a>
            </span>
          </li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="sidenav">
      <?php
      $navigation_items = $ggl->get('navigation_items');

      foreach ($navigation_items as $i => $items) {
          list($page, $title) = $items;
          $this->sidenav_link($page, $title);
      }
      ?>
    </ul>

    <ul class="dropdown-content language-menu" id="language-menu-1">
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

    <ul class="dropdown-content language-menu" id="language-menu-2">
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
