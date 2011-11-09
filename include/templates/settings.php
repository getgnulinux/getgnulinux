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

# Settings for Piwik - real time web analytics. Enable this if you have Piwik
# installed on your web server (set 'piwik' to true). Set 'piwik_url' to your
# Piwik URL and set 'piwik_idsite' to the idsite of the website you are
# tracking in Piwik.
# Example:
# $ggl->config['piwik'] = true;
# $ggl->config['piwik_url'] = "getgnulinux.org/piwik/";
# $ggl->config['piwik_idsite'] = 1;
$ggl->config['piwik'] = false;
$ggl->config['piwik_url'] = "";
$ggl->config['piwik_idsite'] = 1;

# Flattr is the worlds first social micro-payment system. Set this option to
# true if you want to place a Flattr button on the site. You also need to
# set the Flattr URL.
$ggl->config['flattr'] = false;
$ggl->config['flattr_url'] = "http://flattr.com/thing/433154/get-GNULinux";

?>
