<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
$this->load_top_bar();

$footnote1 = '<a class="footnote" id="footnote1" href="#footnote_bottom1">1</a>';
$footnote2 = '<a class="footnote" id="footnote2" href="#footnote_bottom2">2</a>';

?>

<div id="maincontent" class="mfs">



<h1><?php print _("How to Misunderstand Free Software"); ?></h1>

<p><?php
# i18n: use the definition of "free software" on GNU.org in place of softwareliberty.com
print _("Five misconceptions about <a href=\"http://www.softwareliberty.com/\">free software</a>, corrected."); ?></p>



<h2 id="programmers_paid"><?php print _("1. The software industry can't keep going if programmers don't get paid."); ?></h2>
<img width="125" height="104" alt="<?php
# i18n: image alt description
print _("no money"); ?>" src="/images/linux/linux.misunderstanding_free_software.mfs1.png"/>
<p><?php print _("Let's begin with one simple fact: free software programmers <em>do</em> like to get paid, and all need to buy lunch at some time."); ?></p>
<p><?php
# i18n: Here, the %s placeholder simply puts a link to a footnote in this page
$p = _("When we mention free software, we refer to <strong>liberty not price</strong>. You may actually pay to get free software (or \"open source\" software %s), which you can then study, change and copy at will."); printf($p, $footnote1); ?></p>

<p><?php print _("How does it work? You can think about it the following way: software is just code, code is only math. Once you view software as <strong>useful math</strong>, an elaborate language, not like ordinary property, there is no reason to restrict others' use of it."); ?></p>
<p><?php print _("Just like math (where nobody would claim property on an equation), software requires advanced knowledge to be adapted, improved, applied correctly. This is where programmers generally generate an income: many customers, especially companies, are willing to pay for regular security updates and improvements on software."); ?></p>
<p><?php print _("Free software companies benefit from a very decentralised development system with a large number of voluntary contributors. The revenues inside the free software industry might be smaller than in the proprietary counterpoint, but are by no means negligible. In the end, individual users generally end up using free software at no cost."); ?></p>
<p><?php print _("Free software is not about killing incentives for programmers. It's about seeing code as knowledge which should not be hidden from the user. It works with a different business model, in which many companies already do well."); ?></p>


<h2 id="innovation_killed"><?php print _("2. Innovation is killed in free software."); ?></h2>
<img  width="125" height="104" alt="<?php
# i18n: image alt description
print _("no innovation"); ?>" src="/images/linux/linux.misunderstanding_free_software.mfs2.png"/>
<p><?php print _("The common perception is that if everyone can copy ideas, innovation will be stifled."); ?></p>
<p><?php print _("In fact, freedom is often <strong>the key to innovative and successful software</strong>."); ?></p>
<ul>
<li><?php print _("Anyone is allowed and encouraged to work upon it;"); ?></li>
<li><?php print _("Many people are willing to participate;"); ?></li>
<li><?php print _("There is no need to re-invent everything, ideas can be improved upon directly."); ?></li>
</ul>
<div id="applist">
<p><?php print _("Non-proprietary software stands out in many areas: consider, to name just a few:"); ?></p>
<ul>
<li><?php print _("Applications: <a href=\"http://www.getfirefox.com/\">Firefox</a> (web browser), <a href=\"http://www.inkscape.org/\">Inkscape</a> (vector drawing)."); ?></li>
<li><?php print _("Complete systems: <a href=\"http://en.wikipedia.org/wiki/Apache_HTTP_Server\">Apache</a> (web server), <a href=\"http://en.wikipedia.org/wiki/OpenBSD\">OpenBSD</a> (<acronym title=\"Operating System\">OS</acronym>), and of course, GNU/Linux."); ?></li>
<li><?php
# i18n: use URL to localized Wikipedia article for ODF, instead of opendocumentfellowship
print _("Formats and protocols: <a href=\"http://en.wikipedia.org/wiki/HTML\">HTML</a> (web pages), <a href=\"http://en.wikipedia.org/wiki/BitTorrent_(protocol)\">BitTorrent</a> (file sharing), <a href=\"http://opendocumentfellowship.com/\">ODF</a> (office documents)."); ?></li>
<li><?php print _("Server applications: <a href=\"http://drupal.org/\">Drupal</a> (Content Management System), <a href=\"http://www.wordpress.org/\">Wordpress</a> (blog)."); ?></li>
</ul>
</div>


