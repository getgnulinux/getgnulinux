<?php
$this->load_header();
?>

<div id="maincontent" class="select_language">

<h1><?php print _("Select a language"); ?></h1>

<p><?php print _("<em>GetGNULinux.org</em> is available in the following languages:"); ?></p>

<div class="list_select_language three_columns">
<ul>
<?php
foreach ($ggl->get('locales') as $code => $items) {
    list($locale, $verbose, $verbose_long, $percent) = $items;
    if ($percent == 1) {
        printf("<li><a href=\"/%s\" hreflang=\"%s\" title=\"%s\"><span dir=\"%s\">%s</span></a></li>\n",
            $this->current_page($code),
            $code,
            $verbose_long,
            $ggl->get_lang_directionality($code),
            $verbose);
    }
}
?>
</ul>
</div>

<?php
// Show the following text if we failed to select a language through
// language negotiation.
if (!$lang) {
?>
<h2><?php print _("Check the language preferences in your browser"); ?></h2>
<p><?php print _("You got this language selection page because your browser did not report your language preferences to the server, or reported preferences that do not contain English."); ?></p>
<p><?php print _("If you understand English at all, you are encouraged to modify your browser's language preferences to include English. At the same time, check the preferences as a whole. You can find advice for several browsers in the <a href=\"http://www.debian.org/\">Debian</a> project <a href=\"http://www.debian.org/intro/cn\">instructions for setting language preferences</a>."); ?></p>
<p><?php print _("The instructions warn that if you wish to include a particular variant of a language, such as British English (<code>en-GB</code>), you should also have that language in general as an entry (English, <code>en</code>) in the list (after the more specific entry)."); ?></p>
<?php } ?>

<h2><?php print _("More languages"); ?></h2>
<p><?php $p = _("Our translators are working on the following languages. You can <a href=\"%s\" title=\"Translation\">help us</a> reach an audience in your language by helping out with the translations."); printf($p, $ggl->get('l10n_url')); ?></p>

<div class="list_select_language three_columns">
<ul>
<?php
foreach ($ggl->get('locales') as $code => $items) {
    list($locale, $verbose, $verbose_long, $percent) = $items;
    if ($percent < 1) {
        printf("<li id=\"lang-%s\"><a href=\"/%s\" hreflang=\"%s\" title=\"%s\"><span dir=\"%s\">%s</span> <span class=\"percent\">%s&#37;</span></a></li>\n",
            $code,
            $this->current_page($code),
            $code,
            $verbose_long,
            $ggl->get_lang_directionality($code),
            $verbose,
            $percent*100);
    }
}
?>
</ul>
</div>

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
