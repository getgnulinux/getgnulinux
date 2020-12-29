<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<main>
  <article>
    <section>
      <div class="container">
        <h1><?php print _("Switch to GNU/Linux"); ?></h1>
      </div>
    </section>

    <section class="brown lighten-5 button-section">
      <div class="container">
        <h2><?php print _("From Windows to GNU/Linux"); ?></h2>
        <p><?php # TRANSLATORS: please note the "affirmative" tone with the '.' at end of sentence.
        print _("Meet GNU/Linux in everyday use."); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('switch_to_linux/from_windows_to_linux'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </section>

    <section class="button-section">
      <div class="container">
        <h2><?php print _("Choose a distribution"); ?></h2>
        <p><?php print _("Our selection for an easy choice."); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </section>

    <section class="brown lighten-5 button-section">
      <div class="container">
        <h2><?php print _("Try or install"); ?></h2>
        <p><?php print _("Install it! (it's easier than you think)"); ?></p>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>">
          <?php print _("Read more"); ?>
          <i class="material-icons <?php print $this->rtltr("right", "left"); ?>"><?php print $this->rtltr("chevron_right", "chevron_left"); ?></i>
        </a>
      </div>
    </section>
  </article>
</main>

<?php $this->load_footer(); ?>