<h2 id="just_work"><?php print _("3. Software Should Just Work (who cares about source code?)"); ?></h2>
<img  width="125" height="104" alt="<?php
# i18n: image alt description
print _("no code?"); ?>" src="/images/linux/linux.misunderstanding_free_software.mfs3.png"/>
<p><?php print _("Anyone should care about whether their software is free."); ?></p>
<p><?php print _("Imagine purchasing a car whose hood you are forbidden to open. It does not matter whether you know how a car works &ndash; the point is that nobody will be able to check the engine. How can you trust your car, if no one is allowed to make sure that it's reliable, that it does not leak, that it's not harmful to the society and environment?"); ?></p>
<p><?php print _("The idea is the same with software &ndash; except that code does <strong>much more</strong> than move cars. Software runs our computers, phones, TVs, media players and more, carrying information and our culture."); ?></p>
<p><?php print _("Free software is as important as free speech, as a free market. If software is free, users have control and liberty over it."); ?></p>
<p><?php
# i18n: The %s placeholder will automatically point to the 'try and install' page
$p = _("The good news are: <em>free software also Just Works.</em> And in fact, it often Just Works Better. <a href=\"%s\">Pop in a GNU/Linux liveCD</a> in your computer at start-up, to try a full-featured, well-organised system, without installation, so you can judge by yourself."); printf($p, $this->base_url('switch_to_linux/try_or_install',1)); ?></p>


<h2 id="patent_protection"><?php print _("4. Free software doesn't respect authors' copyrighted and patented software."); ?></h2>
<img  width="125" height="104" alt="<?php
# i18n: image alt description
print _("piracy"); ?>" src="/images/linux/linux.misunderstanding_free_software.mfs4.png"/>
<p><?php print _("To answer this correctly, we must first make a clear distinction between copyright and patents. Copyright is a right granted to the author over his/her creation (for example, the text of a book, or the source code of a program). A patent, on the other hand, is a purchased, registered exclusive control over a process, the application of an idea."); ?></p>

<p><?php
# i18n: If you can, please use a non-official translation of the GPL, as found at http://www.gnu.org/licenses/translations.html
print _("<strong>Copyright is very important in free software.</strong> It is the very mechanism, central to the <a href=\"http://www.gnu.org/copyleft/gpl.html\">GNU General Public License</a>, which ensures that free software remains free, and that authors are credited for their work. Programs are copyrighted, whether they are free or proprietary."); ?></p>
<p><?php print _("Any proprietary software author can easily check that his copyright is not violated in a free software application, since its source code is readily available."); ?></p>

<p><?php print _("Patents in software, on the other hand, are a very controversial concept. To put it shortly: there is <strong>no such thing as a \"patented software\"</strong>. By registering for a patent, however, someone can claim ownership over a <em>process</em>. The patent then applies to all software that use this process, whether proprietary or free."); ?></p>
<p><?php print _("Software patents:"); ?></p>
<ul>
<li><?php print _("Are expensive and are granted only several years after application;"); ?></li>
<li><?php print _("Are limited geographically (a patent granted in the US is worthless in Europe);"); ?></li>
<li><?php print _("Have long life-times (often 20 years) in a quickly-moving industry;"); ?></li>
<li><?php print _("Often apply <a href=\"http://eupat.ffii.org/patents/samples/\">entirely trivial processes</a>."); ?></li>
</ul>
<p><?php print _("As such, they are seldom used to benefit innovators (and in fact, rarely used by the innovators themselves)."); ?></p>

<p><?php print _("It's safe to say that <strong>any medium-size piece of software violates patents</strong>, in several countries, whether it's free or not."); ?></p>
<p><?php print _("Depending on the holding company's ability to cover very large legal costs, or to retaliate with other patent threats, royalties and restrictions can be applied over these patents."); ?></p>
<div id="morebox">
<?php print _("Read and view more:"); ?>
<ul>
    <li><?php
