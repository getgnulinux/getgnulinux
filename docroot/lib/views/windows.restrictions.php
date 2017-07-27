<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<nav class="chapters">
  <?php $this->list_chapter_sections('windows'); ?>
</nav>

<main>
  <div class="container">
    <article>
      <header>
        <h1><?php print _("Restrictions"); ?></h1>
        <div class="page-intro">
          <p><?php print _("A common mistake is for Windows and Office users to think that they fully own their software. In fact, there are a number of <strong>legal bindings</strong> applied to it."); ?></p>
          <p><?php print _("Haven't read your license fully? We did that job for you."); ?></p>
        </div>
      </header>

      <section>
        <h2 id="the_small_print"><?php print _("The small print in the contract"); ?></h2>
        <ul>
          <li>
            <p class="highlight"><?php print _("Windows and Office are licensed, not sold."); ?></p>
            <p><?php print _("No one can buy Windows or Microsoft Office: instead users <strong>purchase a permission to use</strong> them. The license describes the terms of this permission. It is the restrictive legal text you have to click \"OK\" to upon install."); ?></p>
          </li>
          <li>
            <p class="highlight"><?php print _("You must abandon many rights to use the software."); ?></p>
            <p><?php print _("There are a number of restrictions that you must accept by law."); ?>
            <?php $p = _("Restrictions on who can use the software, what kind of revenue you may earn with it, on how you choose to install it, restrictions on your privacy, even on whether you can give it away: the list is long. <a href=\"%s\" title=\"a few more things about Microsoft licenses\">Reading the license and enumerating your remaining rights</a> is itself a difficult task.");
            printf($p, $this->base_url('windows/restrictions/further_details',1)); ?></p>
          </li>
          <li>
            <p class="highlight"><?php
			# translators: Don't bother with the 'abbr' code. You can tranlsate as 'OEM [pre-installed]'
			print _("An <abbr title=\"Original Equipment Manufacturer (simply the hardware seller)\">OEM</abbr>-distributed software cannot be transferred to another computer."); ?></p>

            <p><?php
			# translators: Don't bother with the 'shrink-wrap' expression. You can skip that bit if you wish.
			print _("If you bought your computer with Windows or Office pre-installed (the so-called OEM licenses, or the \"shrink wrap\" Windows discs), <strong>if you change computers you must buy software again.</strong>"); ?>
            <?php print _("The license is linked to one computer, and expires when the computer dies. It is then illegal to transfer the software on another computer."); ?></p>
          </li>
        </ul>

        <br>

        <div class="quote">
          <p><?php print _("If you go to most of the free software sites you can click down a couple of levels and find the [GNU] <abbr title=\"General Public License, the main free software license\">GPL</abbr>, the X license, the Apache license, whichever terms and conditions you have to accept in order to use that software."); ?></p>
          <p><?php print _("Now with a proprietary software company, the license is buried so you can't read it until after you have paid for the product, then they're asking you to <strong>turn off part of your brain</strong>, they're asking you to turn off part of your ability to work with other people and to do business, when you use their software."); ?></p>
          <span class="source">Don Marti, <a href="https://web.archive.org/web/20080217042507/http://www.go-opensource.org:80/go_open/episode_2/big_guns/" hreflang="en" title="<?php print _("Don Marti interview"); ?>" rel="external"><?php print _("2005 interview"); ?></a></span>
        </div>
      </section>

      <section>
        <h2 id="the_meaning_behind"><?php print _("The meaning behind"); ?></h2>

        <p><?php print _("Companies like Microsoft like to assimilate their software to physical products, when mentioning copyright infringement for example. Yet, proprietary software is very different because of the restrictive license -such restrictions would be unthinkable on a car or bicycle, for example."); ?></p>
        <p><?php print _("Restrictions on the use of Office and Windows are so harsh, that many violations occur everyday around us. People are tempted to buy only one version of Microsoft Office and install it on two computers. Others keep their version of Windows when they throw their PC away. Other people give away their second-hand Windows software when they stop using it."); ?></p>
        <p><?php
        # translators: use the definition of "free software" on GNU.org in place of softwareliberty.com ; also, if you can, use a translation of the GPL as found on https://www.gnu.org/licenses/translations.html
        print _("<strong>You have an alternative to breaking this law,</strong> or feeling very restrained when you abide to it. GNU/Linux is <a href=\"https://www.softwareliberty.com/\" rel=\"external\">Free Software</a> (much better than just freeware): its <a href=\"https://www.gnu.org/copyleft/gpl.html\" rel=\"external\">GPL</a> license is designed to protect your rights."); ?></p>
        <p><a href="<?php $this->base_url('windows/restrictions/further_details'); ?>" title="<?php print _("Restrictions - further details"); ?>"><?php print _("Read more"); ?></a></p>
      </section>
    </article>
  </div>
</main>

<nav class="chapters">
  <div class="title"><a href="<?php $this->base_url('windows'); ?>"><?php print _("Why not Windows"); ?></a></div>
  <?php $this->list_chapter_sections('windows'); ?>
</nav>

<?php $this->load_footer(); ?>
