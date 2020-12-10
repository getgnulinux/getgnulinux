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
        <h1><?php print _("More"); ?></h1>
        <div class="page-intro">
          <p><?php print _("Selected reading on the Internet."); ?></p>
        </div>
      </header>

      <div class="more-section">
        <h2><?php print _("Questions and help"); ?></h2>

        <div class="column">
          <a href="https://unix.stackexchange.com/" title="Unix & Linux Stack Exchange" target="_blank"><img src="/images/more/unix.stackexchange.png" alt="Unix & Linux Stack Exchange"></a>
          <p><?php print _("<strong>Unix & Linux Stack Exchange</strong> is a question and answer site for users of GNU/Linux. This site is all about getting answers."); ?></p>
          <br>
          <a href="https://ask.fedoraproject.org/" title="Ask Fedora" target="_blank"><img src="/images/more/askfedora.png" alt="Ask Fedora"/></a>
          <p><?php print _("<strong>Ask Fedora</strong> is a forum for Fedora users. Here you can speak to the community to get help with installing, using, customizing, and upgrading a system running Fedora."); ?></p>
        </div>
        <div class="column">
          <a href="https://askubuntu.com/" title="Ask Ubuntu" target="_blank"><img src="/images/more/askubuntu.png" alt="Ask Ubuntu"/></a>
          <p><?php print _("<strong>Ask Ubuntu</strong> is a question and answer site for Ubuntu users. Even for users of different distributions of GNU/Linux this can be a helpful resource for finding answers."); ?></p>
        </div>
      </div>

      <div class="more-section">
        <h2><?php print _("Learn and read more"); ?></h2>

        <div class="column">
          <a href="https://en.wikibooks.org/wiki/FLOSS_Concept_Booklet" title="The FLOSS concept booklet" target="_blank"><img src="/images/more/floss-booklet.png" alt="FLOSS Booklet"></a>
          <p><?php print _("A short, entertaining way to clarify thoughts about free, libre, \"open-source\" software."); ?></p>
        </div>
        <div class="column">
          <a href="https://www.fsf.org/" title="Free Software Foundation" target="_blank"><img src="/images/more/fsf.png" alt="FSF"></a>
          <p><?php print _("The Free Software Foundation defends and advocates the very concept of <a href=\"https://www.gnu.org/philosophy/free-sw.html\" rel=\"external\">free software</a> that gave birth to GNU/Linux."); ?></p>
        </div>
      </div>

      <br>

      <p class="italic centered"><?php print _("Note: these links are proposed as a recommendation. They are not commercial."); ?></p>
    </div>
  </article>
</main>

<?php $this->load_footer(); ?>