# i18n: Unless you know of a good localized resource, please leave the URL as such.
print _("<a href=\"http://ffii.org/Frequently_Asked_Questions_about_software_patents\" hreflang=\"en\">Frequently Asked Questions on software patents, by the <acronym title=\"Foundation for a Free Information Infrastructure\">FFII</acronym>"); ?></a></li>
    <li><?php
# i18n: Unless you know of a good localized resource, please leave the URL as such.
print _("<a href=\"http://www.redhat.com/magazine/007may05/features/ip/\" hreflang=\"en\">Short and clear video on \"intellectual property\" by Red Hat"); ?></a></li>
</ul>
</div><!-- end of morebox -->


<h2 id="competitive_advantage"><?php print _("5. Free software is like communism."); ?></h2>
<img  width="125" height="104" alt="<?php
# i18n: image alt description
print _("communism"); ?>" src="/images/linux/linux.misunderstanding_free_software.mfs5.png"/>
<p><?php
# i18n: Here, the %s placeholder simply puts a link to a footnote in this page
$p = _("Supporters of this idea argue that there can be no private ownership with free (or \"open source\" %s) software. Let's answer this with an example."); printf($p, $footnote2);?></p>
<p><?php print _("Let's imagine that you use one application that is free software, at home and within your company. You find a great way to improve it, so now with your modified version, your computer works better and your factories run twice as fast!"); ?></p>
<p><?php print _("This modified version is <strong>your own version</strong>. You are not required to tell anyone about it, nor must you share any of the profits you made using it. You are simply exerting your freedom to use and modify free software."); ?></p>
<p><?php print _("What the free software license requires is that <strong>if you redistribute</strong> this software, then you must keep it free. Namely, if you sell CDs with your software on them, or start letting people outside your home or company use it, then you must:"); ?></p>
<ul>
<li><?php print _("Either give everyone the same rights you had when you obtained the original software, that is, the freedom to inspect, modify and redistribute your modified version;"); ?></li>
<li><?php print _("Or, make the original software and your secret addition to it clearly separate (that is, your addition should contain none of the original work)."); ?></li>
</ul>
<p><?php
# i18n: The %s placeholder here will automatically point to the page "Windows Restrictions, further details"
$p = _("So in fact, you have more \"ownership\" over free software than over proprietary software &ndash;where the programmer decides everything you can <a href=\"%s\">and can't do</a> with the software."); printf($p, $this->base_url('windows/restrictions/further_details',1)); ?></p>
<p><?php print _("<em>Free software has nothing to do with a political system.</em> You can run free software on top of proprietary software, just as well as the opposite. The free software license is simply a legal, ethical contract between the programmer and the end-user."); ?></p>


<div id="collapsed_box" class="post-it">
<p><?php print _("Read more:"); ?></p>
<h2 class="toggleanswer" id="security"><?php print _("Free / \"open-source\" software can't be secure."); ?></h2>

<div class="mfs_answer">
<p><?php print _("The argument generally goes that since the source code of free software is available, it is less likely to be secure."); ?></p>
<p><?php print _("Short answer: The majority of servers run free software. They are the major networked computers holding sensitive or confidential information such as your bank details or trade secrets."); ?></p>
<p><?php print _("A more precise answer is that availability of source code is a warrant of security, not a weakness. The freedom of the software ensures it can be inspected, tested and improved by a very wide community. A good lock is secure because the technology used to design it is open, though only the key holder can open it. The same goes for software."); ?></p>
<p><?php $p = _("Need examples? Have a look at the <a href=\"http://www.getfirefox.com/\">Firefox browser</a>, the <a href=\"http://en.wikipedia.org/wiki/Apache_HTTP_Server\">Apache HTTP Server</a>, the <a href=\"http://en.wikipedia.org/wiki/Pretty_Good_Privacy\">OpenPGP</a> encryption system, or the <a href=\"http://en.wikipedia.org/wiki/OpenBSD\">OpenBSD</a> operating system. And <a href=\"%s#security\">there are no spyware or viruses under GNU/Linux</a>."); printf($p, $this->base_url('switch_to_linux/from_windows_to_linux',1)); ?></p>
</div>

