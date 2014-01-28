<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

# Override the Unix name of the current page.
$this->page_name = "not_found";

$this->load_header();

?>

<main role="main">
  <section>
    <div class="maxwidth">

    <h1><?php
    # translators: Title for the Page Not Found page. We like to add a bit of humour to this title :P
    print _("Doh! Page Not Found"); ?></h1>

    <p><?php
    # translators: The "AWOL" part is supposed to add some humour to the error message. Use your creativity to add some humour that's more suitable for your language.
    print _("Sorry, but we couldn't find the page you were looking for. Either that page doesn't exist or the web page went <abbr title=\"away without leave\">AWOL</abbr>."); ?></p>

    <h2><?php print _("Report broken link"); ?></h2>
    <p><?php
    # translators: Here, the %s placeholder simply puts a link to the bug tracker
    $p = _("If you found a broken link, please <a href=\"%s\">report it</a> so we can repair it. Thank you!"); printf($p, $ggl->get('tracker_url')); ?></p>

    <div class="button green">
        <a href="<?php $this->base_url(); ?>"><?php print _("Return to the Homepage"); ?></a>
    </div>

    </div>
  </section>
</main>

<?php $this->load_footer(); ?>
