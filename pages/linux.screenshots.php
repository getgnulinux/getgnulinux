<?php

$this->load_header();

# i18n: This is the description of the "ubuntu1.png" screenshot.
$ubuntu1_text = _("Firefox web browser");
# i18n: This is the description of the "ubuntu2.png" screenshot.
$ubuntu2_text = _("File manager and image browsing application are open, on standard desktop.");
# i18n: This is the description of the "ubuntu3.png" screenshot.
$ubuntu3_text = _("Evolution e-mail and calendar application.");

# i18n: This is the description of the "fedora1.png" screenshot.
$fedora1_text = _("GIMP image editing application, cropping a photo.");
# i18n: This is the description of the "fedora2.png" screenshot.
$fedora2_text = _("OpenOffice.org Writer open, editing a standard document.");
# i18n: This is the description of the "fedora3.png" screenshot.
$fedora3_text = _("Accessing applications in the <a href=\"http://gnome3.org/\">GNOME 3</a> desktop environment.");
# i18n: This is the text-only description of the "fedora3.png" screenshot.
$fedora3_text2 = _("Accessing applications in the GNOME 3 desktop environment.");

# i18n: This is the description of the "gnewsense1.png" screenshot.
$gnewsense1_text = _("Update manager open.");
# i18n: This is the description of the "gnewsense2.png" screenshot.
$gnewsense2_text = _("OpenOffice.org Calc open, showing an example spreadsheet.");
# i18n: This is the description of the "gnewsense3.png" screenshot.
$gnewsense3_text = _("Accessing applications");

?>

<div class="upbutton_section">
<a href="<?php $this->base_url('linux'); ?>" class="upbutton"><span class="up"><?php print _("back up:"); ?> <span class="button_title"><?php print _("What is Linux?"); ?></span></span></a>
</div>

<div id="maincontent" class="screenshots">

<h1><?php print _("What GNU/Linux looks like"); ?></h1>

<p><?php print _("Selected screenshots of distributions of GNU/Linux."); ?></p>
<p><?php print _("Keep in mind that Linux can look as frugal or exciting as you require; here are only everyday-user snapshots to show common tasks."); ?></p>


<a id="ubuntu" />
<div class="screenshot_even">
<a rel="screenshots_ubuntu" title="<?php print $ubuntu1_text; ?>" href="/images/screenshots/ubuntu1.png"><img height="150" src="/images/screenshots/h150px/ubuntu1.png" alt="Ubuntu Snapshot 1"/></a>
<p><em>Ubuntu:</em></p>
<p><?php print $ubuntu1_text; ?></p>
</div>

<div class="screenshot_even">
<a rel="screenshots_ubuntu" title="<?php print $ubuntu2_text; ?>" href="/images/screenshots/ubuntu2.png"><img height="150" src="/images/screenshots/h150px/ubuntu2.png" alt="Ubuntu Snapshot 2"/></a>
<p><em>Ubuntu:</em></p>
<p><?php print $ubuntu2_text; ?></p>
</div>

<div class="screenshot_even">
<a rel="screenshots_ubuntu" title="<?php print $ubuntu3_text; ?>" href="/images/screenshots/ubuntu3.png"><img height="150" src="/images/screenshots/h150px/ubuntu3.png" alt="Ubuntu Snapshot 3"/></a>
<p><em>Ubuntu:</em></p>
<p><?php print $ubuntu3_text; ?></p>
</div>


<a id="fedora" />
<div class="screenshot_odd">
<a rel="screenshots_fedora" title="<?php print $fedora1_text; ?>" href="/images/screenshots/fedora1.png"><img height="150" src="/images/screenshots/h150px/fedora1.png" alt="Fedora Snapshot 1"/></a>
<p><em>Fedora:</em></p>
<p><?php print $fedora1_text; ?></p>
</div>

<div class="screenshot_odd">
<a rel="screenshots_fedora" title="<?php print $fedora2_text; ?>" href="/images/screenshots/fedora2.png"><img height="150" src="/images/screenshots/h150px/fedora2.png" alt="Fedora Snapshot 2"/></a>
<p><em>Fedora:</em></p>
<p><?php print $fedora2_text; ?></p>
</div>

<div class="screenshot_odd">
<a rel="screenshots_fedora" title="<?php print $fedora3_text2; ?>" href="/images/screenshots/fedora3.png"><img height="150" src="/images/screenshots/h150px/fedora3.png" alt="Fedora Snapshot 3"/></a>
<p><em>Fedora:</em></p>
<p><?php print $fedora3_text; ?></p>
</div>


<a id="gnewsense" />
<div class="screenshot_even">
<a rel="screenshots_gnewsense" title="<?php print $gnewsense1_text; ?>" href="/images/screenshots/gnewsense1.png"><img height="150" src="/images/screenshots/h150px/gnewsense1.png" alt="gNewSense Snapshot 1"/></a>
<p><em>gNewSense:</em></p>
<p><?php print $gnewsense1_text; ?></p>
</div>

<div class="screenshot_even">
<a rel="screenshots_gnewsense" title="<?php print $gnewsense2_text; ?>" href="/images/screenshots/gnewsense2.png"><img height="150" src="/images/screenshots/h150px/gnewsense2.png" alt="gNewSense Snapshot 2"/></a>
<p><em>gNewSense:</em></p>
<p><?php print $gnewsense2_text; ?></p>
</div>

<div class="screenshot_even">
<a rel="screenshots_gnewsense" title="<?php print $gnewsense3_text; ?>" href="/images/screenshots/gnewsense3.png"><img height="150" src="/images/screenshots/h150px/gnewsense3.png" alt="gNewSense Snapshot 3"/></a>
<p><em>gNewSense:</em></p>
<p><?php print $gnewsense3_text; ?></p>
</div>

</div><!-- end maincontent -->

<div class="upbutton_section">
<a href="<?php $this->base_url('linux'); ?>" class="upbutton"><span class="up"><?php print _("back up:"); ?> <span class="button_title"><?php print _("What is Linux?"); ?></span></span></a>
</div>

<?php $this->load_footer(); ?>
