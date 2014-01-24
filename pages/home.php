<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
?>

<main role="main">

<!-- INTRODUCTION -->

<section class="fp-banner">
<div class="maxwidth">

    <h1><?php print _("get GNU/Linux!"); ?></h1>

    <div class="intro">
        <p><?php
        # translatorsn: This is the very first sentence every visitor is going to read. Please pay great attention to making it sound great, we only have one try! =)
        print _("GNU/Linux, or simply <em>Linux</em>, is an alternative to Microsoft Windows. It is easy to use and gives more freedom to users. Anyone can install it: Linux is free as in freedom, and often available free of charge."); ?></p>
    </div>

    <div class="list">
        <ul>
            <li>
                <p><span class="title"><a href="#what-is-gnu-linux"><?php print _("What is Linux?"); ?></a></span></p>
                <p><span class="subtitle"><?php print _("Learn more about the free operating system"); ?></span></p>
            </li>
            <li>
                <p><span class="title"><a href="#why-not-windows"><?php print _("Why not Windows"); ?></a></span></p>
                <p><span class="subtitle"><?php print _("Why we should avoid using Microsoft Windows"); ?></span></p>

            </li>
            <li>
                <p><span class="title"><a href="#switch-to-gnu-linux"><?php print _("Switch to Linux"); ?></a></span></p>
                <p><span class="subtitle"><?php print _("Where to download and how to step into Linux"); ?></span></p>
            </li>
        </ul>
    </div>

</div>
</section>

<!-- WHAT IS GNU/LINUX -->

<section class="fp-linux">
<div class="maxwidth">

    <h1 id="what-is-gnu-linux"><?php print _("What is GNU/Linux?"); ?></h1>

    <p><?php print _("When you hear the word Linux, you may think of programmers with a beard typing obscure code on a black screen. Good news! things have changed."); ?></p>


    <h2><?php print _("The picture"); ?></h2>

    <p><?php print _("Linux is an <em>operating system</em>, a large piece of software that manages a computer. It is similar to Microsoft Windows, but it is entirely free. The accurate name is <em>GNU/Linux</em> but \"Linux\" is used more often."); ?></p>

    <p><?php print _("Linux is not one company's product, but a number of companies and groups of people contribute to it. In fact, the <em>GNU/Linux system</em> is a core component, which is branched off into many different products. They are called <strong>distributions</strong>."); ?></p>

    <p><?php print _("Distributions change the appearance and function of Linux completely. They range from large, fully supported complete systems (endorsed by companies) to lightweight ones that fit on a USB memory stick or run on old computers (often developed by volunteers)."); ?><br/>
    <?php
# translatorsn: use an official localised Ubuntu homepage if possible
print _("A prominent, complete and friendly distribution to step into GNU/Linux is <a href=\"http://www.ubuntu.com\">Ubuntu</a>."); ?></p>
</div>

<?php
# i18n: This is the description of the "ubuntu1.png" screenshot.
$ubuntu1_text = _("Firefox web browser");
# i18n: This is the description of the "ubuntu2.png" screenshot.
$ubuntu2_text = _("File manager and image browsing application are open, on standard desktop.");
# i18n: This is the description of the "ubuntu3.png" screenshot.
$ubuntu3_text = _("Thunderbird e-mail and calendar application.");

# i18n: This is the description of the "fedora1.png" screenshot.
$fedora1_text = _("GIMP image editing application, cropping a photo.");
# i18n: This is the description of the "fedora2.png" screenshot.
$fedora2_text = _("LibreOffice Writer open, editing a standard document.");
# i18n: This is the description of the "fedora3.png" screenshot.
$fedora3_text = _("Accessing applications in the <a href=\"http://gnome3.org/\">GNOME 3</a> desktop environment.");

# i18n: This is the description of the "trisquel1.png" screenshot.
$trisquel1_text = _("Update manager open.");
# i18n: This is the description of the "trisquel2.png" screenshot.
$trisquel2_text = _("LibreOffice Calc open, showing an example spreadsheet.");
# i18n: This is the description of the "trisquel3.png" screenshot.
$trisquel3_text = _("Accessing applications.");
?>

