<?php
/*
 *  Copyright 2006-2008, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011-2015 GetGNULinux.org contributors <http://getgnulinux.org/credits/>
 *
 *  This file is part of Get GNU/Linux! <https://github.com/figure002/getgnulinux>
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

if ( !defined('GGL') ) {
    exit(1);
}

$pwd = dirname( __FILE__ );

// Load PEAR's HTTP2 package which provides HTTP2::negotiateLanguage.
require_once("$pwd/HTTP2.php");

// Load the required files.
require_once("$pwd/util.php");
require_once("$pwd/locale.php");
require_once("$pwd/ggl.php");
require_once("$pwd/html.php");
