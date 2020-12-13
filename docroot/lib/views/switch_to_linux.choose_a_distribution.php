<?php
# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

# translators: This is the description of the "debian1.jpg" screenshot.
$debian1_text = _("Accessing applications in the <a href=\"https://www.gnome.org/gnome-3/\" rel=\"external\">GNOME 3</a> desktop environment.");
# translators: This is the description of the "debian2.jpg" screenshot.
$debian2_text = _("LibreOffice Writer open, editing a standard document.");
# translators: This is the description of the "debian3.jpg" screenshot.
$debian3_text = _("Shotwell photo manager");

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
?>

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

    <section class="debian">
      <div class="container">
        <div class="centered">
          <img src="/images/DebianLogoStacked.svg" class="distro-logo" alt="Debian Logo">
        </div>

        <p><?php print _("Debian is one of the oldest operating systems based on the Linux kernel. It has the reputation of being a very stable and secure GNU/Linux distribution which is backed by a well-organized community of developers and users. For this reason it is popular for use on personal computers as well as servers. Debian is also the basis for many other distributions, most notably Ubuntu."); ?></p>
        <p><?php print _("We recommend this distribution if you are committed to freedom in your computing."); ?></p>

        <div class="flexslider flexslider_screenshots">
          <ul class="slides">
            <li>
              <img src="/images/screenshots/debian1.jpg" alt="Debian screenshot" />
              <p class="flex-caption"><?php print $debian1_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/debian2.jpg" alt="Debian screenshot" />
              <p class="flex-caption"><?php print $debian2_text; ?></p>
            </li>
            <li>
              <img src="/images/screenshots/debian3.jpg" alt="Debian screenshot" />
              <p class="flex-caption"><?php print $debian3_text; ?></p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="ubuntu">
      <div class="container">
        <div class="centered">
          <img src="/images/UbuntuLogo.svg" class="distro-logo" alt="Ubuntu Logo">
        </div>

        <p><?php print _("Ubuntu is a GNU/Linux distribution based on Debian. The philosophy behind Ubuntu is that every computer user should be able to download and use their software free of charge, that anyone should be able to use their software in the language of their choice, and that anyone should be able to use all software regardless of disability. The result is an operating system that has excellent hardware support, is easy to use and pleasant on the eyes."); ?></p>
        <p><?php print _("We recommend this friendly and complete distribution if you are looking for an easy way to try and step into GNU/Linux."); ?></p>

        <div class="flexslider flexslider_screenshots">
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
          <img src="/images/FedoraLogo.svg" class="distro-logo" alt="Fedora Logo">
        </div>

        <p><?php print _("The distribution by the long-time prominent GNU/Linux developer company Red Hat. The default layout is similar to Debian, but there are differences in the chosen applications, install protocols and several technical elements. The Fedora developers are committed to innovation, which is reflected by incorporating new technologies early on, providing the latest in stable and robust, useful, and powerful free software."); ?></p>
        <p><?php print _("We recommend this distribution if you wish to learn more about the workings of a GNU/Linux system, security configuration, or work on software development."); ?></p>

        <div class="flexslider flexslider_screenshots">
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
  </article>

  <aside class="brown lighten-5">
    <div class="container button-section">
      <h1><?php print _("Try or install"); ?></h1>
      <div class="page-intro">
        <p><?php # translators: We try to be friendly and inviting here. The term "get a CD" does not have to be translated exactly.
        print _("Now grab a USB stick and try or install your distribution!"); ?></p>

        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </div>
  </aside>
</main>

<?php $this->load_footer(); ?>
