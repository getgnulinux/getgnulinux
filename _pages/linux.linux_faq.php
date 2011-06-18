<?php load_header(); ?>

<div id="maincontent">

<h1 id="top"><?php print _("Linux Frequently Asked Questions"); ?></h1>

<p><a href="<?php base_url('linux'); ?>"><?php print _("Our page about Linux</a> covers the essential information. We hope this FAQ list can help if you are more curious."); ?></p>
<br/>

<div id="content">

<?php print _("General questions:"); ?>
<ul>
	<li><a href="#naming_conventions"><?php print _("Are &quot;GNU/Linux&quot; and &quot;Linux&quot; any different?"); ?></a></li>
	<li><a href="#gnu"><?php print _("And what has that software to do with a gnu?"); ?></a></li>
	<li><a href="#trademark"><?php print _("Is Linux a registered trademark?"); ?></a></li>
	<li><a href="#only_linux"><?php print _("Is GNU/Linux the only free operating system available?"); ?></a></li>
	<li><a href="#mac"><?php print _("Is Mac OSX a distribution of Linux?"); ?></a></li>
</ul>
<?php print _("Understanding free software:"); ?>
<ul>
	<li><a href="#open_source"><?php print _("Are &quot;Open Source&quot; and &quot;Free Software&quot; the same thing?"); ?></a></li>
	<li><a href="#freedom"><?php print _("Why are some Linux distributions sold, not given away?"); ?></a></li>
	<li><a href="#full_freedom"><?php print _("Why are some Linux distributions not fully free?"); ?></a></li>
	<li><a href="#mac_freedom"><?php print _("Is Mac OS also a free operating system?"); ?></a></li>
	<li><a href="#linux_illegality"><?php print _("Aren't Linux users the ones who make illegal downloads?"); ?></a></li>
	<li><a href="#linux_communism"><?php print _("Is Linux a form of communism?"); ?></a></li>
</ul>
<?php print _("Installing Linux:"); ?>
<ul>
	<li><a href="#linux_pre-installed"><?php print _("Does Linux come pre-installed on computers?"); ?></a></li>
	<li><a href="#language"><?php print _("Can I get GNU/Linux in my own language?"); ?></a></li>
	<li><a href="#linux_legality"><?php print _("Is it legal to install Linux on my computer?"); ?></a></li>
	<li><a href="#new_computer"><?php print _("Do I have to purchase a new computer to run Linux?"); ?></a></li>
</ul>
<?php print _("Using Linux:"); ?>
<ul>
	<li><a href="#ms_office"><?php print _("Will Microsoft Office run on Linux?"); ?></a></li>
	<li><a href="#dvd_mp3"><?php print _("Can I play my DVDs and MP3s under GNU/Linux?"); ?></a></li>
	<li><a href="#games"><?php print _("Can I play popular 3D games under GNU/Linux?"); ?></a></li>
</ul>
<a href="#huh"><?php print _("More questions?"); ?></a></div>


<h2><?php print _("General Questions"); ?></h2>

