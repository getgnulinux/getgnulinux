<?php
/*
 *  Copyright 2006-2008 GNU/Linux Matters <http://www.gnulinuxmatters.org/>
 *  Copyright 2011-2012,2020 get GNU/Linux! <https://github.com/getgnulinux>
 *
 *  This file is part of Get GNU/Linux! <https://github.com/getgnulinux>
 *
 *  getgnulinux is free software: you can redistribute it and/or modify it under
 *  the terms of the GNU Affero General Public License as published by the
 *  Free Software Foundation, either version 3 of the License, or any later
 *  version.
 *
 *  getgnulinux is distributed in the hope that it will be useful, but WITHOUT
 *  ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 *  FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public
 *  License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with getgnulinux. If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * This is the configuration module for Get GNU/Linux!
 *
 * @author Serrano Pereira <serrano@bitosis.nl>
 * @license http://www.gnu.org/licenses/agpl-3.0.html GNU AGPL v3
 */

/**
 * Management utilities for the website's configuration.
 */
class GGL {
    /**
     * An associative, multidimensional array where each key is an
     * ISO language code. Each value is an array containing the following
     * items:
     *   0 - Locale code for gettext.
     *   1 - Native name for the language name.
     *
     * @var array
     */
    private static $locales = array(
        'ar' => array('ar_SA.UTF-8',    "العربية"),
        'ast' => array('ast_ES.UTF-8',  "Asturianu"),
        'bg' => array('bg_BG.UTF-8',    "български"),
        'ca' => array('ca_AD.UTF-8',    "Català"),
        'cy' => array('cy_GB.UTF-8',    "Cymraeg"),
        'da' => array('da_DK.UTF-8',    "Dansk"),
        'de' => array('de_DE.UTF-8',    "Deutsch"),
        'el' => array('el_GR.UTF-8',    "Ελληνικά"),
        'en' => array('en_GB.UTF-8',    "English"),
        'eo' => array('eo.UTF-8',       "Esperanto"),
        'es' => array('es_ES.UTF-8',    "Español"),
        'et' => array('et_EE.UTF-8',    "Eesti"),
        'fa' => array('fa_IR.UTF-8',    "fārsi"),
        'fi' => array('fi_FI.UTF-8',    "Suomi"),
        'fr' => array('fr_FR.UTF-8',    "Français"),
        'gl' => array('gl_ES.UTF-8',    "Galego"),
        'he' => array('he_IL.UTF-8',    "עִבְרִית"),
        'hi' => array('hi_IN.UTF-8',    "हिन्दी"),
        'hr' => array('hr_HR.UTF-8',    "Hrvatski"),
        'ia' => array('ia_FR.UTF-8',    "Interlingua"),
        'id' => array('id_ID.UTF-8',    "Bahasa Indonesia"),
        'it' => array('it_IT.UTF-8',    "Italiano"),
        'lt' => array('lt_LT.UTF-8',    "Lietuvių"),
        'mk' => array('mk_MK.UTF-8',    "Македонски"),
        'ml' => array('ml_IN.UTF-8',    "മലയാളം"),
        'ms' => array('ms_MY.UTF-8',    "Bahasa Melayu"),
        'nb' => array('nb_NO.UTF-8',    "bokmål"),
        'nl' => array('nl_NL.UTF-8',    "Nederlands"),
        'pl' => array('pl_PL.UTF-8',    "Polski"),
        'pt' => array('pt_PT.UTF-8',    "Português"),
        'pt-br' => array('pt_BR.UTF-8', "Português Brasileiro"),
        'ru' => array('ru_RU.UTF-8',    "Русский"),
        'si' => array('si_LK.UTF-8',    "සිංහල"),
        'sr' => array('sr_RS.UTF-8',    "Српски"),
        'sv' => array('sv_SE.UTF-8',    "Svenska"),
        'tr' => array('tr_TR.UTF-8',    "Türkçe"),
        'uk' => array('uk_UA.UTF-8',    "Українська"),
        'vi' => array('vi_VN.UTF-8',    "Tiếng Việt"),
        'zh' => array('zh_CN.UTF-8',    "中文(简)"),
        'zh-tw' => array('zh_TW.UTF-8', "中文(繁)"),
    );

