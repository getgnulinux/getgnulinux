
</div><!-- end mainbody -->
</div><!-- end wrapper -->

<div id="footer">
<div id="footer-container">
<div class="clearfix">

    <div class="footer-block">
        <h1><?php print _("About"); ?></h1>
        <ul class="footer-text">
            <li><a href="<?php $this->text('contact_url'); ?>" title="<?php print _("Contact the authors."); ?>"><?php print _("Contact us"); ?></a></li>
            <li><a href="<?php $this->text('blog_url'); ?>" title="<?php print _("Read about news and updates."); ?>"><?php print _("Our blog"); ?></a></li>
        </ul>
    </div>
    <div class="footer-block">
        <h1><?php print _("Information"); ?></h1>
        <ul class="footer-text">
            <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of use"); ?></a></li>
            <li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
        </ul>
    </div>
    <div class="footer-block">
        <h1><a href="<?php $this->text('participate_url'); ?>" title="<?php print _("Ways to help."); ?>"><?php print _("Participate"); ?></a></h1>
        <ul class="footer-text">
            <li><a href="<?php $this->base_url('link_buttons'); ?>" title="<?php print _("Help us spread free software!"); ?>"><?php print _("Link to us"); ?></a></li>
            <li><a href="<?php $this->text('l10n_url'); ?>" title="<?php print _("Help us reach an audience in your language!"); ?>"><?php print _("Translation"); ?></a></li>
            <li><a href="<?php $this->text('project_url'); ?>" title="<?php print _("Starting point for developers."); ?>"><?php print _("Project page"); ?></a></li>
        </ul>
    </div>
    <div class="footer-block">
        <h1><?php print _("Other"); ?></h1>
        <ul class="footer-text">
            <li><a href="http://browsehappy.com/" title="<?php print _("This website won't look as intended on an outdated browser. Upgrade your browser today!"); ?>">Browse Happy</a></li>
        </ul>
    </div>
    <div class="footer-block footer-block-last-child">
        <p class="footer-note footer-text">
            <?php $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <acronym title=\"Creative Commons Attribution-ShareAlike 3.0 License\"><a href=\"http://creativecommons.org/licenses/by-sa/3.0/\" rel=\"license\">CC BY-SA 3.0 License</a></acronym>."); printf($p, $this->base_url('legal',1)); ?>
        </p>
    </div>

</div><!-- end clearfix -->
</div><!-- end footer container -->
</div><!-- end footer -->

<?php
if ( $ggl->get('piwik') ) {
    require_once(INCLUDE_PATH."Piwik.php");
}
?>

</body>
</html>
