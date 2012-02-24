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
 ******************************************************************************
 *  The text content is published under a Creative Commons
 *  Attribution-ShareAlike 3.0 License,
 *  Copyright 2006-2010, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011, Launchpad getgnulinux Team
 *
 *****************************************************************************/

/**
 * This is the HTML module for Get GNU/Linux!
 *
 * @author Serrano Pereira <serrano.pereira@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0.html GNU AGPL v3
 */

/**
 * Utilities for HTML generation.
 */
class HTML {

    /**
     * Load the requested page.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $_GET['p']
     * @uses BASE_PATH
     */
    function load_content()
    {
        global $ggl;

        if (isset($_GET['p'])) {
            $path = BASE_PATH.'pages/'.$_GET['p'].'.php';
            if (is_file($path)) {
                include $path;
                return;
            }
            else {
                include BASE_PATH.'pages/not_found.php';
                return;
            }
        }
        include BASE_PATH.'pages/home.php';
    }

    /**
     * Load the page header.
     *
     * @uses GetGnuLinux $ggl
     * @uses INCLUDE_PATH
     */
    function load_header()
    {
        global $ggl;

        include INCLUDE_PATH.'header.php';
    }

    /**
     * Load the page footer.
     *
     * @param string $alt Loads footer_{$alt}.php instead of the default
     *      footer.php.
     * @uses GetGnuLinux $ggl
     * @uses INCLUDE_PATH
     */
    function load_footer($alt=NULL)
    {
        global $ggl;

        if ($alt) {
            $file = sprintf('footer_%s.php', $alt);
            include INCLUDE_PATH.$file;
        }
        else {
            include INCLUDE_PATH.'footer.php';
        }
    }

    /**
     * Print the value of a configuration key.
     *
     * @param string $key The value of which configuration key to print.
     * @param unknown $default The value to print if the configuration key
     *      does not exist.
     * @uses GetGnuLinux $ggl
     */
    function text($key, $default='')
    {
        global $ggl;
		print $ggl->get($key, $default);
    }

    /**
     * Print the page title.
     *
     * @param string $key The value of which configuration key to print.
     * @param unknown $default The value to print if the configuration key
     *      does not exist.
     * @uses GetGnuLinux $ggl
     * @uses string $_GET['p']
     */
    function page_title()
    {
        global $ggl;
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        if ( !array_key_exists($p, $ggl->config['page_titles']) ) {
            print $ggl->get('website_title');
        }
        else {
            print $ggl->config['page_titles'][$p] . " | " . $ggl->get('website_title');
        }
    }

    /**
     * Print the page description.
     *
     * This page description is used in the <meta name="description"> tag in
     * each page's <head> tag.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $_GET['p']
     */
    function page_description()
    {
        global $ggl;
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        $p = !array_key_exists($p, $ggl->config['page_titles']) ? 'default' : $p;
        print $ggl->config['page_descriptions'][$p];
    }

    /**
     * Print the sub menu for the "Swith to Linux" pages.
     */
    function menu_switch_to_linux() {
        print "<div id=\"subheader\" class=\"post-it\">";
        printf ("<span class=\"title\"><a href=\"%s\">%s</a></span>", $this->base_url('switch_to_linux',1), _("Switch to Linux"));

        $items = array("switch_to_linux/from_windows_to_linux" => _("From Windows to Linux"),
            "switch_to_linux/choose_a_distribution" => _("Choose a distribution"),
            "switch_to_linux/try_or_install" => _("Try or install"),
            );

        print "<ul>";
        foreach ($items as $key => $title) {
            printf("<li %s><a href=\"%s\">%s</a></li>\n", $this->we_are_here($key), $this->base_url($key,1), $title);
        }
        print "</ul>";
        print "</div><!-- end of submenu -->";
    }

    /**
     * Print the sub menu for the "Why not Windows" pages.
     */
    function menu_why_not_windows() {
        print "<div id=\"subheader\" class=\"post-it\">";
        printf ("<span class=\"title\"><a href=\"%s\">%s</a></span>", $this->base_url('windows',1), _("Why not Windows"));

        $items = array("windows/restrictions" => _("Restrictions"),
            "windows/what_about_choice" => _("What about choice?"),
            "windows/what_about_source_code" => _("No source code"),
            "windows/stand_for_a_free_society" => _("Stand for a free society"),
            );

        print "<ul>";
        foreach ($items as $key => $title) {
            printf("<li %s><a href=\"%s\">%s</a></li>\n", $this->we_are_here($key), $this->base_url($key,1), $title);
        }
        print "</ul>";
        print "</div><!-- end of submenu -->";
    }