    /**
     * Set of ISO language codes for right-to-left languages.
     *
     * @var array
     */
    private static $rtl_languages = array(
        'ar',
        'dv',
        'fa',
        'ha',
        'he',
        'ps',
        'ur',
        'yi'
    );

    /**
     * Set of ISO language codes for languages for which italics should be
     * disabled.
     *
     * @var array
     */
    private static $no_italics_languages = array('ar', 'he');

    /**
     * Configuration items.
     *
     * This is an associative array made up of the following items:
     *  - negotiated_lang: Language set through language negotiation.
     *  - lang: ISO language code of the current language.
     *  - locale: Locale code of the current language.
     *  - dir: Text direction of the current language.
     *  - gettext_domain: The gettext domain which tells gettext where to look
     *      for PO files.
     *
     * @var array
     */
    public $config = array(
        'negotiated_lang' => null,
        'lang' => 'en',
        'lang-native' => 'English',
        'locale' => "en_GB.UTF-8",
        'locale_override' => null,
        'dir' => "ltr",
        'gettext_domain' => "getgnulinux",
    );

    /**
     * Chapters sections.
     *
     * @var array
     */
    public $sections = array();

    /**
     * Initialise GGL. Needs to be called manually after the user settings
     * are loaded.
     *
     * Sets locale information (like language code, country code, text
     * direction), initialises gettext, and sets some main configurations.
     */
    public function init() {
        # Set the base URL.
        if (empty($this->config['base_url'])) {
            if ((isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)) ||
                (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
                $protocol = 'https://';
            }
            else {
                $protocol = 'http://';
            }

            $domain_name = $_SERVER['HTTP_HOST'];
            $this->config['base_url'] = sprintf('%s%s/', $protocol, $domain_name);
        }

        # Get the locale provided in the URL. Defaults to null if no locale
        # provided.
        $override = isset($_GET['l']) ? $_GET['l'] : null;

        # Only negotiate with completed translations.
        $locales = Util::array_intersect_keys(self::$locales,
            array_merge($this->config['locales_complete'], array($override)));

        # Get preferred language from the client.
        $lang = L10n::negotiate_language($locales, $override);

        # Set the negotiated language and locale variables. If no language
        # was found, negotiated_lang and the locale variables keep their
        # default values.
        if ($lang) {
            $this->set('negotiated_lang', $lang);
            $this->set('locale', $lang);
        }

        if ($override !== null && $override === $lang) {
            $this->set('locale_override', $override);
        }

        # Initialize gettext.
        $this->init_gettext();

        # Set attribute values.
        $this->init_attributes();
    }

    /**
     * Initialise gettext.
     *
     * Set where gettext should obtain the localised content.
     */
    private function init_gettext() {
        $domain = $this->get('gettext_domain');
        L10n::locale_change();
        Util::gettext_set_domain($domain, 'locale/', 'UTF-8');
    }

