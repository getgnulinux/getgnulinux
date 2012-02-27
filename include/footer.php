<?php
/******************************************************************************
 *  Copyright 2006-2008, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011, Launchpad getgnulinux Team
 *
 *  This file is part of Get GNU/Linux! <https://launchpad.net/getgnulinux>
 *
 *  GGL is free software: you can redistribute it and/or modify it under
 *  the terms of the GNU Affero General Public License as published by the
 *  Free Software Foundation, either version 3 of the License, or any later
 *  version.
 *
 *  GGL is distributed in the hope that it will be useful, but WITHOUT
 *  ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 *  FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public
 *  License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with GGL. If not, see <http://www.gnu.org/licenses/>.
 *
 ******************************************************************************
 *  The text content is published under a Creative Commons
 *  Attribution-ShareAlike 3.0 License,
 *  Copyright 2006-2010, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011, Launchpad getgnulinux Team
 *
 *****************************************************************************/
?>

</div><!-- end mainbody -->
</div><!-- end wrapper -->

<div id="footer" class="footer_height">
    <div id="footer-container">
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
                    # i18n: The link in the footer that links to browsehappy.com. You may choose to leave this untranslated.
                    print _("Browse Happy"); ?></a></li>
                </ul>
            </div>
            <div class="footer-block footer-block-last-child">
                <p>
                    <?php $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"http://creativecommons.org/licenses/by-sa/3.0/\" rel=\"license\"><acronym title=\"Creative Commons Attribution-ShareAlike\">CC BY-SA</acronym> 3.0 License</a>."); printf($p, $this->base_url('legal',1)); ?>
                </p>
                <?php
                // Show Flattr button?
                if ( $ggl->get('flattr') ) { $this->flattr_button(); }
                // Show AddThis widget?
                if ( $ggl->get('addthis') ) { $this->addthis_widget(); }
                ?>
            </div>
        </div><!-- end clearfix -->
    </div><!-- end footer container -->
</div><!-- end footer -->
</div><!-- end global container -->

<!-- language menu -->
<div id="just_for_ie7">
<div id="translations">
<div id="language_menu"><span id="language_menu_text"><?php print _("Alternate languages"); ?></span></div>
<ul>
<?php
foreach ($ggl->get('locales') as $code => $items) {
    list($locale, $native, $percent) = $items;
    if ($percent == 1) {
        printf("<li%s><a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a></li>\n",
            $this->is_current_language($code),
            $this->current_page($code),
            $code,
            $ggl->get_lang_directionality($code),
            $native);
    }
}
?>
<li><a href="<?php $this->base_url('select_language'); ?>"><?php print _("More languages"); ?></a></li>
</ul>
</div><!-- end translations -->
</div><!-- end just_for_ie7 -->
<!-- end language menu -->

<?php
// Load the Piwik javascript?
if ( $ggl->get('piwik') ) {
    require_once(INCLUDE_PATH."Piwik.php");
}
?>

</body>
</html>
