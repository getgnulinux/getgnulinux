<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Alternate languages: -->
	<link rel="alternate" type="text/html" dir="rtl" hreflang="ar" href="/ar/" title="احصل على هذه الصفحة باللغة العربية !" />
	<link rel="alternate" type="text/html" dir="ltr" hreflang="ca" href="/ca/" title="Traduïu aquesta pàgina a la llengua català!" />
	<link rel="alternate" type="text/html" dir="ltr" hreflang="es" href="/es/" title="¡Lee esta página en castellano!" />
	<link rel="alternate" type="text/html" dir="ltr" hreflang="fr" href="/fr/" title="Cette page en français" />
	<link rel="alternate" type="text/html" dir="ltr" hreflang="ru" href="/ru/" title="Просмотреть эту страницу на русский языке!" />
	<link rel="alternate" type="text/html" dir="ltr" hreflang="uk" href="/uk/" title="Переглянути цю сторінку на українська мові!" />
	<link rel="alternate" type="text/html" dir="ltr" hreflang="vi" href="/vi/" title="Xem trang này bằng tiếng Tiếng Việt !" />
    <link rel="alternate" type="text/html" dir="ltr" hreflang="nl" href="/nl/" title="Bekijk deze pagina in het Nderlands" />

    <link rel="copyright" type="text/html" title="Copyright notice for this website." href="../legal.gnulinuxmatters.org/index.html" hreflang="en" />
    <link rel="shortcut icon" type="image/x-icon" href="/_style/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/_style/maincss-ltr.css" />
    <title><?php print _("get GNU/Linux!"); ?></title>
    <meta name="description" content="Get GNU/Linux! A simple, clear website about Linux. | What is Linux? | Why not Windows? | Tips to make the switch"/>
    <meta name="keywords" content="linux, gnu/linux, free software, software freedom, open-source, windows alternative, get linux, switch to linux" />

    <link rel="stylesheet" type="text/css" href="/_language/language.css" />
    <link rel="stylesheet" type="text/css" href="/_style/maincss-ltr.css" />
    <?php
    $p = isset($_GET['p']) ? $_GET['p'] : NULL;
    switch ($p) {
        case 'linux':
            print '<link rel="stylesheet" type="text/css" href="/_style/linux-ltr.css" />';
            break;
        case 'linux.linux_faq':
            print '<link rel="stylesheet" type="text/css" href="/_style/linux.linux_faq-ltr.css" />';
            break;
        case 'linux.misunderstanding_free_software':
            print '<link rel="stylesheet" type="text/css" href="/_style/linux.misunderstanding_free_software-ltr.css" />';
            print '<script type="text/javascript" src="/_style/toggleanswers.js"></script>';
            break;
        case 'linux.screenshots':
            print '<link rel="stylesheet" type="text/css" href="/_style/linux.screenshots-ltr.css" />';
            break;
        case 'windows':
            print '<link rel="stylesheet" type="text/css" href="/_style/windows-ltr.css" />';
            break;
        case 'windows.restrictions':
            print '<link rel="stylesheet" type="text/css" href="/_style/windows.css" />';
            print '<link rel="stylesheet" type="text/css" href="/_style/windows-ltr.css" />';
            print '<link rel="stylesheet" type="text/css" href="/_style/windows.restrictions-ltr.css" />';
            break;
        case 'windows.restrictions.further_details':
            print '<link rel="stylesheet" type="text/css" href="/_style/windows.restrictions.further_details-ltr.css" />';
            break;
        case 'windows.what_about_choice':
            print '<link rel="stylesheet" type="text/css" href="/_style/windows.what_about_choice-ltr.css" />';
            break;
        case 'windows.what_about_source_code':
            print '<link rel="stylesheet" type="text/css" href="/_style/windows.what_about_source_code-ltr.css" />';
            break;
        case 'windows.stand_for_a_free_society':
            print '<link rel="stylesheet" type="text/css" href="/_style/windows.stand_for_a_free_society-ltr.css" />';
            break;
        case 'switch_to_linux':
            print '<link rel="stylesheet" type="text/css" href="/_style/switch_to_linux-ltr.css" />';
            break;
        case 'switch_to_linux.choose_a_distribution':
            print '<link rel="stylesheet" type="text/css" href="/_style/switch_to_linux.choose_a_distribution-ltr.css" />';
            break;
        case 'switch_to_linux.from_windows_to_linux':
            print '<link rel="stylesheet" type="text/css" href="/_style/switch_to_linux.from_windows_to_linux-ltr.css" />';
            break;
        case 'switch_to_linux.try_or_install':
            print '<link rel="stylesheet" type="text/css" href="/_style/switch_to_linux.try_or_install-ltr.css" />';
            break;
        case 'more':
            print '<link rel="stylesheet" type="text/css" href="/_style/more-ltr.css" />';
            break;

        default:
            print '<link rel="stylesheet" type="text/css" href="/_style/index-ltr.css" />';
    }
    ?>

    <!--[if lte IE 6]>
    <script src="/_style/ie_translation_menu.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/_style/ie6-ltr.css" type="text/css">
    <![endif]-->

    <!--[if IE 7]>
    <link rel="stylesheet" href="/_style/ie7-ltr.css" type="text/css">
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
    <li <?php id_is_current_language('ar'); ?>><a href="/ar/" hreflang="ar" title="الرئيسية"><span class="lang_code">ar</span> <span class="language" dir="rtl">العربية</span></a></li>
    <li <?php id_is_current_language('ca'); ?>><a href="/ca/" hreflang="ca" title="Inici"><span class="lang_code">ca</span> <span class="language" dir="ltr">català</span></a></li>
    <li <?php id_is_current_language('en'); ?>><a href="/" hreflang="en" title="Home"><span class="lang_code">en</span> <span class="language" dir="ltr">English</span></a></li>
    <li <?php id_is_current_language('es'); ?>><a href="/es/" hreflang="es" title="Inicio"><span class="lang_code">es</span> <span class="language" dir="ltr">castellano</span></a></li>
    <li <?php id_is_current_language('fr'); ?>><a href="/fr/" hreflang="fr" title="Accueil"><span class="lang_code">fr</span> <span class="language" dir="ltr">français</span></a></li>
    <li <?php id_is_current_language('ru'); ?>><a href="/ru/" hreflang="ru" title="Домой"><span class="lang_code">ru</span> <span class="language" dir="ltr">русский</span></a></li>
    <li <?php id_is_current_language('uk'); ?>><a href="/uk/" hreflang="uk" title="Додому"><span class="lang_code">uk</span> <span class="language" dir="ltr">українська</span></a></li>
    <li <?php id_is_current_language('vi'); ?>><a href="/vi/" hreflang="vi" title="Nhà"><span class="lang_code">vi</span> <span class="language" dir="ltr">Tiếng Việt</span></a></li>
    <li <?php id_is_current_language('nl'); ?>><a href="/nl/" hreflang="nl" title="Hoofdpagina"><span class="lang_code">nl</span> <span class="language" dir="ltr">Nederlands</span></a></li>
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
if ( !isset($_GET['p']) || $_GET['p'] == 'home' ) {
?>
    <div id="header_picture_homepage">
	    <img src="/_language/homepage_header.png" height="130" alt="Get GNU/Linux"/>
    </div>
<?php
}
else {
?>
    <div id="header_picture">
	    <a href="<?php base_url(); ?>" title="home page">
		    <img src="/_language/website_header.png" height="60" alt="GetGNULinux.org"/>
	    </a>
    </div>
<?php } ?>

<ul>
	<li id="menu_more"><a href="<?php base_url('more'); ?>"><?php print _("More"); ?></a></li>
	<li id="menu_switch_to_linux"><a href="<?php base_url('switch_to_linux'); ?>"><?php print _("Switch to Linux"); ?></a></li>
	<li id="menu_windows"><a href="<?php base_url('windows'); ?>"><?php print _("Why not Windows"); ?></a></li>
	<li id="menu_linux"><a href="<?php base_url('linux'); ?>"><?php print _("What is Linux?"); ?></a></li>
</ul>
</div><!-- end header -->

