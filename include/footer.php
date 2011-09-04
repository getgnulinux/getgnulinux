
</div><!-- end mainbody -->

<div id="footer">
<p id="about">
<?php $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"http://creativecommons.org/licenses/by-sa/3.0/\" rel=\"license\"><acronym title=\"Creative Commons Attribution-ShareAlike 3.0 Unported License\">CC BY-SA 3.0 License</acronym></a>."); printf($p, $this->base_url('legal',1)); ?>
</p>

<ul>
	<li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of Use"); ?></a></li>
	<li><a href="https://launchpad.net/~getgnulinux/+contactuser"><?php print _("Contact"); ?></a></li>
	<li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
	<li><a href="<?php $this->base_url('link_buttons'); ?>"><?php print _("Link to Us"); ?></a></li>
	<li><a href="http://getgnulinux.wordpress.com/"><?php print _("Blog"); ?></a></li>
</ul>

</div><!-- end footer -->
</div><!-- end wrapper -->

<?php
if ( $ggl->get('piwik') ) {
    require_once(INCLUDE_PATH."Piwik.php");
}
?>

</body>
</html>
