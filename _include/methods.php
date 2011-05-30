<?php

function locale_code() {
    return substr(LOCALE, 0, 2);
}

function load_content()
{
    if (isset($_GET['p'])) {
        $path = BASE_PATH.'_pages/'.$_GET['p'].'.php';
        if (is_file($path)) {
            include $path;
            return;
        }
        else {
            include BASE_PATH.'_pages/not_found.php';
            return;
        }
    }
    include BASE_PATH.'_pages/home.php';
}

function load_header()
{
    include INCLUDE_PATH.'header.php';
}

function load_footer()
{
    include INCLUDE_PATH.'footer.php';
}

function load_footer_simple()
{
    include INCLUDE_PATH.'footer_simple.php';
}

function startswith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function is_current_language($lang_id) {
    if ($lang_id == locale_code()) {
        return " id='is_current_language'";
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
    if (isset($p)) {
        $url = sprintf ("/%s/%s/", locale_code(), $p);
    } else {
        $url = sprintf ("/%s/",locale_code());
    }

    if ($return) {
        return $url;
    } else {
        print $url;
    }
}

function menu_switch_to_linux() {
    print "<div id=\"subheader\">";
    printf ("<span class=\"title\"><a href=\"%s\">Switch to Linux</a></span>", base_url('switch_to_linux',1));

    $items = array("switch_to_linux/from_windows_to_linux" => "From Windows to Linux",
        "switch_to_linux/choose_a_distribution" => "Choose a distribution",
        "switch_to_linux/try_or_install" => "Try or install",
        );

    print "<ul>";
    foreach ($items as $key => $title) {
        printf("<li %s><a href=\"%s\">%s</a></li>\n", we_are_here($key), base_url($key,1), $title);
    }
    print "</ul>";
    print "</div><!-- end of submenu -->";
}

function menu_why_not_windows() {
    print "<div id=\"subheader\">";
    printf ("<span class=\"title\"><a href=\"%s\">Why not Windows</a></span>", base_url('windows',1));

    $items = array("windows/restrictions" => "Restrictions",
        "windows/what_about_choice" => "What about choice?",
        "windows/what_about_source_code" => "No source code",
        "windows/stand_for_a_free_society" => "Stand for a free society",
        );

    print "<ul>";
    foreach ($items as $key => $title) {
        printf("<li %s><a href=\"%s\">%s</a></li>\n", we_are_here($key), base_url($key,1), $title);
    }
    print "</ul>";
    print "</div><!-- end of submenu -->";
}

function menu_foot_why_not_windows() {
    print "<div id=\"subheader_foot\">";
    printf ("<span class=\"title\"><a href=\"%s\">Why not Windows</a></span>", base_url('windows',1));

    $items = array("windows/restrictions" => "Restrictions",
        "windows/what_about_choice" => "What about choice?",
        "windows/what_about_source_code" => "No source code",
        "windows/stand_for_a_free_society" => "Stand for a free society",
        );

    print "<ul>";
    foreach ($items as $key => $title) {
        printf("<li %s><a href=\"%s\">%s</a></li>\n", we_are_here($key), base_url($key,1), $title);
    }
    print "</ul>";
    print "</div><!-- end of submenu -->";
}

?>
