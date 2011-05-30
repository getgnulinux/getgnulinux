<?php

// Variables.
$base_path = "/home/serrano/htdocs/getgnulinux/";

// Set paths.
define('BASE_PATH', $base_path);
define('INCLUDE_PATH', $base_path.'_include/');

// Set the locale.
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

// Initialise gettext.
putenv("LANG=".LOCALE);
setlocale(LC_ALL, LOCALE);
bindtextdomain("messages", "_locale/");
textdomain("messages");

// Define global functions.
include(INCLUDE_PATH.'methods.php');

?>
