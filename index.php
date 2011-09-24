<?php

$root = dirname( __FILE__ );

# Include some stuff.
require_once("$root/include/Methods.php");

require_once("$root/include/GetGnuLinux.php");
$ggl = new GetGnuLinux();

require_once("$root/include/HTML.php");
$html = new HTML();

if (is_file($root."/settings.php")) {
    require_once($root."/settings.php");
}
else {
    printf("The settings file (%s) is missing. Follow these steps to create one:
<ol>
    <li>Open a terminal (e.g. gnome-terminal or konsole);</li>
    <li>Change to the root folder with `<code>cd %s</code>'</li>
    <li>Run `<code>make config</code>' to create the settings file;</li>
    <li>Open settings.php in a text editor and change the settings where necessary;</li>
</ol>
Finally, reload this page.",
        $root."/settings.php",
        $root);
    die();
}

# Autodetect base url and base path.
$ggl->config['base_url'] = empty($ggl->config['base_url']) ? 'http://'.$_SERVER['HTTP_HOST'].'/' : $ggl->config['base_url'];
$ggl->config['base_path'] = empty($ggl->config['base_path']) ? realpath($root).'/' : $ggl->config['base_path'];

# Set some useful constants.
define('BASE_PATH', $ggl->get('base_path'));
define('INCLUDE_PATH', $ggl->get('base_path').'include/');
define('BASE_URL', $ggl->get('base_url'));

# Load the content.
$html->load_content();

?>
