<?php

class HTML {
    // define properties


    // constructor
    function __construct() {
        //
    }

    // define methods
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

    function load_header()
    {
        global $ggl;

        include INCLUDE_PATH.'header.php';
    }

    function load_footer($alt=null)
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

    function text($key, $default='')
    {
        global $ggl;

		print $ggl->get($key, $default);
    }

    function menu_switch_to_linux() {
        print "<div id=\"subheader\">";
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

    function menu_why_not_windows() {
        print "<div id=\"subheader\">";
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

    function stylesheet($url) {
        $modified = filemtime(BASE_PATH.$url);
        printf("<link rel=\"stylesheet\" type=\"text/css\" href=\"%s?%s\" />\n", $url, $modified);
    }

    function javascript($url) {
        if ( startswith($url, "http") ) {
            printf("<script type=\"text/javascript\" src=\"%s\"></script>\n", $url);
        }
        else {
            $modified = filemtime(BASE_PATH.$url);
            printf("<script type=\"text/javascript\" src=\"%s?%s\"></script>\n", $url, $modified);
        }
    }

    function is_current_language($lang_id) {
        global $ggl;

        if ($lang_id == $ggl->get('lang')) {
            return " id='is_current_language'";
        }
        else {
            return "";
        }
    }

    function current_page() {
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        $p = str_replace('.','/',$p);
        if ($p) {
            return $p.'/';
        }
        else {
            return "";
        }
    }

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

    function we_are_here($here) {
        $p = isset($_GET['p']) ? $_GET['p'] : NULL;
        if ($p == str_replace('/','.',$here)) {
            return "class='wehere'";
        }
    }

    function base_url($p=NULL, $return=0) {
        global $ggl;

        if (isset($p)) {
            $url = sprintf ("/%s/%s/", $ggl->get('lang'), $p);
        } else {
            $url = sprintf ("/%s/",$ggl->get('lang'));
        }

        if ($return) {
            return $url;
        } else {
            print $url;
        }
    }
}

?>