<div class="QA_series">
	<div class="QA">
	<h3 id="naming_conventions" class="Q"><?php print _("Are &quot;GNU/Linux&quot; and &quot;Linux&quot; any different?"); ?></h3>

	<div class="Q_sub"><?php print _("You keep referring to one and the other alternatively. What is this all about?"); ?></div>
	<div class="A"><p><?php print _("Originally, <strong>Linux</strong> refers to a core component (called the kernel) that fits within the <strong>GNU</strong> system. What users run today are, to be precise, \"<em>distributions of the GNU/Linux system</em>\"."); ?></p>
	<p><?php print _("In practice, the word \"Linux\" caught on much better (unsurprisingly), and today people refer to the whole system as simply \"Linux\". This causes a great deal of controversy."); ?></p>
	<p><?php print _("Calling the system <em>GNU/Linux</em> is much more meaningful, technically (end-users use a lot of \"GNU\" and a little of \"Linux\") but also philosophically: the strength and momentum of the <a href=\"http://www.softwareliberty.com/\">Free Software</a> movement started with and are still carried by <a href=\"http://www.gnu.org/\">the GNU project</a>."); ?></p>
	<p><?php print _("Calling the system <em>Linux</em> is more practical and appealing for computer users that often believe Windows is the only thing on earth."); ?></p>
	<p><?php print _("<a href=\"http://www.gnulinuxmatters.org/about/faq/#taxonomy\">We use both denominations</a> and hope you will not be offended by that."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="gnu" class="Q"><?php print _("And what has that software to do with a gnu?"); ?></h3>

	<div class="A"><p><?php print _("When Richard Stallman started to design GNU, the main system in use was Unix, which is proprietary. Because GNU is similar in function to (and compatible with) Unix, but is <a href=\"http://www.softwareliberty.com/\">free software</a>, he coined the term GNU which stands for <strong>GNU's Not Unix</strong>. It's a <a href=\"http://en.wikipedia.org/wiki/Recursive_acronym\">recursive acronym</a>. (if you enjoy that kind of humour check out what <a href=\"http://www.gnu.org/software/hurd/hurd.html\">GNU Hurd</a> means)."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="trademark" class="Q"><?php print _("Is Linux a registered trademark?"); ?></h3>

	<div class="A"><p><?php print _("Yes. You cannot sell any random software under the name of Linux&reg;. The trademark is held by <a href=\"http://www.linuxmark.org/\">the Linux Mark Institute</a>."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="only_linux" class="Q"><?php print _("Is GNU/Linux the only free operating system available?"); ?></h3>

	<div class="A"><p><?php print _("No. GNU/Linux is by far the most widely used free system; however a number of other systems exist."); ?></p>
	<p><?php print _("These include the UNIX derivatives <a href=\"http://freebsd.org/\">FreeBSD</a>, <a href=\"http://netbsd.org/\">NetBSD</a>, <a href=\"http://openbsd.org/\">OpenBSD</a> and <a href=\"http://opensolaris.org/\">OpenSolaris</a>, the BeOS clone <a href=\"http://haiku-os.org/\">Haiku OS</a>, the Windows NT clone <a href=\"http://reactos.sf.net/\">ReactOS</a>, the DOS clone <a href=\"http://www.freedos.org/\">FreeDOS</a>, <a href=\"http://plan9.bell-labs.com/plan9/\">Plan 9</a> from Bell Labs and <a href=\"http://www.syllable.org/\">Syllable</a>, just to name a few."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->

	<div class="QA">
	<h3 id="mac" class="Q"><?php print _("Is Mac OSX a distribution of Linux?"); ?></h3>

	<div class="A"><p><?php $p = _("No. There are a few <a href=\"http://www.softwareliberty.com/\">free software</a> components in Mac OSX, and it is technically similar to GNU/Linux systems. But overall, it is proprietary software: all the <a href=\"%s\">issues about Windows</a> apply to it as well."); printf($p, base_url('windows',1)); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->

</div><!-- end QA series -->



<h2>Understanding free software</h2>

<div class="QA_series">

	<div class="QA">
	<h3 id="open_source" class="Q"><?php print _("Are &quot;Open Source&quot; and &quot;Free Software&quot; the same thing?"); ?></h3>

	<div class="A"><p><?php print _("Yes and no."); ?></p>
	<p><?php print _("Technically, the great majority of open source programs are free software and vice-versa."); ?></p>
	<p><?php print _("In terms of philosophy, things are quite different. The term &quot;open source&quot; was coined to make &quot;free software&quot; more attractive, its supporters see open source software as a better way to make software."); ?></p>
    <p><?php print _("Supporters of the \"free software\" term value the freedom, not merely the way software is made, and thus argue that the term \"open source\" <a href=\"http://www.gnu.org/philosophy/open-source-misses-the-point.html\">misses the point</a>."); ?></p>
    <p><?php print _("Which term you employ simply depends on your vision of software."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="freedom" class="Q"><?php print _("Why are some Linux distributions sold, not given away?"); ?></h3>

	<div class="Q_sub"><?php print _("Some websites actually <em>sell</em> distributions of Linux. So, why do you write it is \"free as speech and available at no charge\"?"); ?></div>
	<div class="A"><p><?php print _("The concept of <a href=\"http://www.softwareliberty.com/\">free software</a>, refers to freedom, not price. You have the freedom to copy, study, modify, and give free software away."); ?></p>
	<p><?php print _("Most companies developing free software make money by selling <strong>services</strong> around their software, rather than the software itself. This is sometimes done by selling everything as a package: the customer buys the CD, book, and support contract at once. The software can still guarantee your freedoms."); ?></p>
	<p><?php print _("More:"); ?> <a href="<?php base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a> | <a href="http://en.wikibooks.org/wiki/FLOSS_Concept_Booklet">FLOSS concept booklet</a>.</p>

	</div>
	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->



	<div class="QA">
	<h3 id="full_freedom" class="Q"><?php print _("Why are some Linux distributions not fully free?"); ?></h3>

	<div class="Q_sub"><?php print _("Some Linux distributions are available at no charge, but include restrictive software. Why is it so?"); ?></div>
	<div class="A"><p><?php print _("There are typically three types of policies regarding the inclusion of non-free software:"); ?></p>
	<ul>
	<li><p><?php print _("Some GNU/Linux distributors allow non-free software in order to enable hardware functionality.<br/>This happens because some hardware manufacturers such as NVidia do not care about their customers' freedoms, and only release restricting firmware and drivers (some of them don't even release anything, like Broadcom). These are available at no cost (they are freeware) but under restrictive licenses. Distributions such as <a href=\"http://www.ubuntu.com/\">Ubuntu</a> thus include such components to improve hardware compatibility."); ?></p></li>
	 <li><p><?php print _("Some GNU/Linux distributors do not compromise on the freedom of software, and make sure their distribution are entirely free. Such is the case of <a href=\"http://www.gnewsense.org/\">gNewSense</a>, which is a Ubuntu derivative with all restricting components removed."); ?></p></li>
	 <li><p><?php $p = _("Some GNU/Linux distributors assemble free and restrictive software without distinction. Such distributors would not like users to think of their freedom, and rather advertise only the technical capabilities of their product. Using such distributions isn't much better than <a href=\"%s\">using Windows</a>. We value your freedom and recommend you choose carefully!"); printf($p, base_url('windows',1)); ?></p></li>
	</ul>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="mac_freedom" class="Q"><?php print _("Is Mac OS also a free operating system?"); ?></h3>

	<div class="Q_sub"><?php print _("Do all the reasons for avoiding Windows apply to Mac&nbsp;OS?"); ?></div>
	<div class="A"><p><?php $p = _("It's quite common for Mac users to believe they are exempt from <a href=\"%s\">restrictions associated with Windows</a>. Unfortunately such is not the case."); printf($p, base_url('windows',1)); ?></p>
	<p><?php print _("Mac OSX does have some low-level components which are <a href=\"http://www.softwareliberty.com/\">free software</a>; and Apple puts less energy into customer lock-in (with some notable efforts such as BootCamp).<br />However, the end-user is still fundamentally restricted &mdash; because of the proprietary license, he/she cannot use Mac OSX for all purposes, nor copy, study, modify, or redistribute it."); ?></p>
	<p><?php print _("Happily, because these freedoms matter a lot, it's possible to run popular GNU/Linux distributions (such as <a href=\"http://www.ubuntu.com/\">Ubuntu</a>) on Mac computers."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="linux_illegality" class="Q"><?php print _("Aren't Linux users the ones who make illegal downloads?"); ?></h3>

	<div class="Q_sub"><?php print _("Isn't Linux about cracking, &quot;piracy&quot; and illegal download websites?"); ?></div>
	<div class="A"><p><?php print _("No!"); ?></p>
	<p><?php print _("Wherever you read or heard this you should update your views. Linux is completely distinct from such things. Whether you want to do them, or whether you prefer <a href=\"http://www.magnatune.com/\">intelligent</a>, <a href=\"http://www.jamendo.com/\">legal downloads</a>, Linux will work just as well as Windows. Unfortunately you can't identify gangsters by the make of their cars; the same thing goes for their operating system."); ?></p>
	<p><?php print _("GNU/Linux was made by people who don't like the thought of all the world's computers running just one company's proprietary products. There is certainly nothing wrong with that!"); ?></p>
	<p><?php print _("Read more in the article:"); ?> <a href="<?php base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a>.</p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="linux_communism" class="Q"><?php print _("Is Linux a form of communism?"); ?></h3>

	<div class="Q_sub"><?php print _("\"Everything has to be free\" and \"No one owns anything\" sounds somewhat frightening. Are Linux and its <acronym title=\"GNU General Public License\">GPL</acronym> License something for anarchists or communists?"); ?></div>
	<div class="A"><p><?php
        $title = _("How to Misunderstand Free Software");
        $link = sprintf("<a href=\"%s\">%s</a>", base_url('linux/misunderstanding_free_software',1), $title);
        $p = _("Not at all. We have this explained simply in our article %s.");
        printf($p, $link); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


</div><!-- end QA series -->



<h2>Installing Linux</h2>

<div class="QA_series">

	<div class="QA">
	<h3 id="linux_pre-installed" class="Q"><?php print _("Does Linux come pre-installed on computers?"); ?></h3>

	<div class="A">
	<p><?php print _("Yes it does! We have built a website specially for that purpose, <a href=\"http://linuxpreloaded.com/\" title=\"Linux laptops\">LinuxPreloaded.com</a>, listing vendors that sell Linux desktops and laptops."); ?></p>
	<p class="note"><?php print _("Note that <a href=\"#new_computer\">buying new hardware is not necessary</a> to use GNU/Linux!"); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="language" class="Q"><?php print _("Can I get GNU/Linux in my own language?"); ?></h3>

	<div class="A"><p><?php $url = base_url('switch_to_linux/choose_a_distribution',1); $p = _("Yes. All main distributions, such as <a href=\"%s\">the ones we recommend</a>, are all available in the main languages around, and have support for many keyboard types."); printf($p, $url); ?></p>
	<p><?php print _("Unlike Windows, all languages are included on each installation CD, so there is no need for you to download (or pay for!) another whole version to merely change the language on your computer."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="linux_legality" class="Q"><?php print _("Is it legal to install Linux on my computer?"); ?></h3>

	<div class="Q_sub"><?php print _("There is a shiny Windows sticker on it! Am I allowed to erase Windows or use it together with Linux?"); ?></div>
	<div class="A"><p><?php print _("<strong>Yes.</strong> It is absolutely, completely legal (providing of course it's your computer!)."); ?></p>
	<p><?php print _("The sticker on it is purely marketing, it has no legal value. We believe it is <em>one fundamental right</em> to choose which software to run on our own hardware."); ?></p>
	<p><?php
    $title = _("Stand for a free society");
    $link = sprintf("<a href=\"%s\">%s</a>", base_url('windows/stand_for_a_free_society',1), $title);
    $p = _("In fact this right is threatened by the rise of things such as <a href=\"http://www.timj.co.uk/digiculture/drm-fallacy\">DRM and Trusted Computing</a>. Read our article \"%s\" article for more information.");
    printf($p, $link);
    ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="new_computer" class="Q"><?php print _("Do I have to purchase a new computer to run Linux?"); ?></h3>

	<div class="A"><p><?php print _("Not at all. It will run happily on your own computer."); ?></p>
    <p><?php $p = _("The only thing you might be worried about is using very recent special hardware, such as graphics cards. Otherwise, almost all Linux distributions can run on normal PCs (often called \"i386\" or \"x86\" computers), 64-bit-processor computers and Apple Mac computers (including the G5, G4, G3 series). <a href=\"%s\">Read how you can try or install Linux on your computer</a>, be it instead of or together with Windows."); printf($p, base_url('switch_to_linux/try_or_install',1)); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->

</div><!-- end QA series -->



<h2><?php print _("Using Linux"); ?></h2>

<div class="QA_series">


	<div class="QA">
	<h3 id="ms_office" class="Q"><?php print _("Will Microsoft Office run on Linux?"); ?></h3>

	<div class="A"><p><?php print _("No."); ?></p>
	<p><?php print _("It is technically possible to adapt Microsoft Office to Linux, but Microsoft isn't keen on allowing Office users to choose their operating system. There are other issues with MS Office and openness &mdash; like Microsoft's fierce opposition to supporting <a href=\"http://opendocumentfellowship.com/\">the OpenDocument format</a>."); ?></p>
	<p><a href="http://why.openoffice.org/"><img src="/images/linux/linux.faq.OpenOffice.org.png" alt="|| OpenOffice.org ||"/></a>
    <br/><a href="http://www.libreoffice.org/features/"><img src="/images/linux/linux.faq.LibreOfficelogo.png" alt="|| LibreOffice.org ||"/></a>
	<?php print _("However, a complete, Free, reliable office suite exists: <a href=\"http://www.openoffice.org/\">OpenOffice.org</a>. Or you can choose its Open Source community-driven alternative, <a href=\"http://www.libreoffice.org/\">LibreOffice</a>, which is a fork of OpenOffice.org. They will both happily use all your existing office files in MS-Word, MS-Excel, and MS-PowerPoint format, and are really free (both as in freedom and as in price). And they run on Windows as well as on Linux."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="dvd_mp3" class="Q"><?php print _("Can I play my DVDs and MP3s under GNU/Linux?"); ?></h3>

	<div class="A"><p><?php print _("The simple answer to this question would be &quot;yes&quot;, however this is only half the truth."); ?></p>
	<p><?php print _("Quite a few Linux distributions do not include MP3 playback software due to the patent situation of the MP3 format. These patent issues do not affect the user directly, so most distributions make it fairly easy to install MP3 support over the Internet after the installation, making it possible to <strong>legally play MP3 files</strong>, for non-commercial use."); ?></p>
	<p><?php print _("DVDs, on the other hand, are a more difficult situation. Most, if not all, DVDs are encrypted using a system called \"<acronym title=\"Content Scrambling System\">CSS</acronym>\". There is a widely supported free software, called <code>libdvdcss</code>, capable of decrypting DVD videos. However, circumventing the restriction on your DVDs is illegal in many parts of the world, including the USA and the European Union."); ?></p>
	<p><?php print _("There is currently no legal solution to play your DVDs on Linux where <code>libdvdcss</code> is illegal. The <a href=\"http://www.fluendo.com/\">Fluendo</a> company is developing an (non-free) application for that purpose, which is regularly announced to be released \"soon\".<br/>Non-encrypted DVDs, which include most home-made DVDs, play perfectly well with only free software."); ?></p>

		<div class="read_more">
		<?php print _("More on the web:"); ?><br/>
		- <a href="https://wiki.ubuntu.com/RestrictedFormats">Ubuntu Restricted Formats</a><br/>
		- <a href="http://www.fedoraproject.org/wiki/ForbiddenItems">Fedora Forbidden Items</a><br/>
		</div><!-- end read_more -->
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


	<div class="QA">
	<h3 id="games" class="Q"><?php print _("Can I play popular 3D games under GNU/Linux?"); ?></h3>

	<div class="A"><p><?php print _("Yes and No: Some games, for example some <a href=\"http://www.idsoftware.com/\">id Software</a> games like Quake III, Quake IV and Doom III, Unreal Tournament, Cold War, and many more have Linux versions.<br />Most popular games, alas, only work on Windows and occasionally on Mac OS. Some Windows games, such as Battlefield 2 or GTA Vice City, can be run on GNU/Linux with <a href=\"http://winehq.org/\">Wine</a> or its non-free variant <a href=\"http://transgaming.com/cedega\">Cedega</a>, which involves some unpleasant effort for the user. For a list of games known to work on Cedega, see <a href=\"http://transgaming.org/gamesdb\">their games database</a>."); ?></p>
	</div>

	<span class="back_to_top"><a href="#top" title="<?php print _("jump to top of page"); ?>"><?php print _("top"); ?></a></span>
	</div><!-- end QA -->


</div><!-- end QA series -->


	<div id="more_q">
	<h3 id="huh"><?php print _("More questions?"); ?></h3>
	<p><?php
    $p = _("If you have a question that is not covered here, there are many communities to help you. Our \"<a href=\"%s\">More</a>\" section will help you find the right place to ask.<br/>
If you can think of a frequent question that we haven't answered yet, do <a href=\"%s\">let us know</a>, or even better, <a href=\"%s\">file a new bug</a>.");
printf($p, base_url('more',1),
"https://launchpad.net/~getgnulinux/+contactuser",
"https://bugs.launchpad.net/getgnulinux"); ?></p>
	</div>


<div class="upbutton_section">
<a href="<?php base_url('linux'); ?>" class="upbutton"><span class="up"><?php print _("back up:"); ?> <span class="button_title"><?php print _("What is Linux?"); ?></span></span></a>
</div>

</div><!-- end maincontent -->

<?php load_footer(); ?>
