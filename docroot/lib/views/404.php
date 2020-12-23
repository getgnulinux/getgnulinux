<?php
# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->view = "404";
$this->load_header();
?>

<main>
  <article>
    <div class="container">
      <header>
        <h1><?php # TRANSLATORS: Title for the Page Not Found page.
        print _("Page Not Found"); ?></h1>
        <div class="page-intro">
          <p><?php # TRANSLATORS: The "AWOL" part doesn't need to be translated literally.
          print _("Sorry, but we couldn't find the page you were looking for. Either that page doesn't exist or the web page went <abbr title=\"away without leave\">AWOL</abbr>."); ?></p>
        </div>
      </header>

      <section>
        <h2><?php print _("Report broken link"); ?></h2>
        <p><?php # TRANSLATORS: Here, the %s placeholder simply puts a link to the bug tracker.
        $p = _("If you found a broken link, please <a href=\"%s\" rel=\"external\">report it</a> so we can repair it. Thank you!"); printf($p, $ggl->get('tracker_url')); ?></p>
      </section>
    </div>
  <article>
</main>

<?php $this->load_footer(); ?>
