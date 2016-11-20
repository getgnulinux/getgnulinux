<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
  exit(1);
}

$this->load_header();
?>

<main role="main">

  <!-- INTRODUCTION -->

  <section class="no-padding">
    <div class="flexslider home">
      <ul class="slides">
        <li>
          <div class="fp-slide ggl">

            <img src="/images/slides/GNU_Tux.svg" alt="">
            <h1><?php print _("get GNU/Linux!"); ?></h1>
            <div class="slide-text">
              <p><?php # translators: This is the very first sentence every visitor is going to read. Please pay great attention to making it sound great, we only have one try! =)
              print _("GNU/Linux is an alternative to Microsoft Windows and Mac OS. It is easy to use and gives more freedom to users. Anyone can install it: GNU/Linux is free as in freedom, and often available free of charge."); ?></p>
            </div>

          </div>
        </li>
        <li>
          <div class="fp-slide linux">

            <img src="/images/slides/Help.svg" alt="">
            <h1><?php print _("What is GNU/Linux?"); ?></h1>
            <div class="slide-text">
              <p><?php print _("Learn more about the free operating system"); ?></p>
              <div class="button blue">
                <a href="<?php $this->base_url('linux'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
              </div>
            </div>

          </div>
        </li>
        <li>
          <div class="fp-slide windows">

            <img src="/images/slides/Warning.svg" alt="">
            <h1><?php print _("Why not Windows"); ?></h1>
            <div class="slide-text">
              <p><?php print _("Why we should avoid using Microsoft Windows"); ?></p>
              <div class="button blue">
                <a href="<?php $this->base_url('windows'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
              </div>
            </div>

          </div>
        </li>
        <li>
          <div class="fp-slide switch">

            <img src="/images/slides/Disc.svg" alt="">
            <h1><?php print _("Switch to GNU/Linux"); ?></h1>
            <div class="slide-text">
              <p><?php print _("Where to download and how to step into GNU/Linux"); ?></p>
              <div class="button blue">
                <a href="<?php $this->base_url('switch_to_linux'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
              </div>
            </div>

          </div>
        </li>
      </ul>
    </div>
  </section>

</main>

<?php $this->load_footer(); ?>
