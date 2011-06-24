<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $this->text('lang'); ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Alternate languages: -->
    <?php
    foreach ($ggl->locale_info as $id => $items) {
        printf("<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"/%s/\" title=\"%s\" />\n",
            $items[1], $id, $id, $items[3]);
    }
    ?>

    <link rel="copyright" type="text/html" title="Copyright notice for this website." href="<?php $this->base_url('legal'); ?>" hreflang="en" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <?php $this->stylesheet('/style/language.css'); ?>
    <?php $this->stylesheet('/style/maincss-ltr.css'); ?>

    <title><?php print _("get GNU/Linux!"); ?></title>

    <meta name="description" content="<?php print _("Get GNU/Linux! A simple, clear website about Linux. | What is Linux? | Why not Windows? | Tips to make the switch"); ?>"/>
    <meta name="keywords" content="<?php print _("linux, gnu/linux, free software, software freedom, open-source, windows alternative, get linux, switch to linux"); ?>" />

    <?php
    $p = isset($_GET['p']) ? $_GET['p'] : NULL;
    switch ($p) {
        case 'linux':
            $this->stylesheet('/style/linux-ltr.css');
            break;
        case 'linux.linux_faq':
            $this->stylesheet('/style/linux.linux_faq-ltr.css');
            break;
        case 'linux.misunderstanding_free_software':
            $this->stylesheet('/style/linux.misunderstanding_free_software-ltr.css');
            print '<script type="text/javascript" src="/style/toggleanswers.js"></script>';
            break;
        case 'linux.screenshots':
            $this->stylesheet('/style/linux.screenshots-ltr.css');
            break;
        case 'windows':
            $this->stylesheet('/style/windows-ltr.css');
            break;
        case 'windows.restrictions':
            $this->stylesheet('/style/windows-ltr.css');
            $this->stylesheet('/style/windows.restrictions-ltr.css');
            break;
        case 'windows.restrictions.further_details':
            $this->stylesheet('/style/windows.restrictions.further_details-ltr.css');
            break;
        case 'windows.what_about_choice':
            $this->stylesheet('/style/windows.what_about_choice-ltr.css');
            break;
        case 'windows.what_about_source_code':
            $this->stylesheet('/style/windows.what_about_source_code-ltr.css');
            break;
        case 'windows.stand_for_a_free_society':
            $this->stylesheet('/style/windows.stand_for_a_free_society-ltr.css');
            break;
        case 'switch_to_linux':
            $this->stylesheet('/style/switch_to_linux-ltr.css');
            break;
        case 'switch_to_linux.choose_a_distribution':
            $this->stylesheet('/style/switch_to_linux.choose_a_distribution-ltr.css');
            break;
        case 'switch_to_linux.from_windows_to_linux':
            $this->stylesheet('/style/switch_to_linux.from_windows_to_linux-ltr.css');
            break;
        case 'switch_to_linux.try_or_install':
            $this->stylesheet('/style/switch_to_linux.try_or_install-ltr.css');
            break;
        case 'more':
            $this->stylesheet('/style/more-ltr.css');
            break;
        case 'link_buttons':
            print '<script src="/style/togglecodetext.js" type="text/javascript"></script>';
            break;

        default:
            $this->stylesheet('/style/index-ltr.css');
    }
    ?>

    <!--[if lte IE 6]>
    <script src="/style/ie_translation_menu.js" type="text/javascript"></script>
    <?php $this->stylesheet('/style/ie6-ltr.css'); ?>
    <![endif]-->

    <!--[if IE 7]>
    <?php $this->stylesheet('/style/ie7-ltr.css'); ?>
    <![endif]-->
</head>

<body>
<div class="accessibility">
    <a href="#maincontent"><?php print _("skip to content"); ?></a>
</div>

<div id="just_for_ie7">
<div id="translations">
<div id="language_menu"><span id="language_menu_text"><?php print _("Alternate languages"); ?></span></div>

<ul>
<?php
foreach ($ggl->locale_info as $id => $items) {
    printf("<li%s><a href=\"/%s/%s\" hreflang=\"%s\"><img src=\"/images/flags/%s.gif\" alt=\"%s\" /> <span class=\"language\" dir=\"%s\">%s</span></a></li>\n",
        $this->is_current_language($id), $id, $this->current_page(), $id, $items[4], $id, $items[1], $items[2]);
}
?>
</ul>

</div><!-- end translations -->
</div><!-- end just_for_ie7 -->

<div class="wrap_top">
<div class="wrap_right">
<div class="wrap_bottom">
<div class="wrap_left">
<div class="topl"></div>
<div class="topr"></div>

<div id="mainbody">

<div id="header">

<?php
$p = isset($_GET['p']) ? $_GET['p'] : NULL;
if ($p == "home" || !$p) {
?>
    <div id="header_picture_homepage">
	    <h1><?php print _("get GNU/Linux!"); ?></h1>
    </div>
<?php
}
else {
?>
    <div id="header_picture">
        <h1><a href="<?php $this->base_url(); ?>" title="home page"><?php print _("get GNU/Linux!"); ?></a></h1>
    </div>
<?php } ?>

</div><!-- end header -->

<div id="top_bar" class="grid_9">
<div class="left">
<div class="menu-globalnav-container">
    <ul>
    <?php
    $menu_items = array('linux' => _("What is Linux?"),
        'windows' => _("Why not Windows"),
        'switch_to_linux' => _("Switch to Linux"),
        'more' => _("More"),
        );

    foreach ($menu_items as $id => $title) {
        printf("<li%s><a href=\"%s\">%s</a></li>\n",
            $this->is_current_menu_item($id), $this->base_url($id,1), $title);
    }
    ?>
    </ul>
</div>
</div>
</div>
