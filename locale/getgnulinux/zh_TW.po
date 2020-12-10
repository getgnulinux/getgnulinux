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

$root = dirname( __FILE__ );
define('ROOT', $root);
define('GGL', true);

// Load the initialization script.
require_once("$root/lib/init.php");

$http = new HTTP2();
$ggl = new GGL();
$html = new HTML();

if ( is_file("$root/settings.php") ) {
    require_once("$root/settings.php");
} else {
    include("$root/templates/setup.php");
    exit(1);
}

$ggl->init();
$html->load_content();

exit(0);