    /**
     * Print the footer menu for the "Why not Windows" pages.
     */
    function menu_foot_why_not_windows() {
        print "<div id=\"subheader_foot\">";
        printf ("<span class=\"title\"><a href=\"%s\">%s</a></span>", $this->base_url('windows',1), _("Why not Windows"));

        $items = array("windows/restrictions" => _("Restrictions"),
            "windows/what_about_choice" => _("What about choice?"),
            "windows/what_about_source_code" => _("No source code"),
            "windows/stand_for_a_free_society" => _("Stand for a free society"),
            );

        print "<ul>";
        foreach ($items as $key => $title) {
            printf("<li %s><a href=\"%s\">%s</a></li>\n", $this->we_are_here($key), $this->base_url($key,1), $title);
        }
        print "</ul>";
        print "</div><!-- end of submenu -->";
    }


    /**
     * Print "-rtl" if the text direction of the current language is right to
     * left.
     *
     * This method is used to add a suffix "-rtl" to the file name of an image
     * file.
     *
     * @uses GetGnuLinux $ggl
     */
    function rtl_suffix() {
        global $ggl;
        if ($ggl->get('dir') == 'rtl') {
            print '-rtl';
        }
    }

    /**
     * Print the versioned path for a stylesheet.
     *
     * This methods adds a version number to the end of the file path. This
     * is to force the visitor's browser to load the updated file if the
     * visitor previously visited the site. The version number that is added
     * at the end (?1319824075) is basically the last modification date of the
     * file.
     *
     * @uses BASE_PATH
     * @param string $url The path/URL to the CSS file.
     */
    function stylesheet($url) {
        $modified = filemtime(BASE_PATH.$url);
        printf("<link rel=\"stylesheet\" type=\"text/css\" href=\"%s?%s\" />\n", $url, $modified);
    }

    /**
     * Print the versioned path for a Javascript file.
     *
     * This methods adds a version number to the end of the file path. This
     * is to force the visitor's browser to load the updated file if the
     * visitor previously visited the site. The version number that is added
     * at the end (?1319824075) is basically the last modification date of the
     * file.
     *
     * @uses BASE_PATH
     * @param string $url The path/URL to the Javascript file.
     */
    function javascript($url) {
        if ( startswith($url, "http") ) {
            printf("<script type=\"text/javascript\" src=\"%s\"></script>\n", $url);
        }
        else {
            $modified = filemtime(BASE_PATH.$url);
            printf("<script type=\"text/javascript\" src=\"%s?%s\"></script>\n", $url, $modified);
        }
    }

    /**
     * Return " id='is_current_language'" if $lang_id is equal to the current
     * language.
     *
     * This is used in the language menu to mark the currently selected
     * language.
     *
     * @uses GetGnuLinux $ggl
     * @param string $lang_id The ISO language code to check against.
     * @return string " id='is_current_language'" if $lang_id is equal
     *      to the current language. If not, it returns an empty string.
     */
    function is_current_language($lang_id) {
        global $ggl;

        if ($lang_id == $ggl->get('lang')) {
            return " id='is_current_language'";
        }
        else {
            return "";
        }
    }

    /**
     * Return the path for the current page.
     *
     * This is used in the language menu to mark the currently selected
     * language.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $_GET['p']
     * @param string $lang If the ISO language is provided, a localised path
     *      is returned instead.
     * @return string The path to the current page.
     */
    function current_page($lang=NULL) {
        global $ggl;

        if ($lang) {
            $l = $lang;
        } else {
            $l = $ggl->get('lang');
        }

        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        $p = str_replace('.','/',$p);

        if ($p) {
            return sprintf("%s/%s/", $l, $p);
        } else {
            return sprintf("%s/", $l);
        }
    }

