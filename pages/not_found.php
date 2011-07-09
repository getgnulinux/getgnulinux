<?php $this->load_header(); ?>

<div id="maincontent">

<h1><?php
# i18n: Title for the Page Not Found page. We like to add a bit of humour to this title :P
print _("Doh! Page Not Found"); ?></h1>

<p><?php
# i18n: The "AWOL" part is supposed to add some humour to the error message. Use your creativity to add some humour that's more suitable for your language.
print _("Sorry, but we couldn't find the page you were looking for. Either that page doesn't exist or the web page went <acronym title=\"away without leave\">AWOL</acronym>."); ?></p>

<h2><?php print _("Report broken link"); ?></h2>
<p><?php
# i18n: Here, the %s placeholder simply puts a link to the bug tracker
$p = _("If you found a broken link, please <a href=\"%s\">report it</a> so we can repair it. Thank you!"); printf($p, 'https://bugs.launchpad.net/getgnulinux'); ?></p>

<br/><a href="<?php $this->base_url(); ?>"><?php print _("Return to the home page"); ?></a>

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
