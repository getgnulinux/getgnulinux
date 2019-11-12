<footer class="footer">
  <div class="container">

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
      </ul>
    </div>

    <hr>

    <div class="block">
      <ul>
        <li><?php print _("About:"); ?></li>
        <li><a href="<?php $this->text('blog_url'); ?>" title="<?php print _("Read about news and updates."); ?>" rel="external"><?php print _("Our blog"); ?></a></li>
        <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of use"); ?></a></li>
        <li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
        <li><a href="<?php $this->text('contact_url'); ?>" title="<?php print _("Contact the authors."); ?>" rel="external"><?php print _("Contact us"); ?></a></li>
      </ul>
    </div>
    <div class="block">
      <ul>
        <li><?php print _("Participate:"); ?></li>
        <li><a href="<?php $this->text('forum_url'); ?>" title="<?php print _("Our community forum for discussions about this website."); ?>" rel="external"><?php print _("Community forum"); ?></a></li>
        <li><a href="<?php $this->text('tracker_url'); ?>" title="<?php print _("Found something awkward? Please report it!"); ?>" rel="external"><?php print _("Report a bug"); ?></a></li>
        <li><a href="<?php $this->text('l10n_url'); ?>" title="<?php print _("Help us reach an audience in your language!"); ?>" rel="external"><?php print _("Translation"); ?></a></li>
        <li><a href="<?php $this->text('participate_url'); ?>" title="<?php print _("Ways to help."); ?>" rel="external"><?php print _("More"); ?></a></li>
      </ul>
    </div>

    <hr>

    <div class="notices" dir="ltr">
      <p>
        <?php # translators: If there is an official translation for the license, use that URL instead. Make sure you use the URL for CC BY-SA 4.0.
        $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" rel=\"license external\"><abbr title=\"Creative Commons Attribution-ShareAlike\">CC BY-SA</abbr> 4.0 International License</a>."); printf($p, $this->base_url('legal',1)); ?><br/>
        <?php print _("Generously hosted by <a href=\"https://www.tuxfamily.org/\" rel=\"external\">TuxFamily</a>."); ?>
        <?php $p = _("This site is <a href=\"%s\" rel=\"external\">open source</a>."); printf($p, $ggl->get('project_url')); ?>
      </p>
    </div>

  </div>
</footer>

<a id="to-top" href="#">
  <span id="to-top-hover"></span>
  <i class="fa fa-chevron-circle-up fa-3x"></i>
</a>

<!-- build:js /scripts/vendor/jquery.js -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- endbuild -->

<!-- build:js /scripts/plugins.js -->
<script src="/scripts/plugins.js"></script>
<!-- endbuild -->

<!-- build:js /scripts/main.js -->
<script src="/scripts/main.js"></script>
<!-- endbuild -->

<?php
switch ($this->view) {
    case 'home':
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
?>
</body>
</html>
