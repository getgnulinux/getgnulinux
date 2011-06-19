<?php $this->load_header(); ?>

<div id="maincontent">

<h1><?php print _("What is GNU/Linux?"); ?></h1>

<p><?php print _("When you hear the word Linux, you may think of programmers with a beard typing obscure code on a black screen. Good news! things have changed."); ?></p>


<h2><?php print _("The picture"); ?></h2>

<p>
<a href="<?php $this->base_url('linux/screenshots'); ?>" title="<?php print _("What does GNU/Linux look like? Selected screenshots"); ?>">
<img src="/images/screenshots/h150px/fedora1.png" width="200" height="150" alt="<?php print _("A view of a Fedora Linux desktop"); ?>"/></a>
<?php print _("Linux is an <em>operating system</em>, a large piece of software that manages a computer. It is similar to Microsoft Windows, but it is entirely free. The accurate name is <em>GNU/Linux</em> but \"Linux\" is used more often."); ?></p>

<p><?php print _("Linux is not one company's product, but a number of companies and groups of people  contribute to it. In fact, the <em>GNU/Linux system</em> is a core component, which is branched off into many different products. They are called <strong>distributions</strong>."); ?></p>

<p><?php print _("Distributions change the appearance and function of Linux completely. They range from large, fully supported complete systems (endorsed by companies) to lightweight ones that fit on a USB memory stick or run on old computers (often developed by volunteers)."); ?><br/>
<?php print _("A prominent, complete and friendly distribution to step into GNU/Linux is <a href=\"http://www.ubuntu.com\">Ubuntu</a>."); ?></p>

<h2><?php print _("Using Linux"); ?></h2>

<p><a href="<?php $this->base_url('linux/screenshots'); ?>" title="<?php print _("What does GNU/Linux look like? Selected screenshots"); ?>">
<img src="/images/screenshots/h150px/ubuntu1.png" width="200" height="150" alt="<?php print _("A view of a Ubuntu Linux desktop"); ?>"/></a>
<?php print _("GNU/Linux is no harder to use than Windows, and has many more capabilities. It just takes a dozen minutes to get familiar with a distribution like <a href=\"http://www.ubuntu.com/\" title=\"Ubuntu, the easiest and friendliest GNU/Linux distribution around\">Ubuntu</a> or <a href=\"http://fedoraproject.org/\" title=\"Fedora, a friendly and more advanced GNU/Linux distribution\">Fedora</a>, which come in with many programs installed."); ?></p>

<p><?php print _("If you need commercial-quality software to work with business documents, Internet/networking, or multimedia and graphics, it's there right out of the box. Want more than that? Linux can do &ndash; there are many hundreds of free, high quality applications you can find, install and uninstall neatly and easily."); ?></p>

<p><?php $p = _("You shouldn't assume however, that Linux is a clone of Windows. To know what to expect when stepping into it, we suggest you read our <a href=\"%s\">Making the switch</a> page."); printf ($p, $this->base_url('switch_to_linux',1)) ?></p>


<h2><?php print _("The larger picture"); ?></h2>

<p><?php print _("When you get a distribution of GNU/Linux, <strong>you also get the freedom to study, copy, change, and redistribute it</strong> &ndash;&nbsp;that's what makes it truly <a href=\"http://www.softwareliberty.com/\" title=\"what is freedom in software?\">free software</a>."); ?></p>

<p><?php print _("Many companies develop their own operating system based on the core <a href=\"http://www.gnu.org\" title=\"the GNU project: at the source of all Linux distributions\">GNU software</a>: products they do not have exclusive rights on. How does the wheel turn?"); ?></p>

<ul>
    <li><?php print _("Most companies make a profit by <em>selling support and services</em> around their GNU/Linux distribution. Corporate customers buy guaranteed security updates and assistance. Other services often include training and on-demand improvements to software."); ?></li>
    <li><?php print _("Some companies, such as HP or IBM, contribute to Linux because they pre-install it on servers they sell."); ?></li>
    <li><?php print _("An extremely wide community participates in the development and improvement of software, decreasing costs and improving efficiency."); ?></li>
</ul>

<p><?php print _("In the end, individual end-users often get the software at zero cost, while corporate customers are often happy to pay for more support."); ?></p>

<div id="switcher">
<a href="<?php $this->base_url('windows'); ?>" class="nextbutton"><span class="next"><?php print _("next:"); ?> <span class="button_title"><?php print _("Why not Windows"); ?></span></span></a>
</div><!-- end of switcher -->

<div id="read_more">


<div class="read_more_title"><?php print _("More in this section:"); ?></div>
<ul>
<li><a href="<?php $this->base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a></li>
<li><a href="<?php $this->base_url('linux/screenshots'); ?>"><?php print _("What Linux looks like"); ?></a></li>
<li><a href="<?php $this->base_url('linux/linux_faq'); ?>"><?php print _("Linux FAQ - common questions about GNU/Linux"); ?></a></li>
</ul>
</div><!-- end read_more -->

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
