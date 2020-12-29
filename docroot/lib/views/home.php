<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
  exit(1);
}

$this->load_header();
?>

<main>
  <article>
    <div class="container">
      <header>
        <h1><?php print _("get GNU/Linux!"); ?></h1>
        <div class="page-intro">
          <p><?php # TRANSLATORS: This is the very first sentence every visitor is going to read. Please pay great attention to making it sound great, we only have one try! =)
          print _("GNU/Linux is an alternative to Microsoft Windows and macOS. It is easy to use and gives more freedom to users. Anyone can install it: GNU/Linux is free as in freedom, and often available free of charge."); ?></p>
        </div>
      </header>
    </div>

    <section class="brown lighten-5 button-section">
      <div class="container">
        <h2><?php print _("What is GNU/Linux?"); ?></h2>
        <p><?php print _("Learn more about the free operating system"); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('linux'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </section>

    <section class="button-section">
      <div class="container">
        <h2><?php print _("Why not Windows"); ?></h2>
        <p><?php print _("Why we should avoid using Microsoft Windows"); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('windows'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </section>

    <section class="brown lighten-5 button-section">
      <div class="container">
        <h2><?php print _("Switch to GNU/Linux"); ?></h2>
        <p><?php print _("Where to download and how to step into GNU/Linux"); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('switch_to_linux'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </section>
  </article>
</main>

<?php $this->load_footer(); ?>
