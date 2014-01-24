<footer id="footer" class="footer_height">
    <div id="footer-container" class="maxwidth">

        <div id="translations">
            <ul>
                <?php foreach ($ggl->get_locales() as $code => $items) {
                    list($locale, $native) = $items;
                    if ( $ggl->lang_is_complete($code) ) {
                        printf("<li%s><a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a></li>\n",
                            $this->is_current_language($code),
                            $this->current_page($code),
                            $code,
                            $ggl->get_lang_directionality($code),
                            $native);
                    }
                } ?>
                <li><a class="more" href="<?php $this->base_url('select_language'); ?>" title="More languages">…</a></li>
            </ul>
        </div>

        <hr/>

        <div class="clearfix">
            <div class="footer-block">
                <h1><?php print _("About"); ?></h1>
                <ul class="footer-text">
                    <li><a href="<?php $this->text('blog_url'); ?>" title="<?php print _("Read about news and updates."); ?>"><?php print _("Our blog"); ?></a></li>
                    <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of use"); ?></a></li>
                    <li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
                    <li><a href="<?php $this->text('contact_url'); ?>" title="<?php print _("Contact the authors."); ?>"><?php print _("Contact us"); ?></a></li>
                </ul>
            </div>
            <div class="footer-block">
                <h1><a href="<?php $this->text('participate_url'); ?>" title="<?php print _("Ways to help."); ?>"><?php print _("Participate"); ?></a></h1>
                <ul class="footer-text">
                    <li><a href="<?php $this->base_url('link_buttons'); ?>" title="<?php print _("Help us spread free software!"); ?>"><?php print _("Link to us"); ?></a></li>
                    <li><a href="<?php $this->text('tracker_url'); ?>" title="<?php print _("Found something awkward? Report it!"); ?>"><?php print _("Report a bug"); ?></a></li>
                    <li><a href="<?php $this->text('l10n_url'); ?>" title="<?php print _("Help us reach an audience in your language!"); ?>"><?php print _("Translation"); ?></a></li>
                    <li><a href="<?php $this->text('project_url'); ?>" title="<?php print _("Starting point for developers."); ?>"><?php print _("Project page"); ?></a></li>
                </ul>
            </div>
            <div class="footer-block">
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

        <div>
            <?php
            // Show Flattr button?
            if ( $ggl->get('flattr') ) {
                $this->flattr_widget();
            }
            // Show AddThis widget?
            if ( $ggl->get('addthis') ) {
                require_once(ROOT.'/include/widgets/AddThis.php');
            }
            ?>
        </div>

    </div><!-- end footer container -->
</footer><!-- end footer -->

<?php
// Load the Piwik javascript?
if ( $ggl->get('piwik') ) {
    require_once(ROOT.'/include/widgets/Piwik.php');
}
?>

</body>
</html>
