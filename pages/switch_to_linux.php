<?php $this->load_header(); ?>

<div id="maincontent">

<h1><?php print _("Switch to Linux"); ?></h1>


<div id="contentlist">

<a class="odd" href="<?php $this->base_url('switch_to_linux/from_windows_to_linux'); ?>">
<img width="100" height="56" alt="Windows, Linux" src="/images/switch_to_linux/switch_to_linux.from_windows_to_linux.png"/>
<span class="header_2"><?php print _("From Windows to Linux"); ?></span>
<span><?php print _("Meet GNU/Linux in everyday use."); ?></span>
</a>

<a class="even" href="<?php $this->base_url('switch_to_linux/choose_a_distribution'); ?>">
<img width="100" height="56" alt="Distributions" src="/images/switch_to_linux/switch_to_linux.choose_a_distribution.png"/>
<span class="header_2"><?php print _("Choose a distribution"); ?></span>
<span><?php print _("Our selection for an easy choice."); ?></span>
</a>

<a class="odd" href="<?php $this->base_url('switch_to_linux/try_or_install'); ?>">
<img width="100" height="56" alt="Install" src="/images/switch_to_linux/switch_to_linux.try_or_install.png"/>
<span class="header_2"><?php print _("Try or install"); ?></span>
<span><?php print _("Install it! (it's easier than you think)"); ?></span>
</a>

</div><!-- end contentlist -->

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
