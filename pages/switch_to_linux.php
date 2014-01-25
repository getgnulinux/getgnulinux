<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<main role="main">
  <section>
    <div class="maxwidth">

      <h1 id="switch-to-gnu-linux"><?php print _("Switch to Linux"); ?></h1>

      <ul id="contentlist">
        <li>
          <a class="odd" href="<?php $this->base_url('switch_to_linux/from_windows_to_linux'); ?>">
          <img width="100" height="56" alt="Windows, Linux" src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.png"/>
          <span class="header_2"><?php print _("From Windows to Linux"); ?></span>
          <span><?php
          # translatorsn: please note the "affirmative" tone with the '.' at end of sentence.
          print _("Meet GNU/Linux in everyday use."); ?></span>
          </a>
        </li>
        <li>
          <a class="even" href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>">
          <img width="100" height="56" alt="Distributions" src="/images/switch_to_linux/switch_to_linux.choose_a_distribution.png"/>
          <span class="header_2"><?php print _("Choose a distribution"); ?></span>
          <span><?php print _("Our selection for an easy choice."); ?></span>
          </a>
        </li>
        <li>
          <a class="odd" href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>">
          <img width="100" height="56" alt="Install" src="/images/switch_to_linux/switch_to_linux.try_or_install.png"/>
          <span class="header_2"><?php print _("Try or install"); ?></span>
          <span><?php print _("Install it! (it's easier than you think)"); ?></span>
          </a>
        </li>
      </ul><!-- contentlist -->

    </div>
  </section>
</main>

<?php $this->load_footer(); ?>
