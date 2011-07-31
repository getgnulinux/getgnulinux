<?php $this->load_header(); ?>

<?php $this->menu_switch_to_linux(); ?>

<div id="maincontent" class="from_windows_to_linux">

<div id="intro_box">
<h1><?php print _("From Windows to Linux"); ?></h1>
<p><?php print _("This is what everyday users usually find better, mostly the same, or not as good, when switching from Windows to Linux."); ?></p>
</div><!-- end intro_box -->

<div class="section">
<h2 id="whats_better"><?php print _("What is better in Linux"); ?></h2>
<ul>
	<li><h3><?php
# i18n: please note the punctuation should be consistent
print _("It's free"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.free.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("freedom"); ?>"/>
    <?php
# i18n: link to Free Software definition on GNU.org site, if softwareliberty.com is not translated in your language
print _("Unlike Windows, GNU/Linux is <a href=\"http://www.softwareliberty.com/\" title=\"What does Free Software mean?\">free software</a> &ndash; free as in freedom. Install it on all computers and make copies for your friends! You can even study it, transform it as you please, or build and sell your own distribution."); ?></li>

	<li><h3><?php print _("Programs"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.programs.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("add/remove programs easily"); ?>"/>

    <?php print _("There are a wealth of free applications available at no cost under Linux. To edit professional documents, burn music CDs, rework photos, design a website, or organise music; there's no need for $200 software with restrictive licenses."); ?><br/>
    <?php print _("The internal installer makes it incredibly easy to find, install and remove programs."); ?><br/>
    <?php print _("It's also safe: you can forget the demo/trial crippled software, or harmful freeware polluting the web."); ?></li>

	<li><h3 id="no_fighting"><?php print _("No fighting"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.preferences.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("built solid"); ?>"/>
    <?php print _("Keeping your computer in shape over time needn't be a struggle. One year on, GNU/Linux runs just as fast as the first day. And it may bring your old PC back to life."); ?><br/>
    <?php print _("Also, Linux lets you choose what you want and what you don't. If you had a hard time getting rid of MSN Messenger, Windows Update notifications, or Clippit the paperclip, you'll find it refreshing."); ?></li>


	<li><h3 id="security"><?php print _("Security"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.security.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("security"); ?>"/>
    <?php print _("Forget expensive and restrictive anti-virus, anti-spyware, anti-anything and anti-everything. Linux is very, very secure."); ?><br/>
    <?php
    # i18n: If you don't know of a link replacement in your languge, just leave the link as it is
    print _("It is often difficult for Windows users to believe that there are <em>no spyware nor viruses</em> under Linux &mdash; <a href=\"http://linuxmafia.com/~rick/faq/index.php?page=virus#virus\">but it's true</a>. Malicious programs have a hard time doing anything at all in a well-built system."); ?><br/>
    <?php print _("Regular, easy software updates will keep everyone entirely safe."); ?></li>


	<li><h3 id="support"><?php print _("Support"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.support.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("support"); ?>"/>
    <?php
    # i18n: The first %s represents the URL to the "More" page and seconds %s represents the title of the page "More" in your language
    $p = _("Linux benefits from a great sense of community whose friendliness will surprise you. If you try to do something complicated but can't succeed, there are a lot of people around to help you out. Our \"<a href=\"%s\">%s</a>\" page gives a few pointers."); ?><br/>
    <?php print _("The companies behind the main GNU/Linux distributions, such as Canonical and Red Hat, also provide expert commercial support."); printf($p, $this->base_url('more',1), _("More")); ?></li>

</ul>

</div><!-- end section -->


<div class="section">
<h2 id="whats_the_same"><?php print _("What is mostly the same in Linux"); ?></h2>
<p><?php print _("Fundamentally, everyday users will find GNU/Linux similar in use to Windows or Mac OSX."); ?></p>
<ul>
	<li><h3><?php print _("General set-up"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.mouse.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("simple use"); ?>"/>
    <?php print _("If you still believe Linux is controlled with code and command-line, you should update your views!"); ?><br/>
<?php print _("Just like Windows, Linux has to boot when you switch your computer on, and then you use programs in it to do different things. The taskbar and layout of applications will feel familiar to Windows or Mac OS users."); ?><br/>
<div class="note"><?php
# i18n: The %s placeholder will automatically point to the screenshots page
$p = _("See more: we have <a href=\"%s\">screenshots</a></div>");
printf($p, $this->base_url('linux/screenshots',1)); ?></li>


	<li><h3><?php print _("Web browsing and common tasks"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.browsing.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("Firefox browser"); ?>"/>
    <?php
# i18n: use localized Firefox landing page if possible
print _("The Web looks just the same when viewed with Linux (in fact you can browse the Web with the same program if you already use <a href=\"http://www.getfirefox.com/\">Firefox</a>). And of course, you can go through your picture and music collection all the same. Files and folders are navigated with a file manager like Windows Explorer."); ?></li>
</ul>

</div><!-- end section -->



<div class="section">


<h2 id="whats_not_as_good"><?php print _("What is not as good in Linux"); ?></h2>
<div class="quote">
<p><?php
# i18n: translate "widely": the idea is more important than precision/exactitude here
print _("&quot;Never tell the truth to people who are not worthy of it.&quot;"); ?> <span class="note">&mdash; Mark Twain;</span></p>
<p><em><?php print _("or:"); ?></em></p>
<p><?php print _("&quot;Tell the truth and run.&quot;"); ?> <span class="note"><?php print _("&mdash; Yugoslavian proverb."); ?></span></p>
</div>

<ul>
	<li><h3><?php print _("Driver support"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.hardware.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("some hardware problems"); ?>"/>
    <?php print _("Manufacturers of computer hardware don't always (yet) release drivers for Linux or publicize full specifications."); ?><br/>
    <?php print _("So, drivers are sometimes unavailable for the most recent high-end graphics cards &mdash; some are reverse-engineered from Windows drivers by volunteers. Some are also released free of charge, but under restrictive licenses."); ?><br/>
    <?php print _("Sadly, the same problem occurs with many low-end WiFi cards."); ?><br/>
    <?php print _("However, the vast majority of computers with standard hardware work out of the box with main Linux distributions. Common hardware such as USB keys or photo cameras never are a problem."); ?></li>


	<li><h3><?php print _("DVDs, restricted formats"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.dvd_restricted.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("DVDs and restricted media"); ?>"/>
    <?php print _("Many multimedia formats in use are proprietary and not openly specified; this means, broadly speaking, that Linux programmers have to find out how to read them without any help from the format designers."); ?><br/>
    <?php
# i18n: Please choose the wording of the DRM acronym according to the FSF terminology
print _("This might lead you to circumvent the restrictions in some DVDs and the <acronym title=\"Digital Restrictions Management\">DRM</acronym> in some music files, even if you purchased them in full legality, to be make them work under Linux. Unfortunately, depending on where you live, <em>such circumvention processes may be illegal</em> even if you purchased your media entirely legally."); ?><br/>
    <div class="note"><?php print _("Read more in our Linux FAQ:"); ?> <a href="<?php $this->base_url('linux/linux_faq'); ?>#dvd_mp3"><?php print _("Can I play my DVDs and MP3s under GNU/Linux?"); ?></a></div>

	</li>

	<li><h3><?php print _("Gaming"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.gaming.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("gaming"); ?>"/>
    <?php print _("Hard-core computer gamers, you might find that the Linux gaming world is less professional and out-of-the-box than under Windows: the large game developing companies are only slowly getting interested in the free software world, which means that many well-known titles do not work on Linux, or need special restrictive emulators to work."); ?><br/>
    <?php
# i18n: use localised link if possible, and contact us if you know better resources
print _("There is a very active free software game development community though, and they have produced quite a few high-quality games, both 2D and 3D, that are free software. You can head to the <a href=\"http://ubuntuforums.org/forumdisplay.php?f=93\">Ubuntu gaming forum</a> to find more information."); ?><br/>
    <div class="note"><?php print _("Read more in our Linux FAQ:"); ?> <a href="<?php $this->base_url('linux/linux_faq'); ?>#games"><?php print _("Can I play popular 3D games under GNU/Linux?"); ?></a></div>

	</li>

	<li><h3><?php print _("Hibernating"); ?></h3>
    <img src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.hibernation.png" width="100" height="69" alt="<?php
# i18n: image alt description
print _("hibernation problems"); ?>"/>
    <?php print _("Because of the driver issues above, hibernating is not always reliable. The most common occurrence is the loss of WiFi connection after hibernating on laptops whose hardware drivers are not free."); ?></li>

</ul>

</div><!-- end section -->




<div class="section">

<h2 id="conclusion"><?php print _("Conclusion"); ?></h2>
<p><?php print _("Whether you are going to enjoy Linux depends mostly on what you expect from it."); ?></p>
<ul>
    <li><?php print _("If you wish Linux to be just exactly like Windows, you will probably be disappointed. GNU/Linux is built by people who simply <a href=\"http://linux.oneandoneis2.org/LNW.htm\">wish it to be different</a>. In the free software community, members have different visions of what makes an ideal operating system. These differences lead to variety, which is what makes Linux so special and interesting."); ?></li>
    <li><?php print _("Your freedom matters. Thousands in communities and companies work to build software on which you may exert this freedom. Using GNU/Linux is the easiest way to do so fully."); ?></li>
    <li><?php print _("It's fun! Not having to worry about spyware, viruses, program registrations, demos that expire, or finding software that is really free as in freedom, makes using a computer suddenly very enjoyable."); ?></li>
</ul>
<p><?php print _("We hope you'll switch soon. There's a large community waiting, and no one in it asking you to &quot;sign up, purchase and register&quot;."); ?></p>


</div><!-- end section -->

</div><!-- end maincontent -->

<div id="bottom_next_page_banner">
<a href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>"><span class="arrow"><span class="underlining"><?php
# i18n: We try to be friendly and inviting here. This does not have to be translated very precisely.
print _("Choose a Linux distribution to get started!"); ?></span></span></a>
</div><!-- end bottom_next_page_banner-->

<?php $this->load_footer(); ?>
