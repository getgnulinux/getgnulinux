<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<main role="main">
  <div class="container">
    <header>
      <h1><?php print _("More"); ?></h1>
      <div class="page-intro">
        <p><?php print _("Selected reading on the Internet."); ?></p>
      </div>
    </header>

    <div class="more-section">
      <h2><?php print _("Questions, help, and equipment"); ?></h2>

      <div class="column">
        <a href="<?php # translators: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
        print _("https://www.linuxquestions.org/"); ?>" title="<?php print _("LinuxQuestions.org"); ?>" ><img src="<?php print $this->language_file("more.ext.link1.png"); ?>" alt="<?php
        # translators: Image alt description for www.linuxquestions.org (if you translated the URL, change this accordingly)
        print _("LinuxQuestions.org"); ?>"/></a>

        <p><?php # translators: This is the text below a button linking to www.linuxquestions.org. If you translated the URL, change this text accordingly.
        print _("Friendly free software support forums, for newcomers and advanced users alike.<br/> If you have a question that we haven't covered, it's a good place to ask!"); ?></p>
      </div>

      <div class="column">
        <a href="<?php # translators: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
        print _("https://linuxpreloaded.com/"); ?>" title="<?php print _("Computers pre-installed with GNU/Linux"); ?>"><img src="<?php print $this->language_file("more.ext.link2.png"); ?>" alt="<?php
        # translators: Image alt description for linuxpreloaded.com (if you translated the URL, change this accordingly)
        print _("Linux Pre-Loaded"); ?>"/></a>

        <p><?php # translators: This is the text below a button linking to linuxpreloaded.com. If you translated the URL, change this text accordingly.
        print _("A simple and clear selection of vendors selling computers pre-installed with GNU/Linux."); ?></p>
      </div>
    </div>

    <div class="more-section">
      <h2><?php print _("Learn and read more"); ?></h2>

      <div class="column">
        <a href="<?php # translators: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
        print _("https://en.wikibooks.org/wiki/FLOSS_Concept_Booklet"); ?>" title="<?php print _("the FLOSS concept booklet"); ?>" ><img src="<?php print $this->language_file("more.ext.link3.png"); ?>" alt="<?php
        # translators: Image alt description (if you translated the URL, change this accordingly)
        print _("FLOSS Booklet"); ?>"/></a>

        <p><?php # translators: This is the text below a button linking to en.wikibooks.org/wiki/FLOSS_Concept_Booklet. If you translated the URL, change this text accordingly.
        print _("A short, entertaining way to clarify thoughts about free, libre, \"open-source\" software."); ?></p>
      </div>
      <div class="column">
        <a href="<?php # translators: If you know of a very good resource in your language, you may put its URL here. Please choose with great care, *ask if in doubt*. By default, leave the url as such.
        print _("https://www.fsf.org/"); ?>" title="<?php print _("Free Software Foundation"); ?>" ><img src="<?php print $this->language_file("more.ext.link4.png"); ?>" alt="<?php
        # translators: Image alt description for www.fsf.org (if you translated the URL, change this accordingly)
        print _("FSF"); ?>"/></a>

        <p><?php # translators: This is the text below a button linking to www.fsf.org. If you translated the URL, change this text accordingly.
        print _("The Free Software Foundation defends and advocates the very concept of <a href=\"https://www.softwareliberty.com/\">free software</a> that gave birth to GNU/Linux."); ?></p>
      </div>
    </div>

    <p class="italic centered"><?php print _("Note: these links are proposed as a recommendation. They are not commercial."); ?></p>
  </div>
</main>

<?php $this->load_footer(); ?>
