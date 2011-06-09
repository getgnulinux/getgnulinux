<?php load_header(); ?>

<div id="maincontent">

<div id="intro_box">
<h1><?php print _("More"); ?></h1>
<p><?php print _("Selected reading on the Internet."); ?></p>
</div><!-- end intro_box -->

<div class="section">
<h2><?php print _("The main players"); ?></h2>

	<div class="column1_2">
		<div class="button_link"><a href="http://fedoraproject.org/" title="Fedora Linux"><img src="/_style/more.fedora.png" width="180" height="58" alt="Fedora"/></a>
		</div>

		<p><?php print _("Prominent and perhaps more advanced distribution, featuring extensive documentation and multiple ways to participate."); ?></p>
	</div>

	<div class="column2_2">
		<div class="button_link"><a href="http://www.ubuntu.com/" title="Ubuntu Linux"><img src="/_style/more.ubuntu.png" width="180" height="58" alt="Ubuntu"/></a>
		</div>

		<p><?php print _("Homepage of the friendliest distribution around, with links to documentation, community-based and commercial support."); ?></p>
	</div>

</div><!-- end section -->


<div class="section">
<h2><?php print _("Questions, help, and equipment"); ?></h2>

	<div class="column1_2">
		<div class="button_link"><a href="http://linuxpreloaded.com/" title="Computers pre-installed with Linux" ><img src="/_language/more.ext.link2.png" width="180" height="58" alt="Linux Pre-Loaded"/></a>
		</div>

		<p><?php print _("A simple and clear selection of vendors selling computers pre-installed with Linux."); ?></p>
	</div>

	<div class="column2_2">
		<div class="button_link"><a href="http://www.nuxified.org/" title="Nuxified forums" ><img src="/_language/more.ext.link1.png" width="180" height="58" alt="Nuxified"/></a>
		</div>

		<p><?php print _("Friendly free software support forums, for newcomers and advanced users alike.<br/> If you have a question that we haven't covered, it's a good place to ask!"); ?></p>
	</div>

</div><!-- end section -->
<div class="section">
<h2><?php print _("Learn and read more"); ?></h2>

	<div class="column1_2">
		<div class="button_link"><a href="http://www.fsf.org/" title="Free Software Foundation" ><img src="/_language/more.ext.link4.png" width="180" height="58" alt="FSF"/></a>
		</div>

		<p><?php print _("The Free Software Foundation defends and advocates the very concept of <a href=\"http://www.softwareliberty.com/\">free software</a> that gave birth to GNU/Linux."); ?></p>
	</div>

	<div class="column2_2">
		<div class="button_link"><a href="http://en.wikibooks.org/wiki/FLOSS_Concept_Booklet" title="the FLOSS concept booklet" ><img src="/_language/more.ext.link3.png" width="180" height="58" alt="FLOSS Booklet"/></a>
		</div>

		<p><?php print _("A short, entertaining way to clarify thoughts about free, libre, \"open-source\" software."); ?></p>
	</div>


</div><!-- end section -->

<p class="note_ital"><?php print _("Note: these links are proposed as a recommendation. They are not commercial."); ?></p>


<div id="about_us">
<h2><?php print _("About us"); ?></h2>
<p><a href="http://www.gnulinuxmatters.org/"><img src="/_style/more.denfer.png" alt="|| GLM mascot ||" height="60" width="60"/></a>
<?php print _("This website was created and maintained by a non-profit organization, <em><a href=\"http://www.gnulinuxmatters.org/\">GNU/Linux Matters</a></em>, which focuses on Internet advocacy for free software."); ?></p>
<br/>
<p><?php print _("As of 2010, GNU/Linux Matters have ceased activity. Despite their best efforts they just haven't been able to find the time to keep this project going. This mirror of getgnulinux.org is being maintained at <a href=\"https://launchpad.net/getgnulinux\">Launchpad</a>."); ?></p>
<br/>
<p><?php $p = _("Please consider participating, or simply helping us by <a href=\"%s\">making a link to this website</a>.");
printf($p, base_url('link_buttons',1)); ?></p>

<div id="about_us_more">
<ul>
	<li><a href="<?php base_url('legal'); ?>"><?php print _("legal terms"); ?></a></li>
	<li><a href="https://launchpad.net/~getgnulinux/+contactuser"><?php print _("contact"); ?></a></li>
	<li><a href="<?php base_url('credits'); ?>"><?php print _("credits"); ?></a></li>
	<li><a href="http://www.gnulinuxmatters.org/about/faq/"><?php print _("FAQ"); ?></a></li>
</ul>
</div><!-- end of sidebox -->

</div>

</div><!-- end maincontent -->

<?php load_footer(); ?>
