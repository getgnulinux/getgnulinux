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
        <h1><?php print _("Try or install"); ?></h1>
        <div class="page-intro">
          <p><?php print _("Make the step &ndash; unless you wish to <a href=\"#free_software_pre_installed\" title=\"GNU/Linux Desktops and Laptops\">purchase a PC with GNU/Linux pre-installed</a>, you can see what freedom looks like on your computer."); ?></p>
        </div>
      </header>

      <section>
        <h2 id="live_cd"><?php print _("Try out the live USB stick"); ?></h2>
        <img src="/images/launch.svg" class="float-<?php print $this->rtltr("right", "left"); ?> w30 hide-on-med-and-down" alt="Launch operating system">

        <h3 id="live_cd_what_is"><?php print _("Take no risk"); ?></h3>
        <p><?php print _("Using a live USB stick means that GNU/Linux will be running on your computer <em>without installing anything</em>. It's a risk-less way to try and see by yourself what GNU/Linux is."); ?></p>
        <p><?php print _("When running on a live USB stick, your computer uses solely the USB stick to work (without accessing the hard drive inside). You can launch all of the default programs, edit documents, and browse the web."); ?></p>
        <p><?php print _("Since it is only designed as a trial mode, it is a little slow (it will take you five minutes to boot up, and programs launch somewhat slowly). If you proceed to install, the system will go much faster."); ?></p>

        <h3 id="live_cd_what_need"><?php print _("What you need"); ?></h3>
        <p><?php print _("For the distributions we recommend, the live USB stick is the same as the installation medium. You can download an ISO image (rather large file) and then create a bootable USB stick (recommended) or burn it to a CD or DVD. Burning to a CD/DVD may be necessary when installing GNU/Linux on an older system which can not boot from USB. You can then use it to install GNU/Linux onto your computer."); ?></p>
        <p><?php print _("To use a live USB stick, you need a little bit of curiosity, and fifteen minutes of free time, but <strong>no advanced knowledge in computing</strong>. If you feel confident simply using Windows or macOS from time to time, then this is within your reach."); ?></p>
      </section>

      <section>
        <h2 id="install_dual_boot"><?php print _("Installing as a dual boot"); ?></h2>

        <h3 id="dual_boot_what_is"><?php print _("Choose at start-up"); ?></h3>
        <p><?php print _("It is possible to install GNU/Linux along with Windows or macOS. This means that upon start-up, you will be greeted with a screen allowing you to boot into the operating system you prefer."); ?></p>
        <p><?php print _("Setting up a dual-boot can be helpful if you need time to abandon restrictive software. It is <a href=\"https://tutorials.ubuntu.com/tutorial/tutorial-install-ubuntu-desktop\" title=\"a tutorial on installing Ubuntu\" rel=\"external\">not difficult to set-up</a>, though erasing Windows or macOS altogether is even easier."); ?></p>

        <h3 id="dual_boot_what_need"><?php print _("What you need"); ?></h3>
        <p><?php print _("Installing GNU/Linux on your computer will take you less than 30 minutes. It is not an obvious step for complete beginners, but if you use computers on a daily basis this is very likely within your reach. If you have already re-installed Windows or macOS on your computer, rest assured that installing GNU/Linux is no harder."); ?></p>
      </section>

      <section>
      <h2 id="get_the_cd"><?php
        # TRANSLATORS: "Image" refers to a downloadable ISO image and can be translated loosely.
        print _("Get the image you need"); ?></h2>
        <p><?php print _("For the distributions we recommend, the live USB stick is the same as the installation medium. You can download an ISO image (rather large file) and then create a bootable USB stick (recommended) or burn it to a CD or DVD. Burning to a CD/DVD may be necessary when installing GNU/Linux on an older system which can not boot from USB. You can then use it to install GNU/Linux onto your computer."); ?></p>

        <div class="row">
          <div class="col s12 m6 l4">
            <div class="card card-distribution brown lighten-5">
              <div class="card-image card-distribution-logo card-distribution-logo--debian"></div>
              <div class="card-content">
                <p><?php $p = _("<a href=\"%s\" rel=\"external\">Create a live USB stick</a> or <a href=\"%s\" rel=\"external\">burn it to a CD/DVD</a>."); printf($p, _("https://www.debian.org/CD/faq/#write-usb"), _("https://www.debian.org/CD/faq/#record-windows")); ?></p>
                <p><?php $p = _("Then use it to <a href=\"%s\" rel=\"external\">install Debian</a> onto your computer."); printf($p, _("https://www.debian.org/releases/stable/installmanual")); ?></p>
              </div>
              <div class="card-action center">
                <a class="waves-effect waves-light btn-large light-green darken-4" href="https://www.debian.org/distrib/" target="_blank">
                  <?php print _("Download Debian"); ?>
                  <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">cloud_download</i>
                </a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card card-distribution brown lighten-5">
              <div class="card-image card-distribution-logo card-distribution-logo--ubuntu"></div>
              <div class="card-content">
                <p><?php $p = _("<a href=\"%s\" rel=\"external\">Create a live USB stick</a> or <a href=\"%s\" rel=\"external\">burn it to a CD/DVD</a>."); printf($p, _("https://tutorials.ubuntu.com/tutorial/tutorial-create-a-usb-stick-on-windows"), _("https://tutorials.ubuntu.com/tutorial/tutorial-burn-a-dvd-on-windows")); ?></p>
                <p><?php $p = _("Then use it to <a href=\"%s\" rel=\"external\">install Ubuntu</a> onto your computer."); printf($p, _("https://tutorials.ubuntu.com/tutorial/tutorial-install-ubuntu-desktop")); ?></p>
              </div>
              <div class="card-action center">
                <a class="waves-effect waves-light btn-large light-green darken-4" href="https://ubuntu.com/download/desktop" target="_blank">
                  <?php print _("Download Ubuntu"); ?>
                  <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">cloud_download</i>
                </a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card card-distribution brown lighten-5">
              <div class="card-image card-distribution-logo card-distribution-logo--fedora"></div>
              <div class="card-content">
                <p><?php $p = _("<a href=\"%s\" rel=\"external\">Create a live USB stick</a> or <a href=\"%s\" rel=\"external\">burn it to a CD/DVD</a>."); printf($p, _("https://docs.fedoraproject.org/en-US/fedora/f33/install-guide/install/Preparing_for_Installation/#sect-preparing-boot-media"), _("https://docs.fedoraproject.org/en-US/fedora/f33/install-guide/install/Preparing_for_Installation/#sect-preparing-boot-media")); ?></p>
                <p><?php $p = _("Then use it to <a href=\"%s\" rel=\"external\">install Fedora</a> onto your computer."); printf($p, _("https://docs.fedoraproject.org/en-US/fedora/f33/install-guide/install/Booting_the_Installation/")); ?></p>
              </div>
              <div class="card-action center">
                <a class="waves-effect waves-light btn-large light-green darken-4" href="https://getfedora.org/en/workstation/" target="_blank">
                  <?php print _("Download Fedora"); ?>
                  <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">cloud_download</i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <p class="note"><?php print _("Note: Purchased and downloaded CDs are identical! GNU/Linux is <a href=\"https://www.gnu.org/philosophy/free-sw.html\" title=\"What do you mean, free?\" rel=\"external\">free software</a>. You are simply paying a handling/shipping fee."); ?></p>
      </section>

      <section>
        <h2 id="free_software_pre_installed"><?php print _("Free Software pre-installed"); ?></h2>
        <img class="float-<?php print $this->rtltr("right", "left"); ?> w30 hide-on-med-and-down" src="/images/librem-mini-right-angle.png" title="<?php print _("Computer with GNU/Linux pre-installed"); ?>" alt="Librem Mini">
        <p><?php print _("Not all computers are shipped with Windows or macOS. If you do not wish to make the install yourself, or are in need of new hardware, you can get a laptop or a desktop pre-installed with GNU/Linux. <a href=\"https://linuxpreloaded.com/\" rel=\"external\">LinuxPreloaded.com</a> has compiled a list of vendors pre-installing GNU/Linux just for that reason."); ?></p>
      </section>
    </article>
  </div>
</main>

<?php $this->load_footer(); ?>
