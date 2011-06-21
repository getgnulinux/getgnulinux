<?php

class GetGnuLinux {
    // define properties
    var $conf = array('locale' => "en_GB",
        'gettext_domain' => "getgnulinux",
        'dir' => "ltr",
        );
    var $locale_info = array(
        'ar' => array("الرئيسية",'rtl',"العربية", "احصل على هذه الصفحة باللغة العربية !", "sa"),
        'ca' => array("Inici",'ltr',"català", "Traduïu aquesta pàgina a la llengua català!", "ad"),
        'en' => array("Home",'ltr',"English", "Watch this page in English", "gb"),
        'de' => array("Home",'ltr',"Deutsch", "Watch this page in German", "de"),
        'es' => array("Inicio",'ltr',"castellano", "¡Lee esta página en castellano!", "es"),
        'fr' => array("Accueil",'ltr',"français", "Cette page en français", "fr"),
        'it' => array("Home",'ltr',"italiano", "Watch this page in Italian", "it"),
        'ml' => array("Home",'ltr',"മലയാളം", "Watch this page in Malayalam", "in"),
        'nl' => array("Hoofdpagina",'ltr',"Nederlands", "Bekijk deze pagina in het Nederlands", "nl"),
        'pt' => array("Home",'ltr',"português", "Watch this page in Portuguese", "br"),
        'ru' => array("Домой",'ltr',"русский", "Просмотреть эту страницу на русский языке!", "ru"),
        'sr' => array("Home",'ltr',"српски", "Watch this page in Serbian", "rs"),
        #'uk' => array("Додому",'ltr',"українська", "Переглянути цю сторінку на українська мові!", "ua"),
        'tr' => array("Home",'ltr',"Türkçe", "Watch this page in Turkish", "tr"),
        'vi' => array("Nhà",'ltr',"Tiếng Việt", "Xem trang này bằng tiếng Tiếng Việt !", "vn"),
        'zh' => array("Home",'ltr',"汉语", "Watch this page in Chinese", "cn"),
        );
    var $supported_locales = array(
        'ar' => 'ar_SA.UTF-8',
        'ca' => 'ca_AD.UTF-8',
        'de' => 'de_DE.UTF-8',
        'en' => 'en_GB.UTF-8',
        'es' => 'es_ES.UTF-8',
        'fr' => 'fr_FR.UTF-8',
        'it' => 'it_IT.UTF-8',
        'ml' => 'ml_IN',
        'nl' => 'nl_NL.UTF-8',
        'pt' => 'pt_BR.UTF-8',
        'ru' => 'ru_RU.UTF-8',
        'sr' => 'sr_RS',
        'tr' => 'tr_TR.UTF-8',
        'vi' => 'vi_VN',
        'zh' => 'zh_CN.UTF-8',
        );

    // constructor
    function __construct() {
        # Set the locale.
        $locale = isset($_GET['l']) ? $_GET['l'] : NULL;
        $this->set('locale', $locale);

        # Set the text direction.
        $dir = $this->locale_info[$this->get('lang')][1];
        $this->set('dir', $dir);

        # Initialize gettext.
        $this->init_gettext();
    }

    // define methods
    function init_gettext() {
        # Initialize gettext. Configure gettext to look in
        # /locale/xx_YY/LC_MESSAGES/ for gettext_domain.mo.
        $gettext_domain = $this->get('gettext_domain');

        # Set language.
        putenv("LANG=".$this->get('locale'));
        setlocale(LC_ALL, $this->get('locale'));

        # Specify location of translation tables
        bindtextdomain($gettext_domain, "locale/");

        # Choose domain
        textdomain($gettext_domain);
    }

	function set($key, &$value)
    {
        if ($key == 'locale') {
            $this->set_locale($value);
            return;
        }
		$this->conf[$key] =& $value;
	}

    function set_locale($locale)
    {
        if ( array_key_exists($locale, $this->supported_locales) ) {
            $this->conf['locale'] = $this->supported_locales[$locale];
        }
    }

    function get($key, $default='')
    {
        if ($key == 'lang') {
            return substr($this->conf['locale'], 0, 2);
        }

		if ( isset($this->conf[$key]) ) {
			return $this->conf[$key];
		}
		return $default;
    }
}

?>
