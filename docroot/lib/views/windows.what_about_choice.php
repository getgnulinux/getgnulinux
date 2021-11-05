<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<main>
  <div class="container">
    <article>
      <header>
        <h1 class="windows_section_h1"><?php print _("What about choice?"); ?></h1>

        <div class="page-intro">
          <p><?php print _("Microsoft works hard to make sure their users stay locked into their products."); ?></p>
        </div>
      </header>

      <div class="card-panel card-panel--quote amber lighten-4">
        <blockquote>
          <p><?php
          # TRANSLATORS: This is a quote from Bill Gates at the start of the article.
          print _("About 3 million computers get sold every year in China, but people don't pay for the software."); ?></p>
          <p><?php print _("Someday they will, though. As long as they are going to steal it [sic], we want them to steal ours. They'll get sort of addicted, and then we'll somehow figure out how to collect sometime in the next decade."); ?></p>
          <footer>
            Bill Gates, <cite><a href="https://web.archive.org/web/20070312044716/http://news.com.com/2100-1023-212942.html" rel="external">Gates, Buffett a bit bearish</a></cite>
          </footer>
        <blockquote>
      </div>

      <section>
        <h2 id="standards_that_change"><?php print _("Standards that change all the time"); ?></h2>
        <p><?php print _("Sticking to Microsoft standards is not an easy job &ndash; unless you can afford to upgrade very often. Ever tried to work on the same <code>.doc</code> file with both an Office 95 and an Office 97 computer? You'll know what we mean."); ?></p>
        <p><?php print _("Microsoft owns the Office file formats: <strong>they change them with every new Office version</strong> and have no obligation to keep them backwards-compatible. Saved your presentation as a <code>.ppt</code> file? If you give up using Microsoft Office next year, you'll have to rely on other communities to reverse-engineer the format, to be able to access and modify your own work."); ?></p>
      </section>

      <section>
        <h2 id="cant_remove_programs"><?php print _("Default programs you can't uninstall"); ?></h2>
        <p><?php print _("Don't want Windows Media Player on your computer? Don't use Internet Explorer anymore? <strong>You can't uninstall these programs</strong>. They previously worked on a standalone basis, but have been intrinsically linked with Windows &ndash; so they come in with every PC and no one can get rid of them."); ?></p>
      </section>

      <section>
        <h2 id="monopolistic_practices"><?php print _("Monopolistic practices"); ?></h2>
        <p><?php print _("Microsoft has a tight control over <abbr title=\"Original Equipment Manufacturer\">OEM</abbr>s (computer manufacturers) who ship their computers with Windows installed. This means that no program competing with Microsoft products, be it <a href=\"https://www.videolan.org/vlc/\" rel=\"external\">multimedia player</a>, <a href=\"https://www.mozilla.org/firefox/new/\" rel=\"external\">web browser</a>, <a href=\"https://www.libreoffice.org/\" rel=\"external\">office suite</a>, <a href=\"https://www.pidgin.im/\" rel=\"external\">instant messaging program</a> or other, will come pre-installed on most computers you can buy."); ?></p>
        <p><?php print _("It is a good thing to propose a wide range of software and services like Microsoft do; however, designing and combining them to shut users from non-Microsoft peers is unethical. It's not technically hard to adopt more open formats. But it means your customers are <em>free to choose what they do with their work</em> &ndash; Microsoft isn't there yet."); ?></p>
      </section>
    </article>

    <br>

    <aside>
      <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('windows'); ?>">
        <?php print _("Why not Windows"); ?>
        <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">expand_less</i>
      </a>
    </aside>

    <br>

  </div>
</main>

<?php $this->load_footer(); ?>
