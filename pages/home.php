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
          <div class="fp-slide slide-ggl">

            <h1><?php print _("get GNU/Linux!"); ?></h1>
            <div class="slide-text">
              <p><?php # translators: This is the very first sentence every visitor is going to read. Please pay great attention to making it sound great, we only have one try! =)
              print _("GNU/Linux, or simply <em>Linux</em>, is an alternative to Microsoft Windows. It is easy to use and gives more freedom to users. Anyone can install it: Linux is free as in freedom, and often available free of charge."); ?></p>
            </div>

          </div>
        </li>
        <li>
          <div class="fp-slide slide-linux">

            <h1><?php print _("What is GNU/Linux?"); ?></h1>
            <div class="slide-text">
              <p><?php print _("Learn more about the free operating system"); ?></p>
              <div class="button orange">
                <a href="<?php $this->base_url('linux'); ?>"><?php print _("Read more"); ?></a>
              </div>
            </div>

          </div>
        </li>
        <li>
          <div class="fp-slide slide-windows">

            <h1><?php print _("Why not Windows"); ?></h1>
            <div class="slide-text">
              <p><?php print _("Why we should avoid using Microsoft Windows"); ?></p>
              <div class="button blue">
                <a href="<?php $this->base_url('windows'); ?>"><?php print _("Read more"); ?></a>
              </div>
            </div>

          </div>
        </li>
        <li>
          <div class="fp-slide slide-switch">

            <h1><?php print _("Switch to Linux"); ?></h1>
            <div class="slide-text">
              <p><?php print _("Where to download and how to step into Linux"); ?></p>
              <div class="button green">
                <a href="<?php $this->base_url('switch_to_linux'); ?>"><?php print _("Read more"); ?></a>
              </div>
            </div>

          </div>
        </li>
      </ul>
    </div>
  </section>

</main>

<?php $this->load_footer(); ?>
