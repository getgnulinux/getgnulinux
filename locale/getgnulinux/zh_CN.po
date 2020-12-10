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
     * @return string Canonicalized file path of the view, or NULL if the path
     * is invalid.
     */
    static function path_for_view($view) {
        return Util::safe_path(sprintf("%s/lib/views/%s.php", ROOT, $view));
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

        if ($path !== null) {
            include $path;
        }
        else {
            header('HTTP/1.x 404 Not Found');
            include self::path_for_view('404');
        }
    }

    /**
     * Load the page header.
     */
    function load_header() {
        global $ggl;
        include Util::safe_path(ROOT.'/templates/header.php');
    }

    /**
     * Load the page footer.
     */
    function load_footer() {
        global $ggl;
        include Util::safe_path(ROOT.'/templates/footer.php');
    }

    /**
     * Print the value of a configuration key.
     *
     * @param string $key The value of which configuration key to print.
     * @param unknown $default The value to print if the configuration key
     *      does not exist.
     */
    function text($key, $default='') {
        global $ggl;
        print $ggl->get($key, $default);
    }

    /**
     * Return the bare page title.
     */
    function bare_page_title($fallback=null) {
        global $ggl;

        if (array_key_exists($this->view, $ggl->config['page_titles'])) {
            return $ggl->config['page_titles'][$this->view];
        }

        return $fallback;
    }

    /**
     * Return the page title.
     */
    function page_title() {
        global $ggl;

        $site_name = $ggl->get('website_title');
        $page_title = $this->bare_page_title();

        if ($page_title !== null) {
            return sprintf("%s | %s", $page_title, $site_name);
        }

        return $site_name;
    }

    /**
     * Return the current page description.
     */
    function page_description() {
        global $ggl;

        $view = array_key_exists($this->view, $ggl->config['page_descriptions']) ?
            $this->view : 'default';

        return $ggl->config['page_descriptions'][$view];
    }

    function nav_link($id, $page, $title) {
      printf('<li id="%s" class="waves-effect waves-light %s"><a href="%s">%s</a>',
        $id,
        $this->we_are_here($page, true) ? 'active' : '',
        $this->get_base_url($page),
        $title);
    }

    function sidenav_link($page, $title) {
      printf('<li class="%s"><a class="waves-effect" href="%s">%s <i class="material-icons %s">chevron_right</i></a>',
        $this->we_are_here($page, true) ? 'active' : '',
        $this->get_base_url($page),
        $title,
        $this->rtltr("right", "left")
      );
    }

    /**
     * Print the chapter list for the "Swith to GNU/Linux" pages.
     */
    function list_chapter_sections($chapter) {
        global $ggl;
        foreach ($ggl->sections[$chapter] as $path => $title) {
            printf('<li%s><a href="%s">%s</a></li>',
                $this->we_are_here($path) ? ' class="active"' : '',
                $this->get_base_url($path),
                $title
            );
        }
    }

    /**
     * Return $a when the language is left-to-right, $b otherwise.
     *
     * @param string $a String A.
     * @param string $b String B.
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

    function current_page_url($lang=null) {
        global $ggl;

        return sprintf(
            "%s%s",
            $ggl->get('base_url'),
            $this->current_page_path($lang));
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
    function current_page_path($lang=null) {
        global $ggl;

        $view = $this->view === 'home' ? '' : $this->view;
        $view_rpl = str_replace('.', '/', $view);
        $path = empty($view_rpl) ? null : $view_rpl;

        if ($path === null && $lang === null) {
            return '';
        }
        else if ($path !== null && $lang !== null) {
            return sprintf("%s/%s/", $lang, $path);
        }
        else if ($lang === null) {
            return sprintf("%s/", $path);
        }
        else {
            return sprintf("%s/", $lang);
        }
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
        if ($fuzzy) {
            return Util::startswith($path, $this->view);
        }
        else {
          return $this->view === str_replace('/','.',$path);
        }
    }

    /**
     * Return the path or URL for a page. If $path is omitted, the path to the
     * website root is returned (e.g. '/' or 'http://example.com/').
     *
     * @param string $path The path for the page (e.g. 'linux/screenshots').
     * @return string The path or URL of a page.
     */
    function get_base_url($path=null) {
        global $ggl;

        $url = $ggl->get('base_url');
        $locale_override = $ggl->get('locale_override');

        if ($locale_override !== null) {
            # Add locale to the URL path.
            $url .= sprintf('%s/', $locale_override);
        }

        if ($path !== null) {
            $url .= $path;
        }

        return $url;
    }

    function base_url($path=null) {
        print $this->get_base_url($path);
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
        printf("%s%s", $ggl->get('base_url'), $file);
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

    function link_alternate_tags() {
        global $ggl;

        $template = "<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"%s\">\n";

        foreach ($ggl->get_locales('complete') as $lang => $v) {
            printf(
                $template,
                $ggl->langdir($lang),
                $lang,
                $this->current_page_url($lang));
        }
    }

    function og_tags() {
        global $ggl;

        $template = "<meta property=\"og:%s\" content=\"%s\">\n";
        $properties = array(
            'type' => 'website',
            'site_name' => $ggl->get('website_title'),
            'title' => $this->bare_page_title($ggl->get('website_title')),
            'description' => $this->page_description(),
            'url' => $this->current_page_url($ggl->get('locale_override')),
        );

        foreach ($properties as $property => $content) {
            printf($template, $property, $content);
        }

        foreach ($ggl->get_locales('complete') as $lang => $locale_arr) {
            $locale = explode('.', $locale_arr[0])[0];

            if ($lang === $ggl->get('lang')) {
                printf($template, 'locale', $locale);
            }
            else {
                printf($template, 'locale:alternate', $locale);
            }
        }
    }
}