<!-- flexslider -->
<div class="slider-bg">
    <div class="maxwidth">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="/images/screenshots/fedora1.png" />
                    <p class="flex-caption">Fedora: <?php print $fedora1_text; ?></p>
                </li>
                <li>
                    <img src="/images/screenshots/fedora2.png" />
                    <p class="flex-caption">Fedora: <?php print $fedora2_text; ?></p>
                </li>
                <li>
                    <img src="/images/screenshots/fedora3.png" />
                    <p class="flex-caption">Fedora: <?php print $fedora3_text; ?></p>
                </li>

                <li>
                    <img src="/images/screenshots/ubuntu1.png" />
                    <p class="flex-caption">Ubuntu: <?php print $ubuntu1_text; ?></p>
                </li>
                <li>
                    <img src="/images/screenshots/ubuntu2.png" />
                    <p class="flex-caption">Ubuntu: <?php print $ubuntu2_text; ?></p>
                </li>
                <li>
                    <img src="/images/screenshots/ubuntu3.png" />
                    <p class="flex-caption">Ubuntu: <?php print $ubuntu3_text; ?></p>
                </li>

                <li>
                    <img src="/images/screenshots/trisquel1.png" />
                    <p class="flex-caption">Trisquel: <?php print $trisquel1_text; ?></p>
                </li>
                <li>
                    <img src="/images/screenshots/trisquel2.png" />
                    <p class="flex-caption">Trisquel: <?php print $trisquel2_text; ?></p>
                </li>
                <li>
                    <img src="/images/screenshots/trisquel3.png" />
                    <p class="flex-caption">Trisquel: <?php print $trisquel3_text; ?></p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="maxwidth">

    <h2><?php print _("Using Linux"); ?></h2>

    <p><?php print _("GNU/Linux is no harder to use than Windows, and has many more capabilities. It just takes a dozen minutes to get familiar with a distribution like <a href=\"http://www.ubuntu.com/\" title=\"Ubuntu, the easiest and friendliest GNU/Linux distribution around\">Ubuntu</a> or <a href=\"http://fedoraproject.org/\" title=\"Fedora, a friendly and more advanced GNU/Linux distribution\">Fedora</a>, which come in with many programs installed."); ?></p>

    <p><?php print _("If you need commercial-quality software to work with business documents, Internet/networking, or multimedia and graphics, it's there right out of the box. Want more than that? Linux can do &ndash; there are many hundreds of free, high quality applications you can find, install and uninstall neatly and easily."); ?></p>

    <p><?php $p = _("You shouldn't assume however, that Linux is a clone of Windows. To know what to expect when stepping into it, we suggest you read our <a href=\"%s\">Making the switch</a> page."); printf ($p, $this->base_url('switch_to_linux',1)) ?></p>


    <h2><?php print _("The larger picture"); ?></h2>

    <p><?php
# translatorsn: use the definition of "free software" on GNU.org in place of softwareliberty.com
print _("When you get a distribution of GNU/Linux, <strong>you also get the freedom to study, copy, change, and redistribute it</strong> &ndash;&nbsp;that's what makes it truly <a href=\"http://www.softwareliberty.com/\" title=\"what is freedom in software?\">free software</a>."); ?></p>

    <p><?php print _("Many companies develop their own operating system based on the core <a href=\"http://www.gnu.org\" title=\"the GNU project: at the source of all Linux distributions\">GNU software</a>: products they do not have exclusive rights on. How does the wheel turn?"); ?></p>

    <ul>
        <li><?php print _("Most companies make a profit by <em>selling support and services</em> around their GNU/Linux distribution. Corporate customers buy guaranteed security updates and assistance. Other services often include training and on-demand improvements to software."); ?></li>
        <li><?php print _("Some companies, such as HP or IBM, contribute to Linux because they pre-install it on servers they sell."); ?></li>
        <li><?php print _("An extremely wide community participates in the development and improvement of software, decreasing costs and improving efficiency."); ?></li>
    </ul>

    <p><?php print _("In the end, individual end-users often get the software at zero cost, while corporate customers are often happy to pay for more support."); ?></p>

    <div id="read_more">
        <div class="read_more_title"><?php print _("More in this section:"); ?></div>
        <ul>
            <li><a href="<?php $this->base_url('linux/misunderstanding_free_software'); ?>"><?php print _("How to Misunderstand Free Software"); ?></a></li>
            <li><a href="<?php $this->base_url('linux/screenshots'); ?>"><?php print _("What Linux looks like"); ?></a></li>
            <li><a href="<?php $this->base_url('linux/linux_faq'); ?>"><?php print _("Linux FAQ - common questions about GNU/Linux"); ?></a></li>
        </ul>
    </div><!-- read_more -->

</div>
</section>

<!-- WHY NOT WINDOWS -->

<section class="fp-windows">
<div class="maxwidth">

    <h1 id="why-not-windows"><?php print _("Why not Windows"); ?></h1>

    <p><?php
# translators: This is the catcher-phrase for the Windows page. Exact translation is not required, the goal is to attract attention and set the tone of the page.
print _("Windows and Office work fine &mdash; Why worry about it?"); ?></p>


    <div class="paragraph">
        <h2><a href="<?php $this->base_url('windows/restrictions'); ?>"><?php print _("Restrictions"); ?></a></h2>

        <p><?php
