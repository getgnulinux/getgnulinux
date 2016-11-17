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

    <h1><?php print _("Link buttons"); ?></h1>

    <div class="page-intro">
      <p><?php print _("Help us spread free software!"); ?></p>
    </div>

    <p><?php print _("Simply copy/paste the code next to your favorite button into your website."); ?></p>

    <br/>

    <div id="link_buttons">
      <section>
        <div class="link_button">
          <img src="/links/en/80x15_20.png" alt="Get GNU/Linux" width="80" height="15" />
          <textarea class="copycode" rows="5" cols="45">&lt;a href=&quot;<?php $this->text('base_url'); ?>&quot; title=&quot;Get GNU/Linux - an alternative to Windows; free as in beer and speech&quot;&gt;&lt;img src=&quot;<?php $this->text('base_url'); ?>links/en/80x15_20.png&quot; alt=&quot;Get GNU/Linux&quot; width=&quot;80&quot; height=&quot;15&quot; border=&quot;0&quot;/&gt;&lt;/a&gt;</textarea>
        </div>
        <div class="link_button">
          <img src="/links/en/80x15_28.png" alt="Get GNU/Linux" width="80" height="15" />
          <textarea class="copycode" rows="5" cols="45">&lt;a href=&quot;<?php $this->text('base_url'); ?>&quot; title=&quot;Get GNU/Linux - an alternative to Windows; free as in beer and speech&quot;&gt;&lt;img src=&quot;<?php $this->text('base_url'); ?>links/en/80x15_28.png&quot; alt=&quot;Get GNU/Linux&quot; width=&quot;80&quot; height=&quot;15&quot; border=&quot;0&quot;/&gt;&lt;/a&gt;</textarea>
        </div>
        <div class="link_button">
          <img src="/links/en/80x15_25.png" alt="Get GNU/Linux" width="80" height="15" />
          <textarea class="copycode" rows="5" cols="45">&lt;a href=&quot;<?php $this->text('base_url'); ?>&quot; title=&quot;Get GNU/Linux - an alternative to Windows; free as in beer and speech&quot;&gt;&lt;img src=&quot;<?php $this->text('base_url'); ?>links/en/80x15_25.png&quot; alt=&quot;Get GNU/Linux&quot; width=&quot;80&quot; height=&quot;15&quot; border=&quot;0&quot;/&gt;&lt;/a&gt;</textarea>
        </div>
      </section>
      <section>
        <div class="link_button">
          <img src="/links/en/horn_125x50_2.png" alt="Get GNU/Linux" width="125" height="50" />
          <textarea class="copycode" rows="5" cols="45">&lt;a href=&quot;<?php $this->text('base_url'); ?>&quot; title=&quot;Get GNU/Linux - an alternative to Windows; free as in beer and speech&quot;&gt;&lt;img src=&quot;<?php $this->text('base_url'); ?>links/en/horn_125x50_2.png&quot; alt=&quot;Get GNU/Linux&quot; width=&quot;125&quot; height=&quot;50&quot; border=&quot;0&quot;/&gt;&lt;/a&gt;</textarea>
        </div>
        <div class="link_button">
          <img src="/links/en/horn_125x50_3.png" alt="Get GNU/Linux" width="125" height="50" />
          <textarea class="copycode" rows="5" cols="45">&lt;a href=&quot;<?php $this->text('base_url'); ?>&quot; title=&quot;Get GNU/Linux - an alternative to Windows; free as in beer and speech&quot;&gt;&lt;img src=&quot;<?php $this->text('base_url'); ?>links/en/horn_125x50_3.png&quot; alt=&quot;Get GNU/Linux&quot; width=&quot;125&quot; height=&quot;50&quot; border=&quot;0&quot;/&gt;&lt;/a&gt;</textarea>
        </div>
        <div class="link_button">
          <img src="/links/en/horn_125x50_4.png" alt="Get GNU/Linux" width="125" height="50" />
          <textarea class="copycode" rows="5" cols="45">&lt;a href=&quot;<?php $this->text('base_url'); ?>&quot; title=&quot;Get GNU/Linux - an alternative to Windows; free as in beer and speech&quot;&gt;&lt;img src=&quot;<?php $this->text('base_url'); ?>links/en/horn_125x50_4.png&quot; alt=&quot;Get GNU/Linux&quot; width=&quot;125&quot; height=&quot;50&quot; border=&quot;0&quot;/&gt;&lt;/a&gt;</textarea>
        </div>
      </section>
    </div>

    <div id="usage">
    <h2><?php print _("Usage"); ?></h2>
    <p><?php print _("We kindly ask that these buttons be used only to point to <em>get GNU/Linux!</em> websites."); ?></p>
    </div>

    <div id="license">
    <h2><?php print _("Licensing"); ?></h2>
    <p><?php
    # translators: The link will automatically point to the "credits" page. Please leave the "#link_buttons" part as such; it is an internal link.
    $p = _("Some of these buttons contain material subjected to specific licenses. See the \"<a href=\"%s#link_buttons\">%s</a>\" page for details.");
    printf( $p, $this->base_url('credits',1), _("Credits") ); ?>
    </p></div>

    <div id="make_yours">
    <h2><?php print _("Make your own!"); ?></h2>
    <p><?php $p = _("Make your own buttons and maybe we can host them along ours! Our <a href=\"%s\">source files</a> (GIMP and Inkscape formats) might be a good starting point.");
    printf($p, "/links/shared_source_files.tar.gz"); ?></p>
    </div>

    </div>
  </section>
</main>

<?php $this->load_footer(); ?>
