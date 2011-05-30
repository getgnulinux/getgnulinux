<?php load_header(); ?>

<div id="maincontent">

<a href="<?php base_url('linux'); ?>" title="What is Linux?">
<img class="main_pic" width="200" height="202"
     src="/_style/index.applications-ltr.jpg"
     alt="GNU/Linux applications"/></a>

<div id="text">

<h1><?php print _("Switch to Linux!"); ?></h1>

<p><?php print _("GNU/Linux, or simply <em>Linux</em>, is an alternative to Microsoft Windows. It is easy to use and gives more freedom to users. Anyone can install it: Linux is free as in freedom, and often available free of charge."); ?></p>
</div>

<div id="contentlist">

<a href="<?php base_url('linux'); ?>">
<img src="/_style/linux.png" alt="linux" width="35" height="35"/>
<span class="title"><?php print _("What is Linux?"); ?></span>
<span class="subtitle"><?php print _("Learn more about the free operating system"); ?></span>
</a>

<a href="<?php base_url('windows'); ?>">
<img src="/_style/windows.png" alt="windows" width="35"
     height="35"/>
<span class="title"><?php print _("Why not Windows"); ?></span>
<span class="subtitle"><?php print _("Why we should avoid using Microsoft Windows"); ?></span>
</a>

<a href="<?php base_url('switch_to_linux'); ?>">
<img src="/_style/switch.png" alt="switch" width="35"
     height="35"/>
<span class="title"><?php print _("Switch to Linux"); ?></span>
<span class="subtitle"><?php print _("Where to download and how to step into Linux"); ?></span>
</a>

</div><!-- end contentlist -->

</div><!-- end maincontent -->

<?php load_footer(); ?>
