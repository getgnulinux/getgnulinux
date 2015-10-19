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
     * Set the current view.
     */
    function __construct() {
        $this->view = isset($_GET['p']) ? basename($_GET['p']) : 'home';
    }

    /**
     * Return the file path for a view.
     *
     * @param string $view The name of the view.
     * @return string The file path.
     */
    static function path_for_view($view) {
        return Util::fpath(sprintf("%s/lib/views/%s.php", ROOT, $view));
    }

    /**
     * Load the requested page.
     *
     * @uses GetGnuLinux $ggl
     * @uses string $this->view
     */
    function load_content() {
        global $ggl;

        $path = self::path_for_view($this->view);
        if ($path) {
            include $path;
            return;
        } else {
            header('HTTP/1.x 404 Not Found');
            include self::path_for_view('404');
            return;
        }
    }

    /**
     * Load the page header.
     */
    function load_header()
    {
        global $ggl;
        include Util::fpath(ROOT.'/templates/header.php');
    }

    /**
     * Load the page footer.
     */
    function load_footer()
    {
        global $ggl;
        include Util::fpath(ROOT.'/templates/footer.php');
    }

    /**
     * Print the value of a configuration key.
     *
     * @param string $key The value of which configuration key to print.
     * @param unknown $default The value to print if the configuration key
     *      does not exist.
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
     */
    function page_title()
    {
        global $ggl;

        if ( array_key_exists($this->view, $ggl->config['page_titles']) ) {
            print $ggl->config['page_titles'][$this->view] . " | " . $ggl->get('website_title');
        } else {
            print $ggl->get('website_title');
        }
    }

    /**
     * Print the page description.
     */
    function page_description()
    {
        global $ggl;
        $view = array_key_exists($this->view, $ggl->config['page_descriptions']) ? $this->view : 'default';
        print $ggl->config['page_descriptions'][$view];
    }

    /**
     * Print the chapter list for the "Swith to Linux" pages.
     */
    function list_chapter_sections($chapter)
    {
        global $ggl;
        print "<ul>\n";
        foreach ($ggl->sections[$chapter] as $path => $title)
        {
            printf("<li%s><a href=\"%s\">%s</a></li>\n",
                $this->we_are_here($path) ? ' class="active"' : '',
                $this->base_url($path, true),
                $title
            );
        }
        print "</ul>\n";
    }

    /**
     * Return $s1 when the language is left-to-right, $s2 otherwise.
     *
     * @param string $s1 The string.
     * @param string $s2 Alternative string.
     */
    function rtltr($a, $b) {
        global $ggl;
        return ($ggl->get('dir') == 'ltr') ? $a : $b;
    }

    /**
     * Print the versioned path for $path.
     *
     * This methods adds a version number to the end of the file path. This
     * is to force the visitor's browser to load the updated file when the
     * file changes. The version number that is added at the end is a part of
     * the file's MD5 sum.
     *
     * @param string $path Relative path to a file on the server.
     */
    function filever($path) {
        $hash = substr(md5_file(ROOT.$path), 0, 12);
        printf("%s?v=%s", $path, $hash);
    }

    /**
     * Return the localized path for the current page.
     *
     * This is used in language menu's to link to the same page in different
     * languages.
     *
     * @param string $lang If the ISO language is provided, a localised path
     *      is returned instead.
     * @return string The path to the current page.
     */
    function current_page_url($lang=null) {
        global $ggl;

        $l = $lang ? $lang : $ggl->get('lang');
        $p = str_replace('.', '/', $this->view);
        return empty($p) ? sprintf("%s/", $l) : sprintf("%s/%s/", $l, $p);
    }

    /**
     * Return TRUE if the page path is of the current page.
     *
     * If $fuzzy is TRUE, this function returns TRUE when $path matches
     * the start of the current page name.
     *
     * @param string $path The path of the page to check against.
     * @param bool $fuzzy Set to TRUE to enable fuzzy matching.
     * @return Returns TRUE if the path matches the current page,
     *         FALSE otherwise.
     */
    function we_are_here($path, $fuzzy=false) {
        if ($fuzzy)
            return Util::startswith($path, $this->view);
        else
            return $this->view === str_replace('/','.',$path);
    }

    /**
     * Print or return the path or URL for a page. If $path is omitted, the
     * path to the website root is returned (e.g. '/' or 'http://exampole.com/').
     *
     * @param string $path The path for the page (e.g. 'linux/screenshots').
     * @param bool $return If true, the path is returned instead of printed.
     * @param bool $base If true, the URL is returned instead of the relative
     *      path (e.g. 'http://getgnulinux.org/linux/screenshots/').
     * @return string The path or URL of a page.
     */
    function base_url($path=null, $return=false, $base=false) {
        global $ggl;

        $lang = $ggl->get('lang');
        $url = $base ? $ggl->get('base_url') : "/";

        # If the language is set in the URL, keep using it in links.
        $lang_id = isset($_GET['l']) ? $_GET['l'] : null;
        if ($lang_id && $lang_id === $lang) {
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
     * Print links to other languages.
     *
     * The links are printed as an inline summation list.
     *
     * @param array $locales A locales array.
     * @uses GetGnuLinux $ggl
     */
    function language_links($locales) {
        global $ggl;

        $links = array();
        foreach ($locales as $lang => $items) {
            list($locale, $native) = $items;
            $links[] = sprintf('<a href="/%s" hreflang="%s"><span dir="%s">%s</span></a>',
                $this->current_page_url($lang),
                $lang,
                $ggl->langdir($lang),
                $native);
        }

        for ($i=0; $i < count($links); $i++)
        {
            if ($i < count($links) - 2) {
                print $links[$i] . ", ";
            }
            else if ($i == count($links) - 2) {
                print $links[$i] . " and ";
            }
            else {
                print $links[$i];
            }
        }
    }
}
