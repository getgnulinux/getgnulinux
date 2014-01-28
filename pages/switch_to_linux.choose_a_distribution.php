<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

# translators: This is the description of the "ubuntu1.png" screenshot.
$ubuntu1_text = _("Firefox web browser");
# translators: This is the description of the "ubuntu2.png" screenshot.
$ubuntu2_text = _("File manager and image browsing application are open, on standard desktop.");
# translators: This is the description of the "ubuntu3.png" screenshot.
$ubuntu3_text = _("Thunderbird e-mail and calendar application.");

# translators: This is the description of the "fedora1.png" screenshot.
$fedora1_text = _("GIMP image editing application, cropping a photo.");
# translators: This is the description of the "fedora2.png" screenshot.
$fedora2_text = _("LibreOffice Writer open, editing a standard document.");
# translators: This is the description of the "fedora3.png" screenshot.
$fedora3_text = _("Accessing applications in the <a href=\"http://gnome3.org/\">GNOME 3</a> desktop environment.");

# translators: This is the description of the "trisquel1.png" screenshot.
$trisquel1_text = _("Update manager open.");
# translators: This is the description of the "trisquel2.png" screenshot.
$trisquel2_text = _("LibreOffice Calc open, showing an example spreadsheet.");
# translators: This is the description of the "trisquel3.png" screenshot.
$trisquel3_text = _("Accessing applications.");


?>

<nav class="chapters">
  <?php $this->switch_to_linux_chapters(); ?>
</nav>

<main role="main">

  <section>
    <div class="maxwidth">
      <h1><?php print _("Choose a distribution"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Because there is no &quot;one Linux&quot;, finding what you need can be difficult. Here are our choice of three beginner-friendly, widely used distributions."); ?></p>
      </div>
    </div>

    <p class="italic centered"><?php # translators: if you don't know of a clean, simple comparison website, simply remove the link.
    print _("Note: There are <a href=\"http://distrowatch.com/dwres.php?resource=major\">plenty of distributions to choose from and compare</a>."); ?><br />
    <?php print _("This is our selection for newcomers. These links are not commercial."); ?></p>
  </section>

  <section class="ubuntu">
    <div class="maxwidth">
      <div class="centered">
        <a href="<?php # translators: use url of official localised Ubuntu homepage, if existing
        print _("http://www.ubuntu.com/"); ?>" title="Ubuntu Linux"><img src="/images/UbuntuLogo.png" alt="Ubuntu"/></a>
      </div>

      <p><?php print _("Simple, easy, usable and our personal favourite. A tanned, smooth atmosphere that never gets in your way. All programs are kept in order and managed easily. Configuration is kept simple rather than exhaustive."); ?></p>
      <p><?php print _("We recommend this friendly and complete distribution if you are looking for an easy way to try and step into GNU/Linux."); ?></p>
      <p><?php print _("Ubuntu also has a sister distribution, <a href=\"http://www.kubuntu.org/\">Kubuntu</a>, with a different layout and slightly more advanced graphics."); ?></p>

      <div class="flexslider screenshots">
        <ul class="slides">
          <li>
            <img src="/images/screenshots/ubuntu1.png" />
            <p class="flex-caption"><?php print $ubuntu1_text; ?></p>
          </li>
          <li>
            <img src="/images/screenshots/ubuntu2.png" />
            <p class="flex-caption"><?php print $ubuntu2_text; ?></p>
          </li>
          <li>
            <img src="/images/screenshots/ubuntu3.png" />
            <p class="flex-caption"><?php print $ubuntu3_text; ?></p>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <section class="fedora">
    <div class="maxwidth">
      <div class="centered">
        <a href="<?php # translators: use url of official localised Fedora homepage, if existing
        print _("http://fedoraproject.org/"); ?>" title="Fedora Linux"><img src="/images/FedoraLogo.png" alt="Fedora"/></a>
      </div>

      <p><?php
      # translators: if you don't know of a clean, simple comparison website, simply remove the link.
      print _("The distribution by the long-time prominent GNU/Linux developer company Red Hat. The default layout is similar to Ubuntu (it is also possible to use KDE, the more advanced desktop environment in use in Kubuntu), but <a href=\"http://polishlinux.org/choose/comparison/?distro1=Ubuntu&amp;distro2=Fedora\" title=\"What are the differences between Fedora and Ubuntu?\">there are differences</a> in the chosen applications, install protocols and several technical elements."); ?></p>
      <p><?php print _("We recommend this distribution if you wish to learn more about the workings of a GNU/Linux system, security configuration, or work on software development."); ?></p>

      <div class="flexslider screenshots">
        <ul class="slides">
          <li>
            <img src="/images/screenshots/fedora1.png" />
            <p class="flex-caption"><?php print $fedora1_text; ?></p>
          </li>
          <li>
            <img src="/images/screenshots/fedora2.png" />
            <p class="flex-caption"><?php print $fedora2_text; ?></p>
          </li>
          <li>
            <img src="/images/screenshots/fedora3.png" />
            <p class="flex-caption"><?php print $fedora3_text; ?></p>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <section class="trisquel">
    <div class="maxwidth">

      <div class="centered">
        <a href="http://trisquel.info/" title="Trisquel GNU/Linux"><img src="/images/TrisquelLogo.png" alt="Trisquel"/></a>
      </div>

      <p><?php $p = _("While Ubuntu contains some restricting components (<a href=\"%s#full_freedom\">why?</a>), the Trisquel developers have built an entirely free derivative. Although its community is smaller and its hardware support might be slightly inferior, Trisquel gives anyone full freedom over a complete operating system similar to Ubuntu."); printf($p, $this->base_url('linux/linux_faq',1)); ?></p>
      <p><?php print _("We recommend this distribution if you are committed to freedom in your computing."); ?></p>

      <div class="flexslider screenshots">
        <ul class="slides">
          <li>
            <img src="/images/screenshots/trisquel1.png" />
            <p class="flex-caption"><?php print $trisquel1_text; ?></p>
          </li>
          <li>
            <img src="/images/screenshots/trisquel2.png" />
            <p class="flex-caption"><?php print $trisquel2_text; ?></p>
          </li>
          <li>
            <img src="/images/screenshots/trisquel3.png" />
            <p class="flex-caption"><?php print $trisquel3_text; ?></p>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <section class="bg-even">
    <div class="maxwidth button-section">
      <h1><?php print _("Try or install"); ?></h1>

      <div class="page-intro">
        <p><?php # translators: We try to be friendly and inviting here. The term "get a CD" does not have to be translated exactly.
        print _("Now get a CD and try or install your distribution!"); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>"><?php print _("Read more"); ?></a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php $this->load_footer(); ?>
