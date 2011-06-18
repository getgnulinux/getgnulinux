<?php

class GetGnuLinux {
    // define properties
    var $conf = array('locale' => "en_GB",
        'gettext_domain' => "getgnulinux",
        );
    var $locale_info = array('ar' => array("الرئيسية",'rtl',"العربية", "احصل على هذه الصفحة باللغة العربية !", "sa"),
        'ca' => array("Inici",'ltr',"català", "Traduïu aquesta pàgina a la llengua català!", "ad"),
        'en' => array("Home",'ltr',"English", "Watch this page in English", "gb"),
        'es' => array("Inicio",'ltr',"castellano", "¡Lee esta página en castellano!", "es"),
        'fr' => array("Accueil",'ltr',"français", "Cette page en français", "fr"),
        'ru' => array("Домой",'ltr',"русский", "Просмотреть эту страницу на русский языке!", "ru"),
        'uk' => array("Додому",'ltr',"українська", "Переглянути цю сторінку на українська мові!", "ua"),
        'vi' => array("Nhà",'ltr',"Tiếng Việt", "Xem trang này bằng tiếng Tiếng Việt !", "vn"),
        'nl' => array("Hoofdpagina",'ltr',"Nederlands", "Bekijk deze pagina in het Nderlands", "nl"),
        );
    var $supported_locales = array('ar' => 'ar_SA',
        'ca' => 'ca_AD',
        'en' => 'en_GB',
        'es' => 'es_ES',
        'fr' => 'fr_FR',
        'ru' => 'ru_RU',
        'uk' => 'uk_UA',
        'vi' => 'vi_VN',
        'nl' => 'nl_NL',
        );

    // constructor
    function __construct() {
        # Set the locale.
        $locale = isset($_GET['l']) ? $_GET['l'] : NULL;
        $this->set('locale', $locale);

        # Initialize gettext.
        $this->init_gettext();
    }

    // define methods
    function init_gettext() {
        # Initialize gettext. Configure gettext to look in
        # /locale/xx_YY/LC_MESSAGES/ for getgnulinux.mo.
        $gettext_domain = $this->get('gettext_domain');

        # Set language.
        putenv("LANG=".$this->locale());
        setlocale(LC_ALL, $this->locale());

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
		if ( isset($this->conf[$key]) ) {
            if ($key == 'locale') {
                return $this->get_locale();
            }

			return $this->conf[$key];
		}
		return $default;
    }

    function get_locale()
    {
        return substr($this->conf['locale'], 0, 2);
    }

    function locale()
    {
        return $this->conf['locale'];
    }
}

?>
