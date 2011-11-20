<?php

# Please edit the following settings.

# The base URL of the website. Should start with http:// and end with a slash.
# Leave blank to auto detect the base URL.
# Example: "http://getgnulinux.org/"
$ggl->config['base_url'] = "";

# The URL of the getgnulinux.org blog.
# Default: "http://blog.getgnulinux.org/"
$ggl->config['blog_url'] = "http://blog.getgnulinux.org/";

# The URL where people can contact the getgnulinux team.
# Default: "http://blog.getgnulinux.org/contact/"
$ggl->config['contact_url'] = "http://blog.getgnulinux.org/contact/";

# The URL of the translation service.
# Default: "http://blog.getgnulinux.org/participate/"
$ggl->config['participate_url'] = "http://blog.getgnulinux.org/participate/";

# The URL of the translation service.
# Default: "http://blog.getgnulinux.org/participate/translation/"
$ggl->config['l10n_url'] = "http://blog.getgnulinux.org/participate/translation/";

# The URL where the getgnulinux project is maintained.
# Default: "https://launchpad.net/getgnulinux"
$ggl->config['project_url'] = "https://launchpad.net/getgnulinux";

# The URL of the bug tracker.
# Default: "https://bugs.launchpad.net/getgnulinux"
$ggl->config['tracker_url'] = "https://bugs.launchpad.net/getgnulinux";

# Absolute path to root html folder with trailing slash. Leave blank to auto
# detect the absolute path.
# Example: "/home/john/public_html/getgnulinux/"
$ggl->config['base_path'] = "";

# Settings for Piwik - real time web analytics.
# Set 'piwik' to TRUE to track visits with Piwik. You need to have Piwik
# installed.
# piwik_url: Your Piwik URL
# piwik_idsite: The site ID of the website you are tracking in Piwik.
# Example:
# $ggl->config['piwik'] = TRUE;
# $ggl->config['piwik_url'] = "getgnulinux.org/piwik/";
# $ggl->config['piwik_idsite'] = 1;
$ggl->config['piwik'] = FALSE;
$ggl->config['piwik_url'] = "";
$ggl->config['piwik_idsite'] = 1;

# Flattr is the worlds first social micro-payment system.
# Set 'flattr' to TRUE to add a Flattr button to the site.
# flattr_url: The Flattr button URL for your thing (check button code for URL).
# flattr_button_style: large | compact
$ggl->config['flattr'] = FALSE;
$ggl->config['flattr_url'] = "";
$ggl->config['flattr_button_style'] = "compact";

# AddThis helps you integrate sharing tools into your site, spread your
# content, and drive social traffic.
# Set 'addthis' to TRUE to add an AddThis widget to the site.
# addthis_code: Path to a file containing the code snippet from addthis.com.
$ggl->config['addthis'] = FALSE;
$ggl->config['addthis_code'] = "addthis.php";

?>
