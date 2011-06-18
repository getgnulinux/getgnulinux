<?php

# Please edit the following settings.

# The base URL of the website. Should start with http:// and end with a slash.
# Leave blank to auto detect the base URL.
# e.g. http://getgnulinux.org/
$base_url = "";

# Absolute path to root html folder with trailing slash. Leave blank to auto
# detect the absolute path.
# e.g. /home/john/public_html/getgnulinux/
$base_path = "";


# Users needn't edit below this line.
# -----------------------------------------------------------------------------

# Autodetect base url and base path.
$base_url = empty($base_url) ? 'http://'.$_SERVER['HTTP_HOST'].'/' : $base_url;
$base_path = empty($base_path) ? realpath(dirname(__FILE__)).'/' : $base_path;

# Set constants.
define('BASE_PATH', $base_path);
define('INCLUDE_PATH', $base_path.'_include/');
define('BASE_URL', $base_url);

# Set the locale.
# Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE'])
$locale = isset($_GET['l']) ? $_GET['l'] : NULL;
$supported_locales = array('ar' => 'ar_SA',
    'ca' => 'ca_AD',
    'en' => 'en_GB',
    'es' => 'es_ES',
    'fr' => 'fr_FR',
    'ru' => 'ru_RU',
    'uk' => 'uk_UA',
    'vi' => 'vi_VN',
    'nl' => 'nl_NL',
    );

if ( array_key_exists($locale, $supported_locales) ) {
    define('LOCALE', $supported_locales[$locale]);
}
else {
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
# Translation is looking for ./_locale/xx_YY/LC_MESSAGES/getgnulinux.mo now

?>