# translators: You may add emphasis ('em' tags) around the word 'licensed' if you wish
print _("A legal copy of Windows is expensive, but what do you get? Windows and Office are licensed, not sold."); ?></p>

        <p><?php print _("By using these products, we have to agree to <strong>a number of harsh restrictions</strong>. For most Windows licenses, you can't keep the software when you change the hardware. You sometimes can't even give your software away. Who can run the software? On which computer? What can you do with it? The list of restrictions is long and some items are outrageous."); ?></p>

        <p><a href="<?php $this->base_url('windows/restrictions'); ?>" title="Restrictions in a proprietary software license.">Read more…</a></p>
    </div><!-- paragraph -->


    <div class="paragraph">
        <h2><a href="<?php $this->base_url('windows/what_about_choice'); ?>"><?php print _("What about choice?"); ?></a></h2>

        <p><?php print _("Software should come without locks in it."); ?></p>

        <p><?php print _("Why are Office documents difficult to export? Why are the formats continually changing? Why can you not even uninstall some programs? It might be that if you look for choice, Microsoft products aren't for you."); ?></p>

        <p><a href="<?php $this->base_url('windows/what_about_choice'); ?>" title="How Microsoft lock customers in.">Read more…</a></p>
    </div><!-- paragraph -->

    <div class="paragraph">
        <h2><a href="<?php $this->base_url('windows/what_about_source_code'); ?>"><?php print _("No source code"); ?></a></h2>

        <p><?php print _("The source codes of Windows and Office are hidden, so, <strong>no one is allowed to understand</strong> how these programs work."); ?></p>

        <p><?php print _("If you can't get a right to inspect source code (the human-readable inner workings of a program), you can't have someone correct flaws or evaluate how your privacy is protected for you."); ?></p>

        <p><?php print _("And guess what? On software that comes with source code, viruses and spyware aren't effective, and security isn't bought on extra. The antivirus software industry, in which Microsoft is now a significant player, prefers you to use Windows."); ?></p>

        <p><a href="<?php $this->base_url('windows/what_about_source_code'); ?>" title="No source code means no trust and no security.">Read more…</a></p>
    </div><!-- paragraph -->


    <div class="paragraph">
        <h2><a href="<?php $this->base_url('windows/stand_for_a_free_society'); ?>"><?php print _("Stand for a free society"); ?></a></h2>

        <p><?php
# translators: In your language, you might not need to make the distinction between price and freedom. Please do however express that price does not matter, in this sentence.
print _("A free society requires free software. Think of &quot;free&quot; as in freedom, not price: the freedoms to inspect, learn from, modify the software you use."); ?></p>

        <p><?php print _("Computers are used to share ideas, culture and information. Without these freedoms over software, we risk losing control over what we share."); ?></p>

        <p><?php print _("This is happening today. From plain annoying technologies such as Digital Restrictions Management (<strong>DRM</strong>) to downright frightening ones like <strong>Trusted Computing</strong>, everyone's ability to participate in culture is threatened."); ?></p>

        <p><?php print _("If you have to give up your freedoms to use software, maybe you should not be happy with it."); ?></p>

        <p><a href="<?php $this->base_url('windows/stand_for_a_free_society'); ?>" title="How software affects freedom in society.">Read more…</a></p>
    </div><!-- paragraph -->


    <div class="conclusion post-it">
        <p><?php
# translators: This is the conclusion of the article.
$p = _("Many people find that Windows, an otherwise decent piece of software, <strong>withdraws so many rights</strong> from them, that it is not worth them using it. Mac&nbsp;OS is <a href=\"%s#mac_freedom\">not much better</a>, either."); printf($p, $this->base_url('linux/linux_faq',1)); ?></p>

        <p><?php $p = _("If you find <a href=\"http://www.softwareliberty.com/\" title=\"what is freedom in software?\">free software</a> attractive, you might want to <a href=\"%s\" title=\"make the switch to Linux today!\">give Linux a try</a>."); printf($p, $this->base_url('switch_to_linux',1)); ?></p>
    </div>

</div>
</section>

<!-- SWITCH TO GNU/LINUX -->

<section class="fp-switch">
<div class="maxwidth">

    <h1 id="switch-to-gnu-linux"><?php print _("Switch to Linux"); ?></h1>

    <ul id="contentlist">
        <li>
            <a class="odd" href="<?php $this->base_url('switch_to_linux/from_windows_to_linux'); ?>">
            <img width="100" height="56" alt="Windows, Linux" src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.png"/>
            <span class="header_2"><?php print _("From Windows to Linux"); ?></span>
            <span><?php
# translatorsn: please note the "affirmative" tone with the '.' at end of sentence.
print _("Meet GNU/Linux in everyday use."); ?></span>
            </a>
        </li>
        <li>
            <a class="even" href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>">
            <img width="100" height="56" alt="Distributions" src="/images/switch_to_linux/switch_to_linux.choose_a_distribution.png"/>
            <span class="header_2"><?php print _("Choose a distribution"); ?></span>
            <span><?php print _("Our selection for an easy choice."); ?></span>
            </a>
        </li>
        <li>
            <a class="odd" href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>">
            <img width="100" height="56" alt="Install" src="/images/switch_to_linux/switch_to_linux.try_or_install.png"/>
            <span class="header_2"><?php print _("Try or install"); ?></span>
            <span><?php print _("Install it! (it's easier than you think)"); ?></span>
            </a>
        </li>
    </ul><!-- contentlist -->

</div>
</section>

</main>

<?php $this->load_footer(); ?>
