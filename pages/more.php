<?php $this->load_header(); ?>

<div id="maincontent">

<div id="intro_box">
<h1><?php print _("More"); ?></h1>
<p><?php print _("Selected reading on the Internet."); ?></p>
</div><!-- end intro_box -->

<div class="section">
<h2><?php print _("The main players"); ?></h2>

	<div class="column1_2">
        <div class="button_link"><a href="<?php
# i18n: use url of official localised Fedora homepage, if existing
print _("http://fedoraproject.org/"); ?>" title="<?php print _("Fedora Linux"); ?>"><img src="/images/more/more.fedora.png" width="180" height="58" alt="Fedora"/></a>
		</div>

		<p><?php print _("Prominent and perhaps more advanced distribution, featuring extensive documentation and multiple ways to participate."); ?></p>
	</div>

	<div class="column2_2">
        <div class="button_link"><a href="<?php
# i18n: use url of official localised Ubuntu homepage, if existing
print _("http://www.ubuntu.com/"); ?>" title="<?php print _("Ubuntu Linux"); ?>"><img src="/images/more/more.ubuntu.png" width="180" height="58" alt="Ubuntu"/></a>
		</div>

		<p><?php print _("Homepage of the friendliest distribution around, with links to documentation, community-based and commercial support."); ?></p>
	</div>

</div><!-- end section -->


<div class="section">
<h2><?php print _("Questions, help, and equipment"); ?></h2>

	<div class="column1_2">
        <div class="button_link"><a href="<?php
# i18n: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
print _("http://linuxpreloaded.com/"); ?>" title="<?php print _("Computers pre-installed with Linux"); ?>" ><img src="/images/more/more.ext.link2.png" width="180" height="58" alt="<?php
# i18n: image alt description
print _("Linux Pre-Loaded"); ?>"/></a>
		</div>

		<p><?php print _("A simple and clear selection of vendors selling computers pre-installed with Linux."); ?></p>
	</div>

	<div class="column2_2">
        <div class="button_link"><a href="<?php
# i18n: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
print _("http://www.linuxquestions.org/"); ?>" title="<?php print _("LinuxQuestions.org"); ?>" ><img src="/images/more/more.ext.link1.png" width="180" height="58" alt="<?php
# i18n: image alt description
print _("LinuxQuestions.org"); ?>"/></a>
		</div>

		<p><?php print _("Friendly free software support forums, for newcomers and advanced users alike.<br/> If you have a question that we haven't covered, it's a good place to ask!"); ?></p>
	</div>

</div><!-- end section -->
<div class="section">
<h2><?php print _("Learn and read more"); ?></h2>

	<div class="column1_2">
        <div class="button_link"><a href="<?php
# i18n: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
print _("http://www.fsf.org/"); ?>" title="Free Software Foundation" ><img src="/images/more/more.ext.link4.png" width="180" height="58" alt="<?php
# i18n: image alt description
print _("FSF"); ?>"/></a>
		</div>

		<p><?php print _("The Free Software Foundation defends and advocates the very concept of <a href=\"http://www.softwareliberty.com/\">free software</a> that gave birth to GNU/Linux."); ?></p>
	</div>

	<div class="column2_2">
        <div class="button_link"><a href="<?php
# i18n: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
print _("http://en.wikibooks.org/wiki/FLOSS_Concept_Booklet"); ?>" title="<?php print _("the FLOSS concept booklet"); ?>" ><img src="/images/more/more.ext.link3.png" width="180" height="58" alt="<?php
# i18n: image alt description
print _("FLOSS Booklet"); ?>"/></a>
		</div>

		<p><?php print _("A short, entertaining way to clarify thoughts about free, libre, \"open-source\" software."); ?></p>
	</div>


</div><!-- end section -->

<p class="note_ital"><?php print _("Note: these links are proposed as a recommendation. They are not commercial."); ?></p>


<div id="about_us">
<h2><?php print _("About us"); ?></h2>
<p><a href="http://www.gnulinuxmatters.org/"><img src="/images/more/more.denfer.png" alt="|| GLM mascot ||" height="60" width="60"/></a>
<?php print _("This website was created by a non-profit organization, <em><a href=\"http://www.gnulinuxmatters.org/\">GNU/Linux Matters</a></em>, which focuses on Internet advocacy for free software. As of 2010, GNU/Linux Matters have ceased activity. Despite their best efforts they just haven't been able to find the time to keep the project going."); ?></p>
<p><?php $p = _("The &#8220;get&nbsp;GNU/Linux!&#8221; project is now being maintained at <a href=\"https://launchpad.net/getgnulinux\">Launchpad</a> and the continuity of the project now depends on the community. Please consider <a href=\"%s\">participating</a>, or simply helping by <a href=\"%s\">making a link to this website</a>.");
printf($p, "https://launchpad.net/getgnulinux", $this->base_url('link_buttons',1)); ?></p>

<div id="about_us_more">
<ul>
	<li><a href="<?php $this->base_url('legal'); ?>"><?php print _("Terms of Use"); ?></a></li>
	<li><a href="https://launchpad.net/~getgnulinux/+contactuser"><?php print _("Contact"); ?></a></li>
	<li><a href="<?php $this->base_url('credits'); ?>"><?php print _("Credits"); ?></a></li>
</ul>
</div><!-- end of sidebox -->

</div>

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
