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
switch (@$_GET['l']) {
    case 'en':
        define('LOCALE', 'en_EN');
        break;
    case 'nl':
        define('LOCALE', 'nl_NL');
        break;
    case 'fr':
        define('LOCALE', 'fr_FR');
        break;
    default:
        define('LOCALE', 'en_EN');
}

# Initialise gettext.
putenv("LANG=".LOCALE);
setlocale(LC_ALL, LOCALE);
bindtextdomain("messages", "_locale/");
textdomain("messages");

# Define global functions.
include(INCLUDE_PATH.'methods.php');

?>
