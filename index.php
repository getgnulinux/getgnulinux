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
define('ROOT', dirname( __FILE__ ));

# Include methods and instantiate some classes.
require_once(ROOT."/include/Methods.php");

require_once(ROOT."/include/GetGnuLinux.php");
$ggl = new GetGnuLinux();

require_once(ROOT."/include/HTML.php");
$html = new HTML();

# Check if the settings file is present.
if (is_file(ROOT."/settings.php")) {
    # Load user settings.
    require_once(ROOT."/settings.php");
}
# If not, give the directions to create one.
else {
?>
The settings file (<code><?php print ROOT."/settings.php"; ?></code>) is missing. Follow these steps to create one:
<ol>
    <li>Open a terminal window;</li>
    <li>Change to the root folder (<code>cd <?php print ROOT; ?></code>);</li>
    <li>Run <code>make config</code> to create the settings file (or manually copy it from <code><?php print ROOT; ?>/include/templates/settings.php</code>);</li>
    <li>Open settings.php in a text editor and change the settings where necessary.</li>
</ol>

Finally, make sure that Apache module <code>mod_rewrite</code> is enabled. Then reload this page.
<?php
    die();
}

# Initialyze GGL.
$ggl->init();

# Autodetect base url and base path.
$ggl->config['base_url'] = empty($ggl->config['base_url']) ? 'http://'.$_SERVER['HTTP_HOST'].'/' : $ggl->config['base_url'];
$ggl->config['base_path'] = empty($ggl->config['base_path']) ? realpath(ROOT).'/' : $ggl->config['base_path'];

# Set some useful constants.
define('BASE_PATH', $ggl->get('base_path'));
define('INCLUDE_PATH', $ggl->get('base_path').'include/');
define('BASE_URL', $ggl->get('base_url'));

# Load the content.
$html->load_content();

?>
