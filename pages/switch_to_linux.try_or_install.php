<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<nav class="chapters">
  <?php $this->list_chapter_sections('switch_to_linux'); ?>
</nav>

<main role="main">

  <section>
    <div class="maxwidth">
      <h1><?php print _("Try or install"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Make the step &ndash; unless you wish to <a href=\"http://linuxpreloaded.com/\" title=\"Linux Desktops and Laptops\">purchase a PC with Linux pre-installed</a>, you can see what freedom looks like on your computer."); ?></p>
      </div>
    </div>
  </section>

  <section>
    <div class="maxwidth">
      <h2 id="live_cd"><?php print _("Try out: the live CD"); ?></h2>

      <h3 id="live_cd_what_is"><?php print _("Take no risk"); ?></h3>

      <div class="adjustable-bg disc">
        <p><?php print _("Using a live CD means that Linux will be running on your computer <em>without installing anything</em>. It's a risk-less way to try and see by yourself what Linux is."); ?></p>
        <p><?php print _("When running on a live CD, your computer uses solely the CD-ROM to work (without accessing the hard drive inside). You can launch all of the default programs, edit documents, and browse the web."); ?></p>
        <p><?php print _("Since it is only designed as a trial mode, it is a little slow (it will take you five minutes to boot up, and programs launch somewhat slowly). If you proceed to install, the system will go much faster."); ?></p>
      </div>


      <h3 id="live_cd_what_need"><?php print _("What you need"); ?></h3>

      <p><?php print _("To use a live CD, you need a little bit of curiosity and fifteen minutes of free time, but <strong>no advanced knowledge in computing</strong>. If you feel confident simply using Windows from time to time, then this is within your reach."); ?></p>
    </div>
  </section>

  <section>
    <div class="maxwidth">
      <h2 id="install_dual_boot"><?php print _("Installing as a dual boot"); ?></h2>

      <h3 id="dual_boot_what_is"><?php print _("Choose at start-up"); ?></h3>
      <p><?php print _("It is possible to install GNU/Linux along with Windows. This means that upon start-up, you will be greeted with a screen allowing you to boot into the operating system you prefer."); ?></p>
      <p><?php print _("Setting up a dual-boot can be helpful if you need time to abandon restrictive software. It is <a href=\"http://www.ubuntu.com/download/desktop/install-desktop-latest\" title=\"a tutorial on installing Ubuntu\">not difficult to set-up</a>, though erasing Windows altogether is even easier."); ?></p>

      <h3 id="dual_boot_what_need"><?php print _("What you need"); ?></h3>
      <p><?php print _("Installing Linux on your computer will take you less than 30 minutes. It is not an obvious step for complete beginners, but if you use computers on a daily basis this is very likely within your reach. If you have already re-installed Windows on your computer, rest assured that installing Linux is no harder."); ?></p>
    </div>
  </section>


  <section>
    <div class="maxwidth">
      <h2 id="get_the_cd"><?php print _("Get the CD or DVD you need"); ?></h2>

      <p><?php print _("For the distributions we recommend, the live CD/DVD is the same as the installation CD/DVD. You can either download and burn a CD/DVD yourself, or order a CD/DVD from a trusted vendor."); ?></p>

      <div class="download-box ubuntu">
        <div class="content">
          <p><?php print _("You can download an <code>iso</code> image (rather large file) and then <a href=\"http://www.ubuntu.com/download/desktop/burn-a-dvd-on-windows\">burn it to a CD or DVD</a>. Once the CD/DVD is burned, you can use it to <a href=\"http://www.ubuntu.com/download/desktop/install-desktop-latest\">install Ubuntu</a> onto your computer."); ?></p>

          <div class="clearfix">
            <div class="button green">
              <a href="http://www.ubuntu.com/download/"><i class="fa fa-download fa-fw"></i> <?php print _("Download Ubuntu"); ?></a>
            </div>
            <div class="button blue">
              <a href="http://www.osdisc.com/products/linux/ubuntu"><i class="fa fa-truck fa-fw"></i> <?php print _("Order a CD/DVD"); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div class="download-box fedora">
        <div class="content">
          <p><?php print _("The Fedora live CD/DVD also enables installation. Follow the <a href=\"http://docs.fedoraproject.org/en-US/Fedora/18/html/Installation_Quick_Start_Guide/index.html\">installation quick start guide</a> to get started with Fedora."); ?></p>

          <div class="clearfix">
            <div class="button green">
              <a href="http://fedoraproject.org/get-fedora"><i class="fa fa-download fa-fw"></i> <?php print _("Download Fedora"); ?></a>
            </div>
            <div class="button blue">
              <a href="http://www.osdisc.com/products/linux/fedora"><i class="fa fa-truck fa-fw"></i> <?php print _("Order a CD/DVD"); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div class="download-box trisquel">
        <div class="content">
          <p><?php print _("The <a href=\"http://trisquel.info/en/wiki/installation-guide\">Trisquel installation</a> is very similar to that of Ubuntu."); ?></p>

          <div class="clearfix">
            <div class="button green">
              <a href="http://trisquel.info/download"><i class="fa fa-download fa-fw"></i> <?php print _("Download Trisquel"); ?></a>
            </div>
            <div class="button blue">
              <a href="http://www.osdisc.com/products/linux/trisquel"><i class="fa fa-truck fa-fw"></i> <?php print _("Order a CD/DVD"); ?></a>
            </div>
          </div>
        </div>
      </div>

      <p class="note italic"><?php print _("Note: Purchased and downloaded CDs are identical! GNU/Linux is <a href=\"http://www.softwareliberty.com/\" title=\"What do you mean, free?\">free software</a>. You are simply paying a handling/shipping fee."); ?></p>

    </div>
  </section>

  <section>
    <div class="maxwidth">
      <div class="adjustable-bg laptop">
        <h2 id="free_software_pre_installed"><?php print _("Free Software pre-installed"); ?></h2>
        <p><?php print _("Not all computers are shipped with Windows. If you do not wish to make the install yourself, or are in need of new hardware, you can get a laptop or a desktop pre-installed with GNU/Linux.<br/>
We have compiled <a title=\"linux computers\" href=\"http://linuxpreloaded.com/\">a list of vendors pre-installing Linux at LinuxPreloaded.com</a> just for that reason."); ?></p>
      </div>

    </div>
  </section>

</main>

<?php $this->load_footer(); ?>
