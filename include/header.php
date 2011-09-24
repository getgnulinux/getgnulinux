<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $this->text('lang'); ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- Alternate languages: -->
    <?php
    foreach ($ggl->config['locales'] as $id => $items) {
        printf("<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"/%s/\" title=\"%s\" />\n",
            $items[2], $id, $id, $items[4]);
    } ?>
    <title><?php $this->page_title(); ?></title>
    <link rel="copyright" type="text/html" title="Copyright notice for this website." href="<?php $this->base_url('legal'); ?>" hreflang="en" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <meta name="description" content="<?php $this->page_description(); ?>"/>
    <meta name="keywords" content="<?php print _("linux, gnu/linux, free software, software freedom, open-source, windows alternative, get linux, switch to linux"); ?>" />
    <?php $this->stylesheet('/style/main-ltr.css'); ?>
    <?php
    $p = isset($_GET['p']) ? $_GET['p'] : NULL;
    switch ($p) {
        case 'linux.misunderstanding_free_software':
            $this->javascript('/style/toggleanswers.js');
            break;
        case 'linux.screenshots':
            $this->javascript('http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
            $this->javascript('/style/fancybox/jquery.fancybox-1.3.4.pack.js');
            $this->stylesheet('/style/fancybox/jquery.fancybox-1.3.4.css');
            ?>
    <script type="text/javascript">
        $(document).ready(function() {

			$("a[rel=screenshots_ubuntu]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
                'overlayColor'		: '#000',
                'overlayOpacity'	: 0.8,
				'titlePosition' 	: 'outside',
			});

			$("a[rel=screenshots_fedora]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
                'overlayColor'		: '#000',
                'overlayOpacity'	: 0.8,
				'titlePosition' 	: 'outside',
			});

			$("a[rel=screenshots_gnewsense]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
                'overlayColor'		: '#000',
                'overlayOpacity'	: 0.8,
				'titlePosition' 	: 'outside',
			});

        });
    </script>
            <?php
            break;
        case 'link_buttons':
            $this->javascript('/style/togglecodetext.js');
            break;
    }
    ?>

    <style type="text/css">
    #language_menu_text {
        background: url("/images/flags/<?php print $ggl->get('country_code'); ?>.gif") center left no-repeat;
    }
    </style>

    <?php
    if ($ggl->get('dir') == 'rtl') {
        $this->stylesheet('/style/main-rtl.css');
    }
    ?>

    <!--[if lte IE 6]>
    <?php
    $this->javascript('/style/ie_translation_menu.js');
    $this->stylesheet('/style/ie6-ltr.css');
    ?>
    <![endif]-->

    <!--[if IE 7]>
    <?php
    $this->javascript('/style/ie_translation_menu.js');
    $this->stylesheet('/style/ie7-ltr.css');
    ?>
    <![endif]-->
</head>

<body>
<div class="accessibility">
    <a href="#maincontent"><?php print _("skip to content"); ?></a>
</div>

<div id="wrapper">

<div id="just_for_ie7">
<div id="translations">
<div id="language_menu"><span id="language_menu_text"><?php print _("Alternate languages"); ?></span></div>

<ul>
<?php
foreach ($ggl->config['locales'] as $id => $items) {
    printf("<li%s><a href=\"/%s/%s\" hreflang=\"%s\"><img src=\"/images/flags/%s.gif\" alt=\"%s\" /> <span class=\"language\" dir=\"%s\">%s</span></a></li>\n",
        $this->is_current_language($id),
        $id,
        $this->current_page(),
        $id,
        strtolower(substr($items[0], 3, 2)),
        $id,
        $items[2],
        $items[3]);
}
?>
</ul>

</div><!-- end translations -->
</div><!-- end just_for_ie7 -->

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
        <h1><a href="<?php $this->base_url(); ?>" title="<?php print _("home page"); ?>"><?php print _("get GNU/Linux!"); ?></a></h1>
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
            $this->is_current_menu_item($id),
            $this->base_url($id,1),
            $title);
    }
    ?>
    </ul>
</div>
</div>
</div>
