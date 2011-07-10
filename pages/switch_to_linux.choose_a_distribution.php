<?php $this->load_header(); ?>

<?php $this->menu_switch_to_linux(); ?>

<div id="maincontent">

<div id="intro_box">
<h1><?php print _("Choose a distribution"); ?></h1>

<p><?php print _("Because there is no &quot;one Linux&quot;, finding what you need can be difficult. Here are our choice of three beginner-friendly, widely used distributions."); ?></p>

</div><!-- end intro_box -->

<div class="ubuntu">
<h2 id="ubuntu" class="ubuntu_title">Ubuntu</h2>
<a href="<?php
# i18n: use url of official localised Ubuntu homepage, if existing
print _("http://www.ubuntu.com/"); ?>" title="Ubuntu Linux"><img src="/images/switch_to_linux/switch_to_linux.choose_a_distribution.ubuntu.png" width="140" height="90" alt="Ubuntu"/></a>
<p><?php print _("Simple, easy, usable and our personal favourite. A tanned, smooth atmosphere that never gets in your way. All programs are kept in order and managed easily. Configuration is kept simple rather than exhaustive."); ?></p>
<p><?php print _("We recommend this friendly and complete distribution if you are looking for an easy way to try and step into GNU/Linux."); ?></p>

<div class="distro_screenshots">
<a href="<?php $this->base_url('linux/screenshots'); ?>#ubuntu"><img src="/images/screenshots/h113px/ubuntu2.png" alt="screenshot1"/></a>
<a href="<?php $this->base_url('linux/screenshots'); ?>#ubuntu"><img src="/images/screenshots/h113px/ubuntu1.png" alt="screenshot2"/></a>
<a href="<?php $this->base_url('linux/screenshots'); ?>#ubuntu"><img src="/images/screenshots/h113px/ubuntu3.png" alt="screenshot3"/></a>
</div><!-- end distro_screenshots -->

<p><?php print _("Ubuntu also has a sister distribution, <a href=\"http://www.kubuntu.org/\">Kubuntu</a>, with a different layout and slightly more advanced graphics."); ?></p>

</div><!-- end ubuntu -->


<div class="fedora">
<h2 id="fedora" class="fedora_title">Fedora</h2>
<a href="<?php
# i18n: use url of official localised Fedora homepage, if existing
print _("http://fedoraproject.org/"); ?>" title="Fedora Linux"><img src="/images/switch_to_linux/switch_to_linux.choose_a_distribution.fedora.png" width="140" height="90" alt="Fedora"/></a>
<p><?php
# i18n: if you don't know of a clean, simple comparison website, simply remove the link.
print _("The distribution by the long-time prominent GNU/Linux developer company Red Hat. The default layout is similar to Ubuntu (it is also possible to use KDE, the more advanced desktop environment in use in Kubuntu), but <a href=\"http://polishlinux.org/choose/comparison/?distro1=Ubuntu&amp;distro2=Fedora\" title=\"What are the differences between Fedora and Ubuntu?\">there are differences</a> in the chosen applications, install protocols and several technical elements."); ?></p>

<p><?php print _("We recommend this distribution if you wish to learn more about the workings of a GNU/Linux system, security configuration, or work on software development."); ?></p>

<div class="distro_screenshots">
<a href="<?php $this->base_url('linux/screenshots'); ?>#fedora"><img src="/images/screenshots/h113px/fedora2.png" alt="screenshot1"/></a>
<a href="<?php $this->base_url('linux/screenshots'); ?>#fedora"><img src="/images/screenshots/h113px/fedora1.png" alt="screenshot2"/></a>
<a href="<?php $this->base_url('linux/screenshots'); ?>#fedora"><img src="/images/screenshots/h113px/fedora3.png" alt="screenshot3"/></a>
</div><!-- end distro_screenshots -->

</div><!-- end fedora -->

<div class="gnewsense">
<h2 id="gnewsense" class="gnewsense_title">gNewSense</h2>
<a href="http://www.gnewsense.org/" title="gNewsSense GNU/Linux"><img src="/images/switch_to_linux/switch_to_linux.choose_a_distribution.gnewsense.png" width="140" height="90" alt="gNewSense"/></a>
<p><?php $p = _("Since Ubuntu contains some restricting components (<a href=\"%s#full_freedom\">why?</a>), the gNewSense developers have built an entirely free derivative, with the help of the <acronym title=\"Free Software Foundation\">FSF</acronym>. Although its community is smaller and its hardware support might be slightly inferior, gNewSense gives anyone full freedom over a complete operating system almost identical to Ubuntu."); printf($p, $this->base_url('linux/linux_faq',1)); ?></p>

<p><?php print _("We recommend this distribution if you are committed to freedom in your computing."); ?></p>

<div class="distro_screenshots">
<a href="<?php $this->base_url('linux/screenshots'); ?>#gnewsense"><img src="/images/screenshots/h113px/gnewsense1.png" alt="screenshot1"/></a>
<a href="<?php $this->base_url('linux/screenshots'); ?>#gnewsense"><img src="/images/screenshots/h113px/gnewsense2.png" alt="screenshot2"/></a>
<a href="<?php $this->base_url('linux/screenshots'); ?>#gnewsense"><img src="/images/screenshots/h113px/gnewsense3.png" alt="screenshot3"/></a>
</div><!-- end distro_screenshots -->

</div><!-- end gnewsense -->



<p class="note_ital"><?php
# i18n: if you don't know of a clean, simple comparison website, simply remove the link.
print _("Note: There are <a href=\"http://polishlinux.org/choose/comparison/\">plenty of distributions to choose from and compare</a>."); ?><br />
<?php print _("This is our selection for newcomers. These links are not commercial."); ?></p>

</div><!-- end maincontent -->

<div id="bottom_next_page_banner">
    <a href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>"><span class="arrow"><span class="underlining"><?php
# i18n: We try to be friendly and inviting here. The term "get a CD" does not have to be translated exactly.
print _("Now get a CD and try or install your distribution!"); ?></span></span></a>
</div><!-- end bottom_next_page_banner-->

<?php $this->load_footer(); ?>
