<?php
/******************************************************************************
 *  Copyright 2006-2008, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011, Launchpad getgnulinux Team
 *
 *  This file is part of Get GNU/Linux! <https://launchpad.net/getgnulinux>
 *
 *  GGL is free software: you can redistribute it and/or modify it under
 *  the terms of the GNU Affero General Public License as published by the
 *  Free Software Foundation, either version 3 of the License, or any later
 *  version.
 *
 *  GGL is distributed in the hope that it will be useful, but WITHOUT
 *  ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 *  FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public
 *  License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with GGL. If not, see <http://www.gnu.org/licenses/>.
 *
 *****************************************************************************/

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
