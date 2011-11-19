<?php
/******************************************************************************
 *  Copyright 2006-2008, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011, Launchpad getgnulinux Team
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
 ******************************************************************************
 *  The text content is published under a Creative Commons
 *  Attribution-ShareAlike 3.0 License,
 *  Copyright 2006-2010, GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011, Launchpad getgnulinux Team
 *
 *****************************************************************************/

/**
 * This is the configuration module for Get GNU/Linux!
 *
 * @author Serrano Pereira <serrano.pereira@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0.html GNU AGPL v3
 */


/**
 * Management utilities for the website's configuration.
 */
class GetGnuLinux {
    /**
     * Set of ISO language codes for right-to-left languages.
     *
     * @var array
     */
    private static $rtl_languages = array("ar", "dv", "fa", "ha", "he", "ps",
        "ur", "yi");

    /**
     * Set of ISO language codes for languages for which italics should be
     * disabled.
     *
     * @var array
     */
    private static $no_italics_languages = array("ar", "he");

    /**
     * Configuration items.
     *
     * This is an associative, multidimensional array made up of the following
     * items (key => value):
     *  - lang: ISO language code of the current language.
     *  - locale: ISO locale code of the current language.
     *  - country_code: ISO country code of the current language.
     *  - dir: Text direction of the current language.
     *  - gettext_domain: The gettext domain which tells gettext where to look
     *      for PO files.
     *  - locales: An associative, multidimensional array where each key is an
     *      ISO language code. Each value is an array containing the following
     *      items:
     *      - Locale code for gettext.
     *      - Country code.
     *      - Localised text for "Home".
     *      - Localised text for the language name.
     *      - Localised text for "Watch this page in <language>".
     *      - Completed translation fraction for this language.
     *
     * @var array
     */
    public $config = array(
        'lang' => "en",
        'locale' => "en_GB",
        'country_code' => "gb",
        'dir' => "ltr",
        'gettext_domain' => "getgnulinux",
        'locales' => array(
            'ar' => array('ar_SA.UTF-8','sa',"الرئيسية","العربية", "احصل على هذه الصفحة باللغة العربية !", 0.42),
            'ca' => array('ca_AD.UTF-8','ad',"Inici","Català", "Traduïu aquesta pàgina a la llengua català!", 0.57),
            'da' => array('da_DK.UTF-8','dk',"Home","Dansk", "Watch this page in Danish", 0.05),
            'de' => array('de_DE.UTF-8','de',"Home","Deutsch", "Watch this page in German", 0.47),
            'en' => array('en_GB.UTF-8','gb',"Home","English", "Watch this page in English", 1),
            'eo' => array('eo.UTF-8',   'eo',"Home","Esperanto", "Watch this page in Esperanto", 0.23),
            'es' => array('es_ES.UTF-8','es',"Inicio","Español", "¡Lee esta página en español!", 0.66),
            'fr' => array('fr_FR.UTF-8','fr',"Accueil","Français", "Cette page en français", 0.71),
            'he' => array('he_IL.UTF-8','il',"Home","עִבְרִית", "Watch this page in Hebrew", 0.78),
            'hr' => array('hr_HR.UTF-8','hr',"Home","Hrvatski", "Watch this page in Croatian", 0.13),
            'ia' => array('ia',         'ia',"Home","Interlingua", "Watch this page in Interlingua", 0.06),
            'it' => array('it_IT.UTF-8','it',"Home","Italiano", "Watch this page in Italian", 0.37),
            'ja' => array('ja_JP.UTF-8','jp',"Home","日本語", "Watch this page in Japanese", 0),
            'ml' => array('ml_IN',      'in',"Home","മലയാളം", "Watch this page in Malayalam", 0.16),
            'nl' => array('nl_NL.UTF-8','nl',"Hoofdpagina","Nederlands", "Bekijk deze pagina in het Nederlands", 0.32),
            'pt' => array('pt_PT.UTF-8','pt',"Home","Português", "Watch this page in Portuguese", 0.18),
            'ru' => array('ru_RU.UTF-8','ru',"Домой","Pусский", "Просмотреть эту страницу на русский языке!", 0.62),
            'sr' => array('sr_RS',      'rs',"Home","српски", "Watch this page in Serbian", 0.06),
            'tr' => array('tr_TR.UTF-8','tr',"Home","Türkçe", "Watch this page in Turkish", 0.15),
            'uk' => array('uk_UA.UTF-8','ua',"Додому","Українська", "Переглянути цю сторінку на українська мові!", 0.26),
            'vi' => array('vi_VN',      'vn',"Nhà","Tiếng Việt", "Xem trang này bằng tiếng Tiếng Việt !", 0.50),
            'zh' => array('zh_CN.UTF-8','cn',"Home","中文", "Watch this page in Chinese", 0.48),
            )
        );

