<?php

# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
$this->load_top_bar();
?>

<div id="maincontent" class="main_page">

<a href="<?php $this->base_url('linux'); ?>" title="What is Linux?">
<img class="main_pic" width="200" height="202"
     src="/images/index/index.applications<?php $this->rtl_suffix(); ?>.jpg"
     alt="GNU/Linux applications"/></a>

<div id="text">

<h1><?php print _("Switch to Linux!"); ?></h1>

<p><?php
# i18n: This is the very first sentence every visitor is going to read. Please pay great attention to making it sound great, we only have one try! =)
print _("GNU/Linux, or simply <em>Linux</em>, is an alternative to Microsoft Windows. It is easy to use and gives more freedom to users. Anyone can install it: Linux is free as in freedom, and often available free of charge."); ?></p>
</div>

<ul id="contentlist">
<li>
    <a href="<?php $this->base_url('linux'); ?>">
    <img src="/images/index/linux.png" alt="linux" width="35" height="35"/>
    <span class="title"><?php print _("What is Linux?"); ?></span>
    <span class="subtitle"><?php print _("Learn more about the free operating system"); ?></span>
    </a>
</li>
<li>
    <a href="<?php $this->base_url('windows'); ?>">
    <img src="/images/index/windows.png" alt="windows" width="35" height="35"/>
    <span class="title"><?php print _("Why not Windows"); ?></span>
    <span class="subtitle"><?php print _("Why we should avoid using Microsoft Windows"); ?></span>
    </a>
</li>
<li>
    <a href="<?php $this->base_url('switch_to_linux'); ?>">
    <img src="/images/index/switch<?php $this->rtl_suffix(); ?>.png" alt="switch" width="35" height="35"/>
    <span class="title"><?php print _("Switch to Linux"); ?></span>
    <span class="subtitle"><?php print _("Where to download and how to step into Linux"); ?></span>
    </a>
</li>
</ul><!-- end contentlist -->

</div><!-- end maincontent -->

<?php $this->load_footer(); ?>
