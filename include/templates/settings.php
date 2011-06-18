<?php

# Please edit the following settings.

# The base URL of the website. Should start with http:// and end with a slash.
# Leave blank to auto detect the base URL.
# Example:
# $ggl->conf['base_url'] = "http://getgnulinux.org/";
$ggl->conf['base_url'] = "";

# Absolute path to root html folder with trailing slash. Leave blank to auto
# detect the absolute path.
# Example:
# $ggl->conf['base_path'] = "/home/john/public_html/getgnulinux/";
$ggl->conf['base_path'] = "";

# Settings for Piwik - real time web analytics. Enable this if you have Piwik
# installed on your webserver (set 'piwik' to true). Set 'piwik_url' to your
# Piwik URL and set 'piwik_idsite' to the idsite of the website you are
# tracking in Piwik.
# Example:
# $ggl->conf['piwik'] = true;
# $ggl->conf['piwik_url'] = "getgnulinux.org/piwik/";
# $ggl->conf['piwik_idsite'] = 1;
$ggl->conf['piwik'] = false;
$ggl->conf['piwik_url'] = "";
$ggl->conf['piwik_idsite'] = 1;

?>