    /**
     * The constructor
     *
     * Sets locale information (like language code, country code, text
     * direction), initialises gettext, and sets some main configurations.
     */
    function __construct() {
        # Set the locale.
        $locale = isset($_GET['l']) ? $_GET['l'] : 'en';
        $this->set('locale', $locale);

        # Initialize gettext. From here, gettext is enabled.
        $this->init_gettext();

        # Set initial configuration values.
        $this->init_config();
    }

    /**
     * Initialise gettext.
     *
     * This method sets where gettext should obtain the localised content.
     */
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

    /**
     * Sets global configurations.
     */
    function init_config() {
        # i18n: The name of the website. It is displayed in the header of each page.
        $this->config['website_title'] = _("get GNU/Linux!");

        # Set page titles for <title> tags.
        $this->config['page_titles'] = array(
            # i18n: The way you refer to a website's main page in your language.
            'home' => _("Home"),
            # i18n: Try to be as concise and short as possible. This appears in the top header menu and must be easily readable.
            'more' => _("More"),
            # i18n: Try to be as concise and short as possible. This appears in the top header menu and must be easily readable.
            'linux' => _("What is Linux?"),
            # i18n: The term 'FAQ' may not be meaningful, or have an equivalent acronym in your language. If so, just skip the term.
            'linux.linux_faq' => _("Linux FAQ - common questions about GNU/Linux"),
            # i18n: Here the intent is to be a little provocative. Exact translation is not required.
            'linux.misunderstanding_free_software' => _("How to Misunderstand Free Software"),
            # i18n: This is the title of the 'Screenshots' page.
            'linux.screenshots' => _("What GNU/Linux looks like"),
            # i18n: If it makes sense in your language, do not formulate 'why not windows' as a question. This appears in the top header menu and should be as short and concise as possible.
            'windows' => _("Why not Windows"),
            # i18n: This title can be translated loosely
            'windows.restrictions' => _("Restrictions"),
            # i18n: This title can be translated loosely
            'windows.restrictions.further_details' => _("More details on restrictions"),
            # i18n: This title can be translated loosely
            'windows.stand_for_a_free_society' => _("Stand for a free society"),
            # i18n: This title can be translated loosely
            'windows.what_about_choice' => _("What about choice?"),
            # i18n: This title can be translated loosely
            'windows.what_about_source_code' => _("No source code"),
            # i18n: This appears in the top header menu and should be as short and concise as possible.
            'switch_to_linux' => _("Switch to Linux"),
            'switch_to_linux.choose_a_distribution' => _("Choose a distribution"),
            'switch_to_linux.from_windows_to_linux' => _("From Windows to Linux"),
            # i18n: This should be translated as if it was 'Try *and* install'. In English there was possible confusion (with 'try to install') but this was the intended title.
            'switch_to_linux.try_or_install' => _("Try or install"),
        );

        # Set page descriptions.
        $this->config['page_descriptions'] = array(
            # i18n: This is the description of the homepage, and it appears in Google results! Please pay particular attention to this one =)
            'default' => _("Get GNU/Linux! A simple, clear website about Linux. | What is Linux? | Why not Windows? | Tips to make the switch"),
            # i18n: This is the description of the 'More' page
            'more' => _("Read and discover more about Linux."),
            # i18n: This is the description of the 'Linux' page
            'linux' => _("What is Linux? A clear explanation."),
            # i18n: This is the description of the 'Linux FAQ' page
            'linux.linux_faq' => _("Frequently Asked Questions about GNU/Linux."),
            # i18n: This is the description of the 'Misunderstanding Free Software' page
            'linux.misunderstanding_free_software' => _("An unconventional way to (re)discover free software."),
            # i18n: This is the description of the 'Screenshots' page
            'linux.screenshots' => _("A brief look at Linux in everyday use."),
            # i18n: This is the description of the 'Why not Windows' page
            'windows' => _("Four good reasons to avoid proprietary software."),
            # i18n: This is the description of the 'Restrictions' page
            'windows.restrictions' => _("Restrictions in a proprietary software license."),
            # i18n: This is the description of the 'Restrictions further details' page
            'windows.restrictions.further_details' => _("Restrictions in a proprietary software license - more details."),
            # i18n: This is the description of the 'Stand for a free society' page
            'windows.stand_for_a_free_society' => _("How software affects freedom in society."),
            # i18n: This is the description of the 'What about choice' page
            'windows.what_about_choice' => _("How Microsoft lock customers in."),
            # i18n: This is the description of the 'What about source code' page
            'windows.what_about_source_code' => _("No source code means no trust and no security."),
            # i18n: This is the description of the 'Switch to Linux' page
            'switch_to_linux' => _("Switch to Linux: Good tips and advice."),
            # i18n: This is the description of the 'Choose a distribution' page
            'switch_to_linux.choose_a_distribution' => _("Recommended Linux distributions for everyday users."),
            # i18n: This is the description of the 'From Windows to Linux' page
            'switch_to_linux.from_windows_to_linux' => _("The advantages and disadvantages of Linux over Windows."),
            # i18n: This is the description of the 'Try or Install' page. i18n note: this should be translated as if it was 'Try *and* install'. In English there was possible confusion (with 'try to install') but this was the intended title.
            'switch_to_linux.try_or_install' => _("Try or install Linux on your computer, very easily."),
        );
    }