<h2 class="toggleanswer" id="on_my_own"><?php
#i18n: this can be translated loosely, ex "Free software isolates me" or else.
print _("I'm on my own with free software."); ?></h2>

<div class="mfs_answer">
<p><?php print _("Not at all."); ?></p>
<ul>
<li><?php print _("If you are looking for good documentation and support forums to assist you, there is plenty available for free (\"open source\") software."); ?><br/>
<?php
# i18n: use your best knowledge of the community to propose localized links ;-)
print _("Each GNU/Linux distribution has its own community (for example, <a href=\"http://www.ubuntu.com/support/free\">Ubuntu support</a> or <a href=\"http://fedora.redhat.com/docs/\">Fedora docs</a>), but there are also general free software help communities, like <a href=\"http://www.linuxquestions.org/\">LinuxQuestions.org</a>."); ?></li>
<li><?php print _("If you need someone you can reach on the phone anytime to assist you, the companies behind most distributions provide commercial support: see the <a href=\"http://www.ubuntu.com/support/paid\">Ubuntu Commercial Support</a> or <a href=\"http://www.redhat.com/rhel/\">Red Hat Enterprise Linux</a> pages for example."); ?></li>
</ul>
</div>

<h2 class="toggleanswer" id="further_reading"><?php print _("Further reading on the web"); ?></h2>

<div class="mfs_answer">
<ul>
<li><h3><a href="http://www.gnu.org">The GNU project</a></h3>
<p><?php print _("This is where free software all started. You will find a wealth of information about the free software philosophy, the history of the project, and the stands taken by the <a href=\"http://www.fsf.org/\">Free Software Foundation</a> (the organisation behind GNU)."); ?></p></li>

<li><h3><a href="http://en.wikibooks.org/wiki/FLOSS_Concept_Booklet">The FLOSS concept booklet</a></h3>
<p><?php print _("The concept of Free&nbsp;/&nbsp;Libre&nbsp;/&nbsp;Open Source Software presented in a highly readable, friendly way. A must-read."); ?></p></li>

<li><h3><a href="http://opendocumentfellowship.com/">The OpenDocument Fellowship</a></h3>
<p><?php print _("A simple and clear website about the free format OpenDocument, showing the importance of freedom in formats (not just in applications)."); ?></p></li>

<li><h3><a href="http://blog.jimmywales.com/index.php/archives/2004/10/21/free-knowledge-requires-free-software-and-free-file-formats/">Free Software and Free Knowledge</a></h3>
<p><?php print _("An engaged article by co-founder of <a href=\"http://www.wikipedia.org/\">Wikipedia</a> Jimmy Wales, which shows the connections between freedom in software and free knowledge."); ?></p></li>
</ul>

</div>



</div><!-- end collapsed_box -->


</div><!-- end maincontent -->

<div class="footnotes_bottom">
<a class="footnote" id="footnote_bottom1" href="#footnote1">1</a>,
<a class="footnote" id="footnote_bottom2" href="#footnote2">2</a>
<?php
#i18n: This is the content of the footnote, at the bottom of the page
$p = _("What we call \"Free Software\" here is also often called \"Open Source Software\". In practice the requirements are identical, although because the term \"open\" doesn't call to mind freedom, it <a href=\"http://www.gnu.org/philosophy/open-source-misses-the-point.html\">misses the point</a>. Read our FAQ entry: <a href=\"%s#open_source\">Are \"Open Source\" and \"Free Software\" the same thing?</a>.");
printf($p, $this->base_url('linux/linux_faq',1)); ?></div>

<div class="upbutton_section">
<a href="<?php $this->base_url('linux'); ?>" class="button upbutton"><span class="up"><?php print _("back up:"); ?> <span class="button_title"><?php print _("What is Linux?"); ?></span></span></a>
</div>

<?php $this->load_footer(); ?>
