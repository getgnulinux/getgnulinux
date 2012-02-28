<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
$this->load_top_bar();

?>

<div id="maincontent" class="windows">

<h1><?php print _("Why not Windows"); ?></h1>

<p><?php
# i18: This is the catcher-phrase for the Windows page. Exact translation is not required, the goal is to attract attention and set the tone of the page.
print _("Windows and Office work fine &mdash; Why worry about it?"); ?></p>


<div class="paragraph">

<h2><a href="<?php $this->base_url('windows/restrictions'); ?>" title="Restrictions in a proprietary software license."><?php print _("Restrictions"); ?></a></h2>

<p><a href="<?php $this->base_url('windows/restrictions'); ?>" title="Restrictions in a proprietary software license."><img src="/images/windows/windows.windows1.png" width="115" height="95" alt="<?php print _("Restrictions"); ?>"/></a>
<?php
# i18: You may add emphasis ('em' tags) around the word 'licensed' if you wish
print _("A legal copy of Windows is expensive, but what do you get? Windows and Office are licensed, not sold."); ?></p>
<p><?php print _("By using these products, we have to agree to <strong>a number of harsh restrictions</strong>. For most Windows licenses, you can't keep the software when you change the hardware. You sometimes can't even give your software away. Who can run the software? On which computer? What can you do with it? The list of restrictions is long and some items are outrageous."); ?></p>

<div class="read_article">
<a href="<?php $this->base_url('windows/restrictions'); ?>"><?php print _("read our full article:"); ?> <?php print _("Restrictions"); ?></a>
</div><!-- end read article -->

</div><!-- end paragraph -->


<div class="paragraph">

<h2><a href="<?php $this->base_url('windows/what_about_choice'); ?>" title="How Microsoft lock customers in."><?php print _("What about choice?"); ?></a></h2>
<p><a href="<?php $this->base_url('windows/what_about_choice'); ?>" title="How Microsoft lock customers in."><img src="/images/windows/windows.windows2.png" width="115" height="95" alt="<?php print _("What about choice?"); ?>"/></a>
<?php print _("Software should come without locks in it."); ?></p>
<p><?php print _("Why are Office documents difficult to export? Why are the formats continually changing? Why can you not even uninstall some programs? It might be that if you look for choice, Microsoft products aren't for you."); ?></p>

<div class="read_article">
<a href="<?php $this->base_url('windows/what_about_choice'); ?>"><?php print _("read our full article:"); ?> <?php print _("What about choice?"); ?></a>
</div><!-- end read article -->

</div><!-- end paragraph -->


<div class="paragraph">
<h2><a href="<?php $this->base_url('windows/what_about_source_code'); ?>" title="No source code means no trust and no security."><?php print _("No source code"); ?></a></h2>
<p><a href="<?php $this->base_url('windows/what_about_source_code'); ?>" title="No source code means no trust and no security."><img src="/images/windows/windows.windows3.png" width="115" height="95" alt="<?php print _("No source code"); ?>"/></a><?php print _("The source codes of Windows and Office are hidden, so, <strong>no one is allowed to understand</strong> how these programs work."); ?></p>
<p><?php print _("If you can't get a right to inspect source code (the human-readable inner workings of a program), you can't have someone correct flaws or evaluate how your privacy is protected for you."); ?></p>
<p><?php print _("And guess what? On software that comes with source code, viruses and spyware aren't effective, and security isn't bought on extra. The antivirus software industry, in which Microsoft is now a significant player, prefers you to use Windows."); ?></p>

<div class="read_article">
<a href="<?php $this->base_url('windows/what_about_source_code'); ?>"><?php print _("read our full article:"); ?> <?php print _("No source code"); ?></a>
</div><!-- end read article -->

</div><!-- end paragraph -->


<div class="paragraph"><h2><a href="<?php $this->base_url('windows/stand_for_a_free_society'); ?>" title="How software affects freedom in society."><?php print _("Stand for a free society"); ?></a></h2>
<p><a href="<?php $this->base_url('windows/stand_for_a_free_society'); ?>" title="<?php print _("How software affects freedom in society."); ?>"><img src="/images/windows/windows.windows4.png" width="115" height="95" alt="<?php print _("Stand for a free society"); ?>"/></a>
<?php
# i18: In your language, you might not need to make the distinction between price and freedom. Please do however express that price does not matter, in this sentence.
print _("A free society requires free software. Think of &quot;free&quot; as in freedom, not price: the freedoms to inspect, learn from, modify the software you use."); ?></p>
<p><?php print _("Computers are used to share ideas, culture and information. Without these freedoms over software, we risk losing control over what we share."); ?></p>
<p><?php print _("This is happening today. From plain annoying technologies such as Digital Restrictions Management (<strong>DRM</strong>) to downright frightening ones like <strong>Trusted Computing</strong>, everyone's ability to participate in culture is threatened."); ?></p>
<p><?php print _("If you have to give up your freedoms to use software, maybe you should not be happy with it."); ?></p>

<div class="read_article">
<a href="<?php $this->base_url('windows/stand_for_a_free_society'); ?>"><?php print _("read our full article:"); ?> <?php print _("Stand for a free society"); ?></a>
</div><!-- end read article -->

</div><!-- end paragraph -->


<div class="conclusion post-it">
<p><?php
# i18: This is the conclusion of the article.
$p = _("Many people find that Windows, an otherwise decent piece of software, <strong>withdraws so many rights</strong> from them, that it is not worth them using it. Mac&nbsp;OS is <a href=\"%s#mac_freedom\">not much better</a>, either."); printf($p, $this->base_url('linux/linux_faq',1)); ?></p>

<p><?php $p = _("If you find <a href=\"http://www.softwareliberty.com/\" title=\"what is freedom in software?\">free software</a> attractive, you might want to <a href=\"%s\" title=\"make the switch to Linux today!\">give Linux a try</a>."); printf($p, $this->base_url('switch_to_linux',1)); ?></p>
</div><!-- end conclusion -->


<div id="switcher">
<a href="<?php $this->base_url('switch_to_linux'); ?>" class="button nextbutton"><span class="next"><?php print _("next:"); ?> <span class="button_title"><?php print _("Switch to Linux"); ?></span></span></a>

<a href="<?php $this->base_url('linux'); ?>" class="button previousbutton"><span class="previous"><?php print _("previous:"); ?> <span class="button_title"><?php print _("What is Linux?"); ?></span></span></a>
</div><!-- end of switcher -->

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
