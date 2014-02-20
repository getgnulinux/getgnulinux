<footer id="footer" class="footer_height">
  <div id="container" class="maxwidth">

    <div id="translations">
      <ul>
        <li><i class="fa fa-globe fa-lg"></i></li>
        <?php foreach ($ggl->get_locales('complete') as $lng => $items) {
          list($locale, $native) = $items;
          $info = $ggl->get_lang_info($lng);
          printf("<li%s><a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a></li>\n",
            $info['active'] ? " class='active'" : "",
            $this->current_page_url($lng),
            $lng,
            $info['dir'],
            $native);
        } ?>
        <li><a class="more" href="javascript:;" title="More languages">…</a></li>
      </ul>
      <p id="incomplete" dir="ltr">Partial translations are available in <?php $this->language_links($ggl->get_locales('incomplete')); ?>.</p>
    </div>

    <hr/>

    <div class="block">
      <ul>
        <li><?php print _("About:"); ?></li>
        <li><a href="<?php $this->text('blog_url'); ?>" title="<?php print _("Read about news and updates."); ?>"><?php print _("Our blog"); ?></a></li>
        <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of use"); ?></a></li>
        <li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
        <li><a href="<?php $this->text('contact_url'); ?>" title="<?php print _("Contact the authors."); ?>"><?php print _("Contact us"); ?></a></li>
      </ul>
    </div>
    <div class="block">
      <ul>
        <li><?php print _("Participate:"); ?></li>
        <li><a href="<?php $this->base_url('link_buttons'); ?>" title="<?php print _("Help us spread free software!"); ?>"><?php print _("Link to us"); ?></a></li>
        <li><a href="<?php $this->text('tracker_url'); ?>" title="<?php print _("Found something awkward? Report it!"); ?>"><?php print _("Report a bug"); ?></a></li>
        <li><a href="<?php $this->text('l10n_url'); ?>" title="<?php print _("Help us reach an audience in your language!"); ?>"><?php print _("Translation"); ?></a></li>
        <li><a href="<?php $this->text('participate_url'); ?>" title="<?php print _("Ways to help."); ?>"><?php print _("More"); ?></a></li>
      </ul>
    </div>

    <hr/>

    <div class="notices" dir="ltr">
      <p>
        Except where otherwise <a href="<?php $this->base_url('legal'); ?>">noted</a>, content on this site is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/" rel="license"><abbr title="Creative Commons Attribution-ShareAlike">CC BY-SA</abbr> 3.0 License</a>.<br/>
        Optimized for <a href="http://validator.w3.org/check?uri=referer">standards</a>. Hosted by <a href="http://tuxfamily.org/">TuxFamily</a>.
      </p>

      <ul class="icons">
        <li><a href="<?php $this->text('project_url'); ?>" title="GitHub Project"><i class="fa fa-github fa-2x"></i></a></li>
        <?php if ( $ggl->get('flattr') ) { ?><li><a href="<?php $this->text('flattr_url'); ?>" title="Flattr this"><i class="fa fa-heart-o fa-2x"></i></a></li><?php } ?>
      </ul>
    </div>

  </div>
</footer>

<a id="to-top" href="javascript:;">
  <span id="to-top-hover"></span>
  <i class="fa fa-chevron-circle-up fa-3x"></i>
</a>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.2.min.js"><\/script>');</script>
<script src="<?php $this->filever('/js/plugins.js'); ?>"></script>
<script src="<?php $this->filever('/js/main.js'); ?>"></script>
<?php
switch ($this->page_name) {
    case null:
    ?>
<script>
  $(window).load(function() {
    $('.flexslider').flexslider({
        slideshow: false,
        animation: "slide"
    });
  });
</script>
    <?php
    break;

    case 'linux':
    case 'switch_to_linux.choose_a_distribution':
    ?>
<script>
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

</body>
</html>
