<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();

?>

<div id="maincontent" class="select_language">

<h1>Select a language</h1>

<p>This website is translated into <?php $this->links_to_translations(3); ?>.</p>
<p>Partial translations are available in <?php $this->links_to_translations(2); ?>.</p>
<p>You can <a href="<?php print $ggl->get('l10n_url'); ?>" title="Translation">help with the translations</a> so we can reach an audience in your language.</p>

<?php
// Show the following text if we failed to select a language through language
// negotiation.
if (!$ggl->get('negotiated_lang')) {
?>
<h2>Check the language preferences in your browser</h2>
<p>Your browser did not report your language preferences to the server, or reported preferences that do not contain English.</p>
<p>If you understand English at all, you are encouraged to modify your browser's language preferences to include English. At the same time, check the preferences as a whole. You can find advice for several browsers in the <a href="http://www.debian.org/">Debian</a> project <a href="http://www.debian.org/intro/cn">instructions for setting language preferences</a>.</p>
<p>The instructions warn that if you wish to include a particular variant of a language, such as British English (<code>en-GB</code>), you should also have that language in general as an entry (English, <code>en</code>) in the list (after the more specific entry).</p>
<?php } ?>

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
