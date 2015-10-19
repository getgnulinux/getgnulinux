<?php
/*
 *  Copyright 2006-2008, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011-2012 Launchpad getgnulinux Team <https://launchpad.net/~getgnulinux>
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
 */

# Set the base path. This is used as a base path to locate files.
$root = dirname( __FILE__ );
define('ROOT', $root);

# Mark valid web server entry point.
define('GGL', true);

# Load required classes and methods.
require_once("$root/lib/init.php");

# Instantiate the base class.
$ggl = new GGL();

# Instantiate the HTML generator.
$html = new HTML();

# Load user settings from the settings file. If the settings file is not
# present, give the directions to create one.
if ( is_file("$root/settings.php") ) {
    require_once("$root/settings.php");
} else {
    include("$root/lib/setup.php");
    exit(1);
}

# Initialyze the base class.
$ggl->init();

# Generate the page.
$html->load_content();

# Succesful termination.
exit(0);
