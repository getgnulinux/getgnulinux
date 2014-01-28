<footer id="footer" class="footer_height">
  <div id="container" class="maxwidth">

    <div id="translations">
      <ul>
        <li><i class="fa fa-globe fa-lg"></i></li>
        <?php foreach ($ggl->get_locales() as $lng => $items) {
          list($locale, $native) = $items;
          $info = $ggl->get_lang_info($lng);
          if ( $info['complete'] ) {
            printf("<li%s><a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a></li>\n",
              $info['active'] ? " class='active'" : "",
              $this->current_page_url($lng),
              $lng,
              $info['dir'],
              $native);
          }
        } ?>
        <li><a class="more" href="javascript:;" title="More languages">…</a></li>
      </ul>
      <p id="incomplete">Partial translations are available in <?php $this->language_links(2); ?>.</p>
    </div>

    <hr/>

    <div class="clearfix">
      <div class="block">
        <h1><?php print _("About"); ?></h1>
        <ul class="footer-text">
          <li><a href="<?php $this->text('blog_url'); ?>" title="<?php print _("Read about news and updates."); ?>"><?php print _("Our blog"); ?></a></li>
          <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of use"); ?></a></li>
          <li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
          <li><a href="<?php $this->text('contact_url'); ?>" title="<?php print _("Contact the authors."); ?>"><?php print _("Contact us"); ?></a></li>
        </ul>
      </div>
      <div class="block">
        <h1><?php print _("Participate"); ?></h1>
        <ul class="footer-text">
          <li><a href="<?php $this->base_url('link_buttons'); ?>" title="<?php print _("Help us spread free software!"); ?>"><?php print _("Link to us"); ?></a></li>
          <li><a href="<?php $this->text('tracker_url'); ?>" title="<?php print _("Found something awkward? Report it!"); ?>"><?php print _("Report a bug"); ?></a></li>
          <li><a href="<?php $this->text('l10n_url'); ?>" title="<?php print _("Help us reach an audience in your language!"); ?>"><?php print _("Translation"); ?></a></li>
          <li><a href="<?php $this->text('participate_url'); ?>" title="<?php print _("Ways to help."); ?>"><?php print _("More"); ?></a></li>
        </ul>
      </div>
      <div class="block">
        <h1><?php print _("Other"); ?></h1>
        <ul class="footer-text">
          <li><a href="http://browsehappy.com/" title="<?php print _("This website won't look as intended on an outdated browser. Upgrade your browser today!"); ?>"><?php
          # translators: The link in the footer that links to browsehappy.com.
          print _("Browse Happy"); ?></a></li>
        </ul>
      </div>
    </div><!-- end clearfix -->

    <hr/>

    <div>
      <p><?php $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"http://creativecommons.org/licenses/by-sa/3.0/\" rel=\"license\"><acronym title=\"Creative Commons Attribution-ShareAlike\">CC BY-SA</acronym> 3.0 License</a>."); printf($p, $this->base_url('legal',1)); ?></p>
    </div>

    <ul id="icons">
      <li><a href="<?php $this->text('project_url'); ?>" title="<?php print _("GitHub Project"); ?>"><i class="fa fa-github fa-lg"></i></a></li>
      <li><a href="<?php $this->text('tracker_url'); ?>" title="<?php print _("Report a bug"); ?>"><i class="fa fa-bug fa-lg"></i></a></li>
      <li><a href="http://tuxfamily.org/" title="Hosting by TuxFamily"><i class="fa fa-cloud fa-lg"></i></a></li>
      <?php if ( $ggl->get('flattr') ) { ?><li><a href="<?php $this->text('flattr_url'); ?>" title="Flattr this"><i class="fa fa-dollar fa-lg"></i></a></li><?php } ?>
    </ul>

  </div>
</footer>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php $this->addver('/js/jquery.scrollTo.min.js'); ?>"></script>
<script src="<?php $this->addver('/js/mousetrap.min.js'); ?>"></script>
<script src="<?php $this->addver('/js/common.js'); ?>"></script>
<?php
switch ($this->page_name) {
    case null:
    ?>
<script src="<?php $this->addver('/js/jquery.flexslider.js'); ?>"></script>
<script charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
        slideshow: false,
        animation: "slide",
        start: function(slider) {
          Mousetrap.bind("n", function(e) {
              slider.flexAnimate(slider.getTarget("next"));
          });
          Mousetrap.bind("p", function(e) {
              slider.flexAnimate(slider.getTarget("previous"));
          });
        }
    });
  });
</script>
    <?php
    break;

    case 'linux':
    case 'switch_to_linux.choose_a_distribution':
    ?>
<script src="<?php $this->addver('/js/jquery.flexslider.js'); ?>"></script>
<script charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
        animation: "fade",
    });
  });
</script>
    <?php
    break;
}

// Load the Piwik Javascript?
if ( $ggl->get('piwik') ) {
  require_once(ROOT.'/include/widgets/Piwik.php');
}
?>

<a id="to-top" href="javascript:;">
  <span id="to-top-hover"></span>
  <i class="fa fa-chevron-circle-up fa-3x"></i>
</a>

</body>
</html>