    /**
     * Sets attributes.
     */
    private function init_attributes() {
        # TRANSLATORS: The name of the website. It is displayed in the header of each page.
        $this->config['website_title'] = _("get GNU/Linux!");

        # Main navigation items.
        $this->config['navigation_items'] = array(
            0 => array('', _("Home")),
            1 => array('linux', _("What is GNU/Linux?")),
            2 => array('windows', _("Why not Windows")),
            3 => array('switch_to_linux', _("Switch to GNU/Linux")),
            4 => array('more', _("More"))
        );

        # Set page titles for <title> tags.
        $this->config['page_titles'] = array(
            # TRANSLATORS: This is the title of the 'Credits' page.
            'credits' => _("Credits"),
            # TRANSLATORS: This is the title of the 'Legal terms' page.
            'legal' => _("Terms of use"),
            # TRANSLATORS: This is the title of the 'More' page.
            'more' => _("More"),
            # TRANSLATORS: Try to be as concise and short as possible. This appears in the top header menu and must be easily readable.
            'linux' => _("What is GNU/Linux?"),
            # TRANSLATORS: The term 'FAQ' may not be meaningful, or have an equivalent acronym in your language. If so, just skip the term.
            'linux.faq' => _("GNU/Linux FAQ - common questions about GNU/Linux"),
            # TRANSLATORS: The term 'FAQ' may not be meaningful, or have an equivalent acronym in your language. If so, just skip the term.
            'linux.faq.virus' => _("GNU/Linux virus FAQ"),
            # TRANSLATORS: Here the intent is to be a little provocative. Exact translation is not required.
            'linux.misunderstanding_free_software' => _("How to Misunderstand Free Software"),
            'linux.linux_is_not_windows' => _("GNU/Linux is not Windows"),
            # TRANSLATORS: If it makes sense in your language, do not formulate 'why not windows' as a question. This appears in the top header menu and should be as short and concise as possible.
            'windows' => _("Why not Windows"),
            # TRANSLATORS: This title can be translated loosely
            'windows.restrictions' => _("Restrictions"),
            # TRANSLATORS: This title can be translated loosely
            'windows.restrictions.further_details' => _("More details on restrictions"),
            # TRANSLATORS: This title can be translated loosely
            'windows.stand_for_a_free_society' => _("Stand for a free society"),
            # TRANSLATORS: This title can be translated loosely
            'windows.what_about_choice' => _("What about choice?"),
            # TRANSLATORS: This title can be translated loosely
            'windows.what_about_source_code' => _("No source code"),
            # TRANSLATORS: This appears in the top header menu and should be as short and concise as possible.
            'switch_to_linux' => _("Switch to GNU/Linux"),
            'switch_to_linux.choose_a_distribution' => _("Choose a distribution"),
            'switch_to_linux.from_windows_to_linux' => _("From Windows to GNU/Linux"),
            # TRANSLATORS: This should be translated as if it was 'Try *and* install'. In English there was possible confusion (with 'try to install') but this was the intended title.
            'switch_to_linux.try_or_install' => _("Try or install"),
            # TRANSLATORS: The title for the custom "Page Not Found" page.
            '404' => _("Page Not Found"),
        );

        # Set page descriptions.
        $this->config['page_descriptions'] = array(
            # TRANSLATORS: This is the description of the homepage, and it appears in Google results! Please pay particular attention to this one =)
            'default' => _("Get GNU/Linux! A simple, clear website about GNU/Linux. What is Linux? Why not Windows? Tips to make the switch."),
            # TRANSLATORS: This is the description of the 'More' page
            'more' => _("Read and discover more about GNU/Linux."),
            # TRANSLATORS: This is the description of the 'Linux' page
            'linux' => _("What is GNU/Linux? A clear explanation."),
            # TRANSLATORS: This is the description of the 'GNU/Linux FAQ' page
            'linux.faq' => _("Frequently Asked Questions about GNU/Linux."),
            # TRANSLATORS: This is the description of the 'GNU/Linux virus FAQ' page
            'linux.faq.virus' => _("Should I install anti-virus software under GNU/Linux?"),
            # TRANSLATORS: This is the description of the 'Misunderstanding Free Software' page
            'linux.misunderstanding_free_software' => _("An unconventional way to (re)discover free software."),
            # TRANSLATORS: This is the description of the 'GNU/Linux is not Windows' page
            'linux.linux_is_not_windows' => _("If you wish GNU/Linux to be just exactly like Windows, you will probably be disappointed. GNU/Linux is built by people who simply wish it to be different."),
            # TRANSLATORS: This is the description of the 'Why not Windows' page
            'windows' => _("Four good reasons to avoid proprietary software."),
            # TRANSLATORS: This is the description of the 'Restrictions' page
            'windows.restrictions' => _("Restrictions in a proprietary software license."),
            # TRANSLATORS: This is the description of the 'Restrictions further details' page
            'windows.restrictions.further_details' => _("Restrictions in a proprietary software license - more details."),
            # TRANSLATORS: This is the description of the 'Stand for a free society' page
            'windows.stand_for_a_free_society' => _("How software affects freedom in society."),
            # TRANSLATORS: This is the description of the 'What about choice' page
            'windows.what_about_choice' => _("How Microsoft lock customers in."),
            # TRANSLATORS: This is the description of the 'What about source code' page
            'windows.what_about_source_code' => _("No source code means no trust and no security."),
            # TRANSLATORS: This is the description of the 'Switch to GNU/Linux' page
            'switch_to_linux' => _("Switch to GNU/Linux: Good tips and advice."),
            # TRANSLATORS: This is the description of the 'Choose a distribution' page
            'switch_to_linux.choose_a_distribution' => _("Recommended GNU/Linux distributions for everyday users."),
            # TRANSLATORS: This is the description of the 'From Windows to GNU/Linux' page
            'switch_to_linux.from_windows_to_linux' => _("The advantages and disadvantages of GNU/Linux over Windows."),
            # TRANSLATORS: This is the description of the 'Try or Install' page. This should be translated as if it was 'Try *and* install'. In English there was possible confusion (with 'try to install') but this was the intended title.
            'switch_to_linux.try_or_install' => _("Try or install GNU/Linux on your computer, very easily."),
        );
    }

