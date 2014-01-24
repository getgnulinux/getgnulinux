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
     * Constructor.
     *
     * Sets variables:
     * - $this->page_name, The Unix name of the current page.
     */
    function __construct() {
        # Get the Unix name of the current page.
        # Note: The superglobal $_GET is already decoded. Using urldecode()
        # on an element in $_GET could have unexpected and dangerous results.
        $this->page_name = isset($_GET['p']) ? $_GET['p'] : NULL;
    }

    /**
     * Load the requested page.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $this->page_name
     * @uses string ROOT
     */
    function load_content()
    {
        global $ggl;

        if ( isset($this->page_name) ) {
            $path = ROOT.'/pages/'.$this->page_name.'.php';
            if ( is_file($path) ) {
                include $path;
                return;
            } else {
                header('HTTP/1.x 404 Not Found');
                include ROOT.'/pages/not_found.php';
                return;
            }
        }
        include ROOT.'/pages/home.php';
    }

    /**
     * Load the page header.
     *
     * @uses GetGnuLinux $ggl
     * @uses string ROOT
     */
    function load_header()
    {
        global $ggl;

        include ROOT.'/include/templates/header.php';
    }

    /**
     * Load the navigation bar.
     */
    function load_navigation()
    {
    ?>
<div id="navigation">
    <div class="left">
        <div class="menu-globalnav-container">
            <ul>
<?php
$menu_items = array('#what-is-gnu-linux' => _("What is Linux?"),
'#why-not-windows' => _("Why not Windows"),
'#switch-to-gnu-linux' => _("Switch to Linux"),
'more' => _("More"),
);

foreach ($menu_items as $id => $title) {
printf("<li%s><a href=\"%s\">%s</a></li>\n",
    $this->is_current_menu_item($id),
    $this->base_url($id,1),
    $title);
}
?>
            </ul>
        </div>
    </div>
</div>
    <?php
    }

    /**
     * Load the page footer.
     *
     * @param string $alt Loads footer_{$alt}.php instead of the default
     *      footer.php.
     * @uses GetGnuLinux $ggl
     * @uses string ROOT
     */
    function load_footer($alt=null)
    {
        global $ggl;

        if ($alt) {
            $file = sprintf('footer_%s.php', $alt);
            include ROOT.'/include/templates/'.$file;
        } else {
            include ROOT.'/include/templates/footer.php';
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
     * @uses string $this->page_name
     */
    function page_title()
    {
        global $ggl;

        # Display the page title for the corresponding page.
        if ( array_key_exists($this->page_name, $ggl->config['page_titles']) ) {
            print $ggl->config['page_titles'][$this->page_name] . " | " . $ggl->get('website_title');
        } else {
            print $ggl->get('website_title');
        }
    }

    /**
     * Print the page description.
     *
     * This page description is used in the <meta name="description"> tag in
     * each page's <head> tag.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $this->page_name
     */
    function page_description()
    {
        global $ggl;
        $p = !array_key_exists($this->page_name, $ggl->config['page_descriptions']) ? 'default' : $this->page_name;
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
     * @uses string ROOT
     * @param string $url The path/URL to the CSS file.
     */
    function stylesheet($url) {
        $modified = filemtime(ROOT.$url);
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
     * @uses string ROOT
     * @param string $url The path/URL to the Javascript file.
     */
    function javascript($url) {
        if ( startswith($url, "http") ) {
            printf("<script type=\"text/javascript\" src=\"%s\"></script>\n", $url);
        }
        else {
            $modified = filemtime(ROOT.$url);
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
     * Return the localized path for the current page. If the current page is
     * 'select_language', return the path for the home page instead.
     *
     * This is used in language menu's to link to the same page in different
     * languages.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $this->page_name
     * @param string $lang If the ISO language is provided, a localised path
     *      is returned instead.
     * @return string The path to the current page.
     */
    function current_page($lang=null) {
        global $ggl;

        if ($lang) {
            $l = $lang;
        } else {
            $l = $ggl->get('lang');
        }

        $p = str_replace('.', '/', $this->page_name);

        if ($p && $p != 'select_language') {
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
     * @uses string $this->page_name
     * @param string $lang_id The ISO language code to check against.
     * @return string " class='current-menu-item'" if $page_id is equal to the
     *      current page. Return " class='current-menu-subitem'" if $page_id
     *      is a subpage of the current page. If neither of those, an empty
     *      string is returned.
     */
    function is_current_menu_item($page_id) {
        if ($this->page_name == $page_id) {
            return " class='current-menu-item'";
        }
        else if ( startswith($this->page_name, $page_id) ) {
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
     * @uses string $this->page_name
     * @param string $here The path of the page to check against.
     * @return string "class='wehere'" if $here is equal to the current page.
     *      If not, an empty string is returned.
     */
    function we_are_here($here) {
        if ($this->page_name == str_replace('/', '.', $here)) {
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
    function base_url($path=null, $return=0, $base=0) {
        global $ggl, $lang;

        if ($base) {
            $url = $ggl->get('base_url');
        } else {
            $url = "/";
        }

        # If the language is set in the URL, keep using it in links.
        $lang_id = isset($_GET['l']) ? $_GET['l'] : null;
        if ($lang_id && $lang_id == $lang) {
            $url .= $lang.'/';
        }

        # Construct the URL.
        if ($path) {
            $elements = explode('#', $path);

            if ( !empty($elements[0]) ) {
                $url .= $elements[0].'/';
            }

            if ( count($elements) == 2 ) {
                $url .= '#'.$elements[1];
            }
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
        if (!file_exists(ROOT.$path)) {
            $path = sprintf("/images/locale/en/%s", $filename);
        }
        return $path;
    }

    /**
     * Shows the Flattr button.
     *
     * @uses GetGnuLinux $ggl
     */
    function flattr_widget()
    {
        global $ggl;
        $rev = $ggl->get('flattr_button_style') == "compact" ? "rev=\"flattr button:compact\"" : "";
        print "<p><a class=\"FlattrButton\" style=\"display:none;\" " . $rev . " href=\"" . $ggl->get('base_url') . "\"></a></p>\n";
        print "<noscript><p><a href=\"" . $ggl->get('flattr_url') . "\"><img src=\"http://api.flattr.com/button/flattr-badge-large.png\" alt=\"Flattr this\" title=\"Flattr this\" style=\"border:none;\" /></a></p></noscript>\n";
    }

    /**
     * Print links to the translations.
     *
     * The links are printed as an inline summation list.
     *
     * @param integer $mode If set to 1, all translations are printed, 2 means
     *      only incomplete translations are printed, 3 means only complete
     *      languages are printed.
     * @uses GetGnuLinux $ggl
     */
    function links_to_translations($mode=1)
    {
        global $ggl;

        // Compose a list of links for completed translations.
        $complete = array();
        foreach ($ggl->get_locales() as $code => $items) {
            list($locale, $native) = $items;
            $bool = true;
            if ($mode == 3) {
                $bool = $ggl->lang_is_complete($code);
            }
            else if ($mode == 2) {
                $bool = !$ggl->lang_is_complete($code);
            }
            if ($bool) {
                if ($mode == 1 or $mode == 2) {
                    $link = "<a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a>";
                    $complete[] = sprintf($link,
                        $this->current_page($code),
                        $code,
                        $ggl->get_lang_directionality($code),
                        $native);
                }
                else {
                    $link = "<a href=\"/%s\" hreflang=\"%s\"><span dir=\"%s\">%s</span></a>";
                    $complete[] = sprintf($link,
                        $this->current_page($code),
                        $code,
                        $ggl->get_lang_directionality($code),
                        $native);
                }
            }
        }
        // Print the links for completed translations.
        for ($i=0; $i < count($complete); $i++) {
            if ($i < count($complete) - 2) {
                print $complete[$i] . ", ";
            }
            else if ($i == count($complete) - 2) {
                print $complete[$i] . " and ";
            }
            else {
                print $complete[$i];
            }
        }
    }
}

