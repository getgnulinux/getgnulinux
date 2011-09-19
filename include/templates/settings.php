<?php

# Please edit the following settings.

# The base URL of the website. Should start with http:// and end with a slash.
# Leave blank to auto detect the base URL.
# Example: "http://getgnulinux.org/"
$ggl->conf['base_url'] = "";

# The URL of the getgnulinux.org blog.
# Default: "http://blog.getgnulinux.org/"
$ggl->conf['blog_url'] = "http://blog.getgnulinux.org/";

# The URL where people can contact the getgnulinux team.
# Default: "http://blog.getgnulinux.org/contact/"
$ggl->conf['contact_url'] = "http://blog.getgnulinux.org/contact/";

# The URL to the translation service.
# Default: "https://www.transifex.net/projects/p/getgnulinux/"
$ggl->conf['l10n_url'] = "https://www.transifex.net/projects/p/getgnulinux/";

# The URL where the getgnulinux project is maintained.
# Default: "https://launchpad.net/getgnulinux"
$ggl->conf['project_url'] = "https://launchpad.net/getgnulinux";

# Absolute path to root html folder with trailing slash. Leave blank to auto
# detect the absolute path.
# Example: "/home/john/public_html/getgnulinux/"
$ggl->conf['base_path'] = "";

# Settings for Piwik - real time web analytics. Enable this if you have Piwik
# installed on your web server (set 'piwik' to true). Set 'piwik_url' to your
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
