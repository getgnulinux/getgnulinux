<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<main role="main">
  <section>
    <div class="container">
      <h1><?php print _("Switch to GNU/Linux"); ?></h1>
    </div>
  </section>

  <section class="bg-even">
    <div class="container button-section">
      <h1><?php print _("From Windows to GNU/Linux"); ?></h1>

      <div class="page-intro">
        <p><?php # translators: please note the "affirmative" tone with the '.' at end of sentence.
        print _("Meet GNU/Linux in everyday use."); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/from_windows_to_linux'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container button-section">
      <h1><?php print _("Choose a distribution"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Our selection for an easy choice."); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-even">
    <div class="container button-section">
      <h1><?php print _("Try or install"); ?></h1>

      <div class="page-intro">
        <p><?php print _("Install it! (it's easier than you think)"); ?></p>

        <div class="button green">
          <a href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>"><?php print _("Read more"); ?> <i class="fa <?php print $this->rtltr("fa-arrow-circle-right", "fa-arrow-circle-left"); ?> fa-fw"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load_footer(); ?>
