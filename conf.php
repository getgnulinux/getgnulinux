<?php

# Please edit the following settings.

# The base URL of the website. Should start with http:// and end with a slash.
# e.g. http://getgnulinux.org/
$base_url = "http://getgnulinux.no-ip.info/";

# Absolute path to root html folder with trailing slash. Leave blank to auto
# detect the absolute path.
# e.g. /home/john/public_html/getgnulinux/
$base_path = "";


# Users needn't edit below this line.
# -----------------------------------------------------------------------------

$base_path = empty($base_path) ? realpath(dirname(__FILE__)).'/' : $base_path;
define('BASE_PATH', $base_path);
define('INCLUDE_PATH', $base_path.'_include/');
define('BASE_URL', $base_url);

# Set the locale.
# Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE'])
$locale = isset($_GET['l']) ? $_GET['l'] : NULL;
switch ($locale) {
    case 'en':
        define('LOCALE', 'en_GB');
        break;
    case 'nl':
        define('LOCALE', 'nl_NL');
        break;
    case 'fr':
        define('LOCALE', 'fr_FR');
        break;
    default:
        # get the preferred locale of the http agent.

        define('LOCALE', 'en_GB');
}

# Define global functions.
include(INCLUDE_PATH.'methods.php');

# Initialize gettext
$gettext_domain = "getgnulinux";
# Set language.
putenv("LANG=".LOCALE);
setlocale(LC_ALL, LOCALE);
# Specify location of translation tables
bindtextdomain($gettext_domain, "_locale/");
# Choose domain
textdomain($gettext_domain);
# Translation is looking for ./_locale/xx_XX/LC_MESSAGES/getgnulinux.mo now

?>
