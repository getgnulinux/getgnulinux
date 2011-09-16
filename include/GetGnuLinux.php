<?php

class GetGnuLinux {
    // define properties
    var $conf = array('locale' => "en_GB",
        'gettext_domain' => "getgnulinux",
        'dir' => "ltr",
        );
    var $locale_info = array(
        'ar' => array('ar_SA.UTF-8',"الرئيسية",'rtl',"العربية", "احصل على هذه الصفحة باللغة العربية !"),
        'ca' => array('ca_AD.UTF-8',"Inici",'ltr',"català", "Traduïu aquesta pàgina a la llengua català!"),
        'da' => array('da_DK.UTF-8',"Home",'ltr',"dansk sprog", "Watch this page in Danish"),
        'en' => array('en_GB.UTF-8',"Home",'ltr',"English", "Watch this page in English"),
        'de' => array('de_DE.UTF-8',"Home",'ltr',"Deutsch", "Watch this page in German"),
        'es' => array('es_ES.UTF-8',"Inicio",'ltr',"castellano", "¡Lee esta página en castellano!"),
        'fr' => array('fr_FR.UTF-8',"Accueil",'ltr',"français", "Cette page en français"),
        'hr' => array('hr_HR.UTF-8',"Home",'ltr',"hrvatski jezik", "Watch this page in Croatian"),
        #'id' => array('id_ID.UTF-8',"Home",'ltr',"Bahasa Indonesia", "Watch this page in Indonesian"),
        'it' => array('it_IT.UTF-8',"Home",'ltr',"italiano", "Watch this page in Italian"),
        'ja' => array('ja_JP.UTF-8',"Home",'ltr',"日本語", "Watch this page in Japanese"),
        'ml' => array('ml_IN',"Home",'ltr',"മലയാളം", "Watch this page in Malayalam"),
        'nl' => array('nl_NL.UTF-8',"Hoofdpagina",'ltr',"Nederlands", "Bekijk deze pagina in het Nederlands"),
        'pt' => array('pt_PT.UTF-8',"Home",'ltr',"português", "Watch this page in Portuguese"),
        'ru' => array('ru_RU.UTF-8',"Домой",'ltr',"русский", "Просмотреть эту страницу на русский языке!"),
        'sr' => array('sr_RS',"Home",'ltr',"српски", "Watch this page in Serbian"),
        'uk' => array('uk_UA.UTF-8',"Додому",'ltr',"українська", "Переглянути цю сторінку на українська мові!"),
        'tr' => array('tr_TR.UTF-8',"Home",'ltr',"Türkçe", "Watch this page in Turkish"),
        'vi' => array('vi_VN',"Nhà",'ltr',"Tiếng Việt", "Xem trang này bằng tiếng Tiếng Việt !"),
        'zh' => array('zh_CN.UTF-8',"Home",'ltr',"汉语", "Watch this page in Chinese"),
        );

    // constructor
    function __construct() {
        # Set the locale.
        $locale = isset($_GET['l']) ? $_GET['l'] : "en_GB";
        $this->set('locale', $locale);

        # Set the text direction.
        $dir = $this->locale_info[$this->get('lang')][2];
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
        if ( array_key_exists($locale, $this->locale_info) ) {
            $this->conf['locale'] = $this->locale_info[$locale][0];
        }
    }

    function get($key, $default='')
    {
        if ($key == 'lang') {
            return substr($this->conf['locale'], 0, 2);
        }
        else if ($key == 'country_code') {
            return strtolower(substr($this->conf['locale'], 3, 2));
        }

		if ( isset($this->conf[$key]) ) {
			return $this->conf[$key];
		}
		return $default;
    }
}

?>