    /**
     * Return " class='current-menu-item'" if $page_id is equal to the current
     * page. Return " class='current-menu-subitem'" if $page_id is a subpage
     * of the current page.
     *
     * This is used for the sub menu's of pages. It can be used to mark the
     * current page in the menu.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $_GET['p']
     * @param string $lang_id The ISO language code to check against.
     * @return string " class='current-menu-item'" if $page_id is equal to the
     *      current page. Return " class='current-menu-subitem'" if $page_id
     *      is a subpage of the current page. If neither of those, an empty
     *      string is returned.
     */
    function is_current_menu_item($page_id) {
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        if ($p == $page_id) {
            return " class='current-menu-item'";
        }
        else if ( startswith($p, $page_id) ) {
            return " class='current-menu-subitem'";
        }
        else {
            return "";
        }
    }

    /**
     * Return "class='wehere'" if $here is equal to the current page.
     *
     * This is used for the menu in pages. It can be used to mark the
     * current page in the menu.
     *
     * @uses string $_GET['p']
     * @param string $here The path of the page to check against.
     * @return string "class='wehere'" if $here is equal to the current page.
     *      If not, an empty string is returned.
     */
    function we_are_here($here) {
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        if ($p == str_replace('/','.',$here)) {
            return "class='wehere'";
        }
        return "";
    }

    /**
     * Print or return the path or URL for a page. If $path is omitted, the
     * path to the website root is returned (e.g. '/' or 'http://getgnulinux.org/').
     *
     * @uses GetGnuLinux $ggl
     * @uses string $lang, set by locale_negotiate_language()
     * @param string $path The path for the page (e.g. 'linux/screenshots').
     * @param bool $return If true, the path is returned instead of printed.
     * @param bool $base If true, the URL is returned instead of the relative
     *      path (e.g. 'http://getgnulinux.org/linux/screenshots/').
     * @return string The path or URL of a page.
     */
    function base_url($path=NULL, $return=0, $base=0) {
        global $ggl, $lang;

        $url = "";
        # If the language is overridden in the URL, keep using it in links.
        $override = isset($_GET['l']) ? $_GET['l'] : NULL;
        if ($override && $override == $lang) {
            $url .= $lang.'/';
        }
        # If a page string is provided, add it to the URL.
        if ($path) {
            $url .= $path.'/';
        }
        # Add the base URL to the URL if required.
        if ($base) {
            $url = $ggl->get('base_url').$url;
        } else {
            $url = "/".$url;
        }
        # Return or print the URL.
        if ($return) {
            return $url;
        }
        print $url;
    }

    /**
     * Print the URL for a file.
     *
     * @uses GetGnuLinux $ggl
     * @param string $file The relative path to a file.
     */
    function url($file)
    {
        global $ggl;
        print $ggl->get('base_url').$file;
    }

    /**
     * Returns the path to a language-specific file $filename.
     *
     * @uses GetGnuLinux $ggl
     * @param string $fileName The filename of which to get the
     *      language-specific version.
     * @return string $path Path to the language-specific file.
     */
    function language_file($filename)
    {
        global $ggl;
        $path = sprintf("/images/locale/%s/%s", $ggl->get('lang'), $filename);
        if (!file_exists(BASE_PATH.$path)) {
            $path = sprintf("/images/locale/en/%s", $filename);
        }
        return $path;
    }

    /**
     * Shows the Flattr button.
     *
     * @uses GetGnuLinux $ggl
     */
    function flattr_button()
    {
        global $ggl;
        $rev = $ggl->get('flattr_button_style') == "compact" ? "rev=\"flattr button:compact\"" : "";
        print "<p><a class=\"FlattrButton\" style=\"display:none;\" " . $rev . " href=\"" . $ggl->get('base_url') . "\"></a></p>\n";
        print "<noscript><p><a href=\"" . $ggl->get('flattr_url') . "\"><img src=\"http://api.flattr.com/button/flattr-badge-large.png\" alt=\"Flattr this\" title=\"Flattr this\" style=\"border:none;\" /></a></p></noscript>\n";
    }

    /**
     * Shows the AddThis widget.
     *
     * @uses GetGnuLinux $ggl
     */
    function addthis_widget()
    {
        global $ggl;
        if (file_exists($ggl->get('addthis_code'))) {
            include($ggl->get('addthis_code'));
        } else {
            print "File ".$ggl->get('addthis_code')." doesn't exist.";
        }
    }
}

?>
