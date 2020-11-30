<?php
# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

# translators: This is the description of the "ubuntu1.jpg" screenshot.
$ubuntu1_text = _("Firefox web browser");
# translators: This is the description of the "ubuntu2.jpg" screenshot.
$ubuntu2_text = _("Rhythmbox music player");
# translators: This is the description of the "ubuntu3.jpg" screenshot.
$ubuntu3_text = _("Thunderbird e-mail and calendar application");

# translators: This is the description of the "fedora1.jpg" screenshot.
$fedora1_text = _("Accessing applications in the <a href=\"https://www.gnome.org/gnome-3/\" rel=\"external\">GNOME 3</a> desktop environment.");
# translators: This is the description of the "fedora2.jpg" screenshot.
$fedora2_text = _("Desktop overview with two applications open.");
# translators: This is the description of the "fedora3.jpg" screenshot.
$fedora3_text = _("Software manager open, install/remove applications.");

# translators: This is the description of the "trisquel1.jpg" screenshot.
$trisquel1_text = _("Accessing applications.");
# translators: This is the description of the "trisquel2.jpg" screenshot.
$trisquel2_text = _("LibreOffice Writer open, editing a standard document.");
# translators: This is the description of the "trisquel3.jpg" screenshot.
$trisquel3_text = _("LibreOffice Calc open, showing an example spreadsheet.");
?>

<nav class="chapters">
  <?php $this->list_chapter_sections('switch_to_linux'); ?>
</nav>

<main>
  <article>
    <header>
      <h1><?php print _("Choose a distribution"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Because there is no \"one GNU/Linux\", finding what you need can be difficult. Here are our choice of three beginner-friendly, widely used distributions."); ?></p>
      </div>

      <p class="italic centered"><?php # translators: The distrowatch.com website is translated into many languages (see https://distrowatch.com/dwres.php?resource=about). If your language is present, please replace "EN" in the URL by the code of your language (e.g. for Spanish, the last part would become "language=ES").
      print _("Note: There are <a href=\"https://distrowatch.com/dwres.php?resource=major&amp;language=EN\" rel=\"external\">plenty of distributions to choose from and compare</a>."); ?><br />
      <?php print _("This is our selection for newcomers. These links are not commercial."); ?></p>
    </header>

    <section class="ubuntu">
      <div class="container">
        <div class="centered">
          <img src="/images/UbuntuLogo.png" alt="Ubuntu">
        </div>

        <p><?php print _("Simple, easy, usable and our personal favourite. A tanned, smooth atmosphere that never gets in your way. All programs are kept in order and managed easily. Configuration is kept simple rather than exhaustive."); ?></p>
        <p><?php print _("We recommend this friendly and complete distribution if you are looking for an easy way to try and step into GNU/Linux."); ?></p>
        <p><?php print _("Ubuntu also has a sister distribution, <a href=\"https://www.kubuntu.org/\" rel=\"external\">Kubuntu</a>, with a different layout and slightly more advanced graphics."); ?></p>

        <div class="flexslider screenshots">
          <ul class="slides">
            <li>
              <img src="/images/screenshots/ubuntu1.jpg" alt="Ubuntu screenshot" />
              <p class="flex-caption"><?php print $ubuntu1_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/ubuntu2.jpg" alt="Ubuntu screenshot" />
              <p class="flex-caption"><?php print $ubuntu2_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/ubuntu3.jpg" alt="Ubuntu screenshot" />
              <p class="flex-caption"><?php print $ubuntu3_text; ?></p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="fedora">
      <div class="container">
        <div class="centered">
          <img src="/images/FedoraLogo.png" alt="Fedora">
        </div>

        <p><?php
        # translators: if you don't know of a clean, simple comparison website, simply remove the link.
        print _("The distribution by the long-time prominent GNU/Linux developer company Red Hat. The default layout is similar to Ubuntu (it is also possible to use KDE, the more advanced desktop environment in use in Kubuntu), but there are differences in the chosen applications, install protocols and several technical elements."); ?></p>
        <p><?php print _("We recommend this distribution if you wish to learn more about the workings of a GNU/Linux system, security configuration, or work on software development."); ?></p>

        <div class="flexslider screenshots">
          <ul class="slides">
            <li>
              <img src="/images/screenshots/fedora1.jpg" alt="Fedora screenshot" />
              <p class="flex-caption"><?php print $fedora1_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/fedora2.jpg" alt="Fedora screenshot" />
              <p class="flex-caption"><?php print $fedora2_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/fedora3.jpg" alt="Fedora screenshot" />
              <p class="flex-caption"><?php print $fedora3_text; ?></p>
           </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="trisquel">
      <div class="container">
        <div class="centered">
          <img src="/images/TrisquelLogo.png" alt="Trisquel">
        </div>

        <p><?php $p = _("Since Ubuntu contains some restricting components (<a href=\"%s#full_freedom\">why?</a>), the Trisquel developers have built an entirely free derivative. Although its community is smaller and its hardware support might be slightly inferior, Trisquel gives anyone full freedom over a complete operating system similar to Ubuntu."); printf($p, $this->get_base_url('linux/linux_faq')); ?></p>
        <p><?php print _("We recommend this distribution if you are committed to freedom in your computing."); ?></p>

        <div class="flexslider screenshots">
          <ul class="slides">
            <li>
              <img src="/images/screenshots/trisquel1.jpg" alt="Trisquel screenshot" />
              <p class="flex-caption"><?php print $trisquel1_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/trisquel2.jpg" alt="Trisquel screenshot" />
              <p class="flex-caption"><?php print $trisquel2_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/trisquel3.jpg" alt="Trisquel screenshot" />
              <p class="flex-caption"><?php print $trisquel3_text; ?></p>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </article>

  <aside class="bg-even">
    <div class="container button-section">
      <h1><?php print _("Try or install"); ?></h1>
      <div class="page-intro">
        <p><?php # translators: We try to be friendly and inviting here. The term "get a CD" does not have to be translated exactly.
        print _("Now get a CD and try or install your distribution!"); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
        </div>
      </div>
    </div>
  </aside>
</main>

<?php $this->load_footer(); ?>