    /**
     * Set the configuration value for a configuration key.
     *
     * @param string $key The configuration key to set.
     * @param $value The configuration value for $key.
     */
    public function set($key, $value) {
        if ($key === 'locale') {
            $this->set_locale($value);
            return;
        }
        $this->config[$key] = $value;
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
    public function set_locale($lang) {
        if ( isset(self::$locales[$lang]) ) {
            // Set the language code.
            $this->config['lang'] = $lang;
            // Set the native language name.
            $this->config['lang-native'] = self::$locales[$lang][1];
            // Set the locale.
            $this->config['locale'] = self::$locales[$lang][0];
            // Set the text direction for this language.
            $this->config['dir'] = $this->langdir($lang);
        }
    }

    /**
     * Returns the value for a configuration key.
     *
     * @param string $key The configuration key from which to get the value.
     * @param $default The value to be returned if $key is not set.
     * @return unknown
     */
    public function get($key, $default=null) {
        return array_key_exists($key, $this->config) ? $this->config[$key] : $default;
    }

    /**
     * Returns the locales array.
     *
     * @param string $filter Set to 'complete' or 'incomplete' to return only
     * complete or only incomplete translations, respectively.  Default is NULL
     * (return all locales).
     * @return array The locales.
     */
    public function get_locales($filter=null) {
        if ($filter === null) {
            return self::$locales;
        }
        else if ($filter === 'complete') {
            $callback = function ($k) {
                return $this->lang_is_complete($k);
            };
        }
        else if ($filter === 'incomplete') {
            $callback = function ($k) {
                return !$this->lang_is_complete($k);
            };
        }
        else {
            throw new Exception('Invalid value for filter.');
        }

        return array_filter(self::$locales, $callback, ARRAY_FILTER_USE_KEY);
    }

    /**
     * Returns an information array for a language code.
     *
     * @param string $lang The ISO 639-1 code of the language.
     * @return array
     */
    public function get_lang_info($lang) {
        return array(
            'complete' => $this->lang_is_complete($lang),
            'active' => $this->currlang($lang),
            'dir' => $this->langdir($lang),
        );
    }

    /**
     * Return TRUE if the language ID matches the current page language.
     *
     * @param string $lang The ISO language code to check against.
     * @return bool Returns TRUE if the language ID matches the current page
     *      language, FALSE otherwise.
     */
    function currlang($lang) {
        return ($lang === $this->get('lang'));
    }

    /**
     * Returns the directionality of the requested language.
     *
     * @param string $lang The ISO 639-1 code of the language.
     * @return string rtl|ltf
     */
    public function langdir($lang) {
        return in_array($lang, self::$rtl_languages, true) ? "rtl" : "ltr";
    }

    /**
     * Returns TRUE if italics should be disabled for the current language.
     *
     * @param string $lang The ISO 639-1 code of the language.
     * @return bool TRUE|FALSE
     */
    public function no_italics($lang) {
        return in_array($lang, self::$no_italics_languages, true);
    }

    /**
     * Returns TRUE if the translation for provided language code is complete.
     *
     * @param string $lang The ISO 639-1 code of the language.
     * @return bool TRUE|FALSE
     */
    public function lang_is_complete($lang) {
        return in_array($lang, $this->config['locales_complete'], true);
    }

    /**
     * Returns string with global CSS classes to be used in the HTML tag.
     *
     * @return string
     */
    public function get_css_features() {
        $lang = $this->config['lang'];
        $features = array();
        $features[] = $this->langdir($lang);
        $features[] = $this->no_italics($lang) ? 'no-italics' : 'italics';

        return implode(' ', $features);
    }
}
