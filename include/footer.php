
</div><!-- end mainbody -->

<div id="footer">
<div id="footer-container">

<div class="footer-block">
    <h1><?php print _("About"); ?></h1>
    <ul class="footer-text">
        <li><a href="https://launchpad.net/~getgnulinux/+contactuser"><?php print _("Contact"); ?></a></li>
        <li><a href="http://getgnulinux.wordpress.com/"><?php print _("Our Blog"); ?></a></li>
    </ul>
</div>
<div class="footer-block">
    <h1><?php print _("Information"); ?></h1>
    <ul class="footer-text">
        <li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of Use"); ?></a></li>
        <li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
    </ul>
</div>
<div class="footer-block">
    <h1><?php print _("More"); ?></h1>
    <ul class="footer-text">
        <li><a href="<?php $this->base_url('link_buttons'); ?>"><?php print _("Link to Us"); ?></a></li>
    </ul>
</div>
<div class="footer-block">
    <h1><?php print _("Other"); ?></h1>
    <ul class="footer-text">
        <li><a href="http://browsehappy.com/" title="This website doesn't look good on an outdated browser. Upgrade your browser today!">Browse Happy</a></li>
    </ul>
</div>
<p class="footer-note footer-text">
    <?php $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"http://creativecommons.org/licenses/by-sa/3.0/\" rel=\"license\"><acronym title=\"Creative Commons Attribution-ShareAlike 3.0 Unported License\">CC BY-SA 3.0 License</acronym></a>."); printf($p, $this->base_url('legal',1)); ?>
</p>

</div><!-- end footer container -->
</div><!-- end footer -->
</div><!-- end wrapper -->

<?php
if ( $ggl->get('piwik') ) {
    require_once(INCLUDE_PATH."Piwik.php");
}
?>

</body>
</html>
