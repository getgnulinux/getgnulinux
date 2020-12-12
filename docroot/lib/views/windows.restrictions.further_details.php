<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<main>
  <div class="container">
    <article>
      <header>
        <h1><?php print _("More details on restrictions"); ?></h1>
      </header>

      <p><?php $p = _("We wished to keep our \"<a href=\"%s\">Restrictions</a>\" page short, so we moved many of the license restrictions out here. Here is the fine print inside the Microsoft licenses."); printf($p, $this->get_base_url('windows/restrictions')); ?></p>

      <ul class="browser-default">
        <li>
          <p class="highlight"><?php print _("It is unclear who can use, receive or buy your software."); ?></p>
          <p><?php print _("The license is particularly unclear as to who may or may not use your version of Windows or Office. Several sentences in the Microsoft Office license suggest it would be illegal to let your neighbour type a letter with your version of Word on your computer."); ?></p>
          <p><?php print _("It is however clear in the Microsoft Windows license that you may <em>only</em> give or sell your copy of Windows software to anyone <strong>if you are the first buyer</strong>. This means, that if you buy it from the user who initially purchased it from Microsoft, then <em>you</em> are not able to sell or give the software away to yet another user, even if you do not use it anymore, even if you buy the latest software version with your new computer."); ?></p>
        </li>
        <li>
          <p class="highlight"><?php print _("You may not lease, lend or provide commercial hosting services with the software"); ?></p>
          <p><?php print _("You cannot let professional users use your software, whether they pay for the service or not, and whether you use a &quot;Professional&quot; license or not."); ?></p>
        </li>
        <li>
          <p class="highlight"><?php print _("The upgrade is only valid for the first license you use it on"); ?></p>
          <p><?php print _("If that original license expires (for example because the computer it came on stops working), so does the upgrade. If you purchase an upgrade, you are not allowed to use the original software version anymore."); ?></p>
        </li>
        <li>
          <p class="highlight"><?php print _("Educational versions are crippled"); ?></p>
          <p><?php print _("If Microsoft accepts to define you as a student or an academic, you are allowed to buy an academic license, and install the software on three computers. But it is illegal to use it for any commercial purpose \"<em>or in any way related to the operation of any business enterprise or revenue-generating activities</em>\"."); ?></p>
        </li>
        <li>
          <p class="highlight"><?php print _("The components of the software may not be separated"); ?></p>
          <p><?php print _("It is illegal to buy Microsoft Office, then install only Word on one computer, and only Excel on another. The Office suite is one single product."); ?></p>
        </li>
        <li>
          <p class="highlight"><?php print _("Private information is collected"); ?></p>
          <p><?php print _("The licence explicitly states that \"Microsoft and its affiliates\" collect technical information gathered on your computer by the software. They \"<em>may use this information solely to improve products or to provide customized services or technologies</em>\"."); ?></p>
          <p><?php print _("In order to activate most Microsoft products, as part of the license agreement, your computer connects to the Microsoft servers and sends &quot;technical&quot; information. It can &quot;solely&quot; be used for pretty much anything."); ?></p>
        </li>
      </ul>

      <br>

      <aside class="card-panel amber lighten-4 card-panel--further-reading">
        <h3 class="center"><?php print _("Read more"); ?></h3>

        <div class="row">
          <div class="col s12 l6">
            <h4 id="gpl"><a href="<?php
            # translators: gnu.org uses language negotiation, so it's not necessary to replace those URLs.
            print _("https://www.gnu.org/copyleft/gpl.html"); ?>" title="<?php print _("The GNU General Public License"); ?>" rel="external"><?php print _("The GPL"); ?></a></h4>
            <p><?php print _("The GNU General Public License, under which GNU/Linux and a vast amount of free software are published."); ?></p>
          </div>
          <div class="col s12 l6">
            <h4 id="gpl_eula_comparison"><a href="/archive/comparing_the_gpl_to_eula.pdf" hreflang="en"><?php print _("Comparing the GPL to the Microsoft WinXP License"); ?></a> (pdf)</h4>
            <p><?php print _("A thorough and clear comparison of the <abbr title=\"GNU General Public License\">GPL</abbr> and the Microsoft <abbr title=\"End-User License Agreement\">EULA</abbr> license that governs the use of most Windows XP versions."); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col s12 l6">
            <h4 id="right_to_read"><a href="<?php print _("https://www.gnu.org/philosophy/right-to-read.html"); ?>" rel="external"><?php print _("The Right to Read"); ?></a></h4>
            <p><?php print _("A short story by Richard Stallman that describes what influence restrictive licenses could have on our lives."); ?></p>
          </div>
        </div>
      </aside>
    <article>

    <br>

    <aside>
      <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('windows/restrictions'); ?>">
        <?php print _("Restrictions"); ?>
        <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">expand_less</i>
      </a>
    </aside>

    <br>
  </div>
</main>

<?php $this->load_footer(); ?>
