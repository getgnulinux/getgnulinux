
</div><!-- end mainbody -->
<div class="botl"></div>
<div class="botr"></div>
</div></div></div></div><!-- end wrappings -->

<div class="wrap_top">
<div class="wrap_right">
<div class="wrap_bottom">
<div class="wrap_left">
<div class="topl"></div>
<div class="topr"></div>

<div id="footer">
<p id="about">
<?php $p = _("Except where otherwise <a href=\"%s\">noted</a>, content on this site is licensed under a <a href=\"http://creativecommons.org/licenses/by-sa/3.0/\" rel=\"license\">CC BY-SA 3.0 License</a>."); printf($p, $this->base_url('legal',1)); ?>
</p>

<ul>
	<li><a href="<?php $this->base_url('legal'); ?>" hreflang="en"><?php print _("Terms of Use"); ?></a></li>
	<li><a href="https://launchpad.net/~getgnulinux/+contactuser"><?php print _("Contact"); ?></a></li>
	<li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
</ul>
</div><!-- end footer -->

<div class="botl"></div>
<div class="botr"></div>

</div></div></div></div><!-- end wrappings -->

<?php
if ( $ggl->get('piwik') ) {
    require_once(INCLUDE_PATH."Piwik.php");
}
?>

</body>
</html>
