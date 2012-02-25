<?php
$this->load_header();
$this->load_top_bar();
$this->menu_switch_to_linux();
?>

<div id="maincontent" class="try_or_install">

<div id="intro_box">
<h1><?php print _("Try or install"); ?></h1>

<p><?php print _("Make the step &ndash; unless you wish to <a href=\"http://linuxpreloaded.com/\" title=\"Linux Desktops and Laptops\">purchase a PC with Linux pre-installed</a>, you can see what freedom looks like on your computer."); ?></p>
</div><!-- end intro_box -->


<div class="section">
<img src="<?php print $this->language_file("switch_to_linux.try_or_install.live_cd.png"); ?>" width="201" height="170" alt="|| CD ||"/>
<h2 id="live_cd"><?php print _("Try out: the live CD"); ?></h2>

<h3 id="live_cd_what_is"><?php print _("Take no risk"); ?></h3>

<p><?php print _("Using a live CD means that Linux will be running on your computer <em>without installing anything</em>. It's a risk-less way to try and see by yourself what Linux is."); ?></p>
<p><?php print _("When running on a live CD, your computer uses solely the CD-ROM to work (without accessing the hard drive inside). You can launch all of the default programs, edit documents, and browse the web."); ?></p>
<p><?php print _("Since it is only designed as a trial mode, it is a little slow (it will take you five minutes to boot up, and programs launch somewhat slowly). If you proceed to install, the system will go much faster."); ?></p>


<h3 id="live_cd_what_need"><?php print _("What you need"); ?></h3>

<p><?php print _("To use a live CD, you need a little bit of curiosity and fifteen minutes of free time, but <strong>no advanced knowledge in computing</strong>. If you feel confident simply using Windows from time to time, then this is within your reach."); ?></p>



</div><!-- end section -->

<div class="section">

<img src="<?php print $this->language_file("switch_to_linux.try_or_install.computer_screen.png"); ?>" width="170" height="201" alt="|| computer screen ||"/>
<h2 id="install_dual_boot"><?php print _("Installing as a dual boot"); ?></h2>

<h3 id="dual_boot_what_is"><?php print _("Choose at start-up"); ?></h3>
<p><?php print _("It is possible to install GNU/Linux along with Windows. This means that upon start-up, you will be greeted with a screen allowing you to boot into the operating system you prefer."); ?></p>
<p><?php print _("Setting up a dual-boot can be helpful if you need time to abandon restrictive software. It is <a href=\"http://www.psychocats.net/ubuntu/installing\" title=\"a tutorial on dual-booting Windows and Ubuntu\">not difficult to set-up</a>, though erasing Windows altogether is even easier."); ?></p>

<h3 id="dual_boot_what_need"><?php print _("What you need"); ?></h3>
<p><?php print _("Installing Linux on your computer will take you less than 30 minutes. It is not an obvious step for complete beginners, but if you use computers on a daily basis this is very likely within your reach. If you have already re-installed Windows on your computer, rest assured that installing Linux is no harder."); ?></p>



</div><!-- end section -->


<div class="section">


<h2 id="get_the_cd"><?php print _("Get the CD you need"); ?></h2>

<p><?php print _("For the distributions we recommend, the live CD is the same as the installation CD."); ?></p>

<div class="ubuntu_light">
<h4 class="ubuntu_title">Ubuntu</h4>

<p>
    <a href="http://www.ubuntu.com/download/" class="get_it_button"><span class="go_download"><span class="download"><?php print _("Download Ubuntu"); ?></span></span></a>
	<?php print _("You can download an <code>iso</code> image (rather large file) and then <a href=\"https://help.ubuntu.com/community/BurningIsoHowto\">burn it to a CD</a>."); ?>
</p>
</div><!-- end ubuntu_light -->


<div class="fedora_light">
<h4 class="fedora_title">Fedora</h4>

<p>
	<a href="http://fedoraproject.org/get-fedora" class="get_it_button"><span class="go_download"><span class="download"><?php print _("Download Fedora"); ?></span></span></a>
	<?php print _("The Fedora live CD also enables installation. Alternatively, you can download the DVD, which cannot act as live CD but permits speedier installation."); ?>
</p>
</div><!-- end fedora_light -->


<div class="trisquel_light">
<h4 class="trisquel_title">Trisquel</h4>

<p>
	<a href="http://trisquel.info/download" class="get_it_button"><span class="go_download"><span class="download"><?php print _("Download Trisquel"); ?></span></span></a>
	<?php print _("The Trisquel installation is very similar to that of Ubuntu."); ?></p>
</div><!-- end trisquel_light -->


<span class="note">
<?php print _("Note: Purchased and downloaded CDs are identical! GNU/Linux is <a href=\"http://www.softwareliberty.com/\" title=\"What do you mean, free?\">free software</a>. You are simply paying a handling/shipping fee."); ?></span>
</div><!-- end section -->



<div class="section">
<a href="http://linuxpreloaded.com/" title="Linux pre-installed computers"><img src="/images/switch_to_linux/switch_to_linux.try_or_install.laptop.png" alt="|| laptop ||"/></a>
<h2 id="free_software_pre_installed"><?php print _("Free Software pre-installed"); ?></h2>

<p><?php print _("Not all computers are shipped with Windows. If you do not wish to make the install yourself, or are in need of new hardware, you can get a laptop or a desktop pre-installed with GNU/Linux.<br/>
We have compiled <a title=\"linux computers\" href=\"http://linuxpreloaded.com/\">a list of vendors pre-installing Linux at LinuxPreloaded.com</a> just for that reason."); ?></p>

</div><!-- end section -->

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
