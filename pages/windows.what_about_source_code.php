<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
$this->load_top_bar();
$this->menu_why_not_windows();

?>

<div id="maincontent" class="windows_sub ul_clear_right what_about_source_code">


<h1 class="windows_section_h1"><?php
# i18n: the '<br/>' character is only here for paging purposes. It's probably safer to skip it.
print _("What about<br/>source code?"); ?></h1>

<div class="quote1"><div class="quote2"><div class="quote3">
<?php
# i18n: This is the quote from Stallman at the start of the article.
print _("You might say, \"How do I change this recipe to take out the salt?\" and the great chef would respond, \"How dare you insult my recipe, the child of my brain and my palate, by trying to tamper with it? You don't have the judgment to change my recipe and make it work right!\""); ?>
<span class="source"><span class="author">Richard Stallman,</span> <a href="<?php print _("http://www.gnu.org/philosophy/why-free.html"); ?>"><?php print _("Why Software Should Be Free"); ?></a></span>
</div></div></div>

<p><?php print _("The source code details the way a program works (it is effectively what programmers write). Without it no one can understand how the software is built."); ?><br/>
<?php print _("It does not matter if you can't read code: whether or not it is available <strong>directly affects any user</strong>."); ?></p>

<ul>
<li>

<h2 id="no_one_can_look"><?php print _("No one can look inside"); ?></h2>

<p><?php print _("Windows comes without its source code. More than that: all users must abide to the license term that says:"); ?></p>

<div class="keypart"><?php print _("You may not reverse engineer, decompile, or disassemble the software."); ?></div>

<p><?php print _("As such, it is illegal to work out how Windows or Microsoft Word are designed. It is even illegal to try. You are also forbidden to modify the program for any purpose."); ?></p>

<p><?php print _("This restriction in the license makes sure that <strong>Microsoft remain the sole organisation that understand how their products work</strong>. Windows is very much like a car that only the original manufacturer is allowed to service."); ?></p>
</li>
<li><h2 id="insecurity_means_business"><?php print _("Insecurity means business"); ?></h2>

<p><?php print _("Whenever a flaw in Windows is discovered, it is exploited, which results in trojans, viruses, spyware and the likes. <strong>Such nuisances delight the Windows security industry</strong>, including Microsoft, which develops various anti-virus protections with subscriptions."); ?></p>

<p><img src="/images/windows/windows.what_about_source_code.windowsonelivecare.png" height="69" width="200" alt="Windows LiveOne Care" />
<?php print _("It is a lucrative process to release flawed software <em>that no one is allowed to change</em>, and then selling protection services over it (anti-virus software doesn't correct flaws: it merely prevents viruses from exploiting them, if it is active and updated)."); ?></p>

<p><?php
# i18n: Please carefully leave the rel=nofollow argument, which avoids us increasing MS PR.
print _("Microsoft will today happily <a href=\"http://onecare.live.com/standard/en-us/purchase/default.htm\" rel=\"nofollow\">sell you their own protection over their own insecurities</a> &ndash; it sells the poisoned apple and its antidote, separately."); ?></p>

</li>
<li>

<h2 id="you_can_trust_free_software"><?php print _("You can trust free software"); ?></h2>

<p><?php print _("It comes as no surprise that proprietary software is severely lacking in terms of security, compared to software whose source code is freely available (including GNU/Linux)."); ?></p>

<p><?php print _("Free software means <strong>programmers can change the code</strong> to repair flaws. It means you can hire someone to really check how secure your software is. It means you can benefit from the contributions of a world-wide community to improve safety and reliability. Fifteen million users run GNU/Linux without an anti-virus, in complete safety. And the servers behind search engines and banks run on it too."); ?></p>

</li>
</ul>

<p><?php print _("Source code is the recipe for software. How could one improve on a meal with too much salt, if forbidden to look at the recipe used to cook it?"); ?></p>

<p><?php print _("Using Windows and Office requires us to <strong>not ask</strong> nor search for the source of the software. Only Microsoft developers can modify your program."); ?></p>

<p><?php
# i18n: Please note the conditionnal tense: we try to not be too harsh on the reader here ;-)
print _("Which would you rather trust: the package you are forbidden to study, or the package with the recipe?"); ?></p>

</div><!-- end of maincontent -->

<?php $this->menu_foot_why_not_windows(); ?>

<?php $this->load_footer(); ?>
