<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <p>
          <?php # TRANSLATORS: If there is an official translation for the license, use that URL instead. Make sure you use the URL for CC BY-SA 4.0.
          $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" rel=\"license external\"><abbr title=\"Creative Commons Attribution-ShareAlike\">CC BY-SA</abbr> 4.0 International License</a>."); printf($p, $this->get_base_url('legal')); ?>
        </p>
        <p>
          <?php print _("Generously hosted by <a href=\"https://www.tuxfamily.org/\" rel=\"external\">TuxFamily</a>."); ?>
          <?php $p = _("This site is <a href=\"%s\" rel=\"external\">free and open source</a>."); printf($p, $ggl->get('project_url')); ?>
        </p>
        <ul class="inline">
          <li dir="ltr"><a href="https://teamtrees.org/" target="_blank">#teamtrees</a></li>
          <li dir="ltr"><a href="https://justdiggit.org/" target="_blank">#justdiggit</a></li>
          <li dir="ltr"><a href="https://wwf.org/" target="_blank">#wwf</a></li>
          <li dir="ltr"><a href="https://www.fsf.org/" target="_blank">#fsf</a></li>
        </ul>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5><?php print _("Resources"); ?></h5>
        <ul>
          <li><a href="<?php $this->text('news_url'); ?>" rel="external"><?php print _("News"); ?></a></li>
          <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of use"); ?></a></li>
        </ul>

        <h5><?php print _("Participate"); ?></h5>
        <ul>
          <li><a href="<?php $this->text('l10n_url'); ?>" rel="external"><?php print _("Help translate"); ?></a></li>
          <li><a href="<?php $this->text('participate_url'); ?>" rel="external"><?php print _("More"); ?></a></li>

        </ul>

        <h5><?php print _("Community"); ?></h5>
        <ul>
          <li><a href="<?php $this->text('project_url'); ?>" rel="external">GitHub</a></li>
          <li><a href="<?php $this->text('forum_url'); ?>" rel="external"><?php print _("Community forum"); ?></a></li>
          <li><a href="<?php $this->base_url('credits'); ?>" hreflang="en"><?php print _("Credits"); ?></a></li>
          <li><a href="<?php $this->text('contact_url'); ?>" rel="external"><?php print _("Contact us"); ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright" dir="ltr">
    <div class="container">
      Copyright <?php echo date("Y"); ?> get GNU/Linux!
    </div>
  </div>
</footer>

<!-- build:js /scripts/vendor/jquery.js -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<!-- endbuild -->
<!-- build:js /scripts/vendor/flexslider.js -->
<script src="/node_modules/flexslider/jquery.flexslider-min.js"></script>
<!-- endbuild -->
<!-- build:js /scripts/vendor/materialize.js -->
<script src="/node_modules/materialize-css/dist/js/materialize.min.js"></script>
<!-- endbuild -->
<!-- build:js /scripts/main.js -->
<script src="/scripts/main.js"></script>
<!-- endbuild -->

</body>
</html>