    /**
     * Set the configuration value for a configuration key.
     *
     * @param string $key The configuration key to set.
     * @param $value The configuration value for $key.
     */
	function set($key, &$value)
    {
        if ($key == 'locale') {
            $this->set_locale($value);
            return;
        }
		$this->config[$key] =& $value;
	}

    /**
     * Setter for locale specific configurations.
     *
     * Sets the following configurations:
     *  - language code.
     *  - locale code which is used by gettext.
     *  - the country code for the language.
     *  - the text direction for the language.
     *
     * @param string $lang The language code. This must be one of the keys of
     *      the array $config['locale'].
     */
    function set_locale($lang)
    {
        if ( isset($this->config['locales'][$lang]) ) {
            // Set the language code.
            $this->config['lang'] = $lang;
            // Set the locale.
            $this->config['locale'] = $this->config['locales'][$lang][0];
            // Set the country code.
            $this->config['country_code'] = $this->config['locales'][$lang][1];
            // Set the text direction for this language.
            $this->config['dir'] = $this->get_lang_directionality($lang);
        }
    }

    /**
     * Returns the value for a configuration key.
     *
     * @param string $key The configuration key from which to get the value.
     * @param $default The value to be returned if $key is not set.
     * @return unknown
     */
    function get($key, $default='')
    {
		if ( isset($this->config[$key]) ) {
			return $this->config[$key];
		}
		return $default;
    }

    /**
     * Returns the directionality of the requested language.
     *
     * @param string $languageCode The ISO 639-1 code of the language.
     * @return string rtl|ltf
     */
    public function get_lang_directionality($lang)
    {
        return in_array($lang, self::$rtl_languages) ? "rtl" : "ltr";
    }

    /**
     * Returns TRUE if italics should be disabled for the current language.
     *
     * @uses string $this->config['lang']
     * @uses array self::$no_italics_languages
     * @return bool TRUE|FALSE
     */
    public function no_italics()
    {
        return in_array($this->config['lang'], self::$no_italics_languages);
    }
}

?>
