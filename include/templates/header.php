<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en-US" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir'); ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- alternate languages -->
    <?php
    $base_url = $ggl->get('base_url');
    foreach ($ggl->get_locales() as $code => $items) {
        list($locale, $native) = $items;
        if ( $ggl->lang_is_complete($code) ) {
            printf("<link rel=\"alternate\" type=\"text/html\" dir=\"%s\" hreflang=\"%s\" href=\"%s%s\" />\n",
                $ggl->get_lang_directionality($code),
                $code,
                $base_url,
                $this->current_page($code));
        }
    } ?>
    <!-- end alternate languages -->
    <title><?php $this->page_title(); ?></title>
    <link rel="copyright" type="text/html" title="Copyright notice for this website." href="<?php $this->url('legal/'); ?>" hreflang="en" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php $this->url('favicon.ico'); ?>" />
    <meta name="description" content="<?php $this->page_description(); ?>"/>
    <meta name="keywords" content="<?php print _("linux, gnu/linux, free software, software freedom, open-source, windows alternative, get linux, switch to linux"); ?>" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:700,400,300"/>
    <?php $this->stylesheet('/style/main-ltr.css'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <?php
    // Load page specific stylesheets and javascripts.
    switch ($this->page_name) {
        case null:
        case '':
            $this->javascript('/js/jquery.flexslider-min.js');
            $this->stylesheet('/style/flexslider.css');
        ?>
            <script type="text/javascript" charset="utf-8">
              $(window).load(function() {
                $('.flexslider').flexslider({
                    slideshow: false,
                    animation: "slide",
                });
              });
            </script>
        <?php
            break;

        case 'linux':
            $this->javascript('/js/jquery.flexslider-min.js');
            $this->stylesheet('/style/flexslider-screenshots.css');
        ?>
            <script type="text/javascript" charset="utf-8">
              $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "fade",
                });
              });
            </script>
        <?php
            break;

        case 'linux.misunderstanding_free_software':
            $this->javascript('/js/toggleanswers.js');
            break;

        case 'linux.screenshots':
            $this->javascript('/js/fancybox/jquery.fancybox-1.3.4.pack.js');
            $this->stylesheet('/js/fancybox/jquery.fancybox-1.3.4.css');
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

			$("a[rel=screenshots_trisquel]").fancybox({
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
    }

    // Load the Flattr javascript?
    if ( $ggl->get('flattr') ) {
        require_once(ROOT.'/include/widgets/Flattr.php');
    }
    // Show right-to-left specific styles?
    if ( $ggl->get('dir') == 'rtl' ) {
        $this->stylesheet('/style/main-rtl.css');
    }
    // For some languages italic text is not displayed properly. Disable
    // italics for selected languages.
    if ( $ggl->no_italics() ) {
        $this->stylesheet('/style/no-italics.css');
    }
    ?>
</head>

<body>

<header id="header">
    <nav role="navigation">
        <?php $this->load_navigation(); ?>
    </nav>
</header>
