<?php

class L10n {

    public static $locale_current = null;
    public static $locale_stack = array();
    public static $lang = null;
    public static $supported = array();
    private static $langmap = array();

    /**
     * Return the negotiated language.
     *
     * Languages for which the translation is not completed are skipped, except
     * if it's an override language.
     *
     * @param array $locales Array of the available locales,
     *      for example:
     *      array('en' => array('en_US.UTF-8',"English"),
     *            'ia' => array('ia', "Interlingua"),
     *            'es' => array('es_ES.UTF-8',"Español"),
     *      )
     * @param array $complete Contains language codes for completed translations.
     * @param string $override Override language, such as from cookie or domain
     *        name.
     * @return string A language code.
     */
    static function negotiate_language($locales, $override=null) {
        global $http;

        foreach ($locales as $code => $items) {
            list($locale, $native) = $items;
            self::$supported[$code] = $native;
            self::$langmap[$code] = $locale;
        }

        if ($override && array_key_exists($override, self::$supported)) {
            self::$lang = $override;
        }
        else {
            self::$lang = $http->negotiateLanguage(self::$supported);

            if (!self::$lang || !array_key_exists(self::$lang, self::$langmap)) {
                self::$lang = null;
            }
        }

        return self::$lang;
    }

    /**
     * Change human language to display text, dates, numbers, etc. in.
     *
     * $l is the keys from the available language string previously passed to
     * negotiate_language. Leave unset to use the default negotiated language.
     *
     * Note: To get a language working from PHP on Unix, you also need
     * to install the system locale for that language. In Debian this is done
     * using "dpkg-reconfigure locales". You may need to restart Apache also.
     *
     * @param string $l The locale.
     */
    static function locale_change($l = null) {
        if ($l === null) {
            $l = self::$lang;
        }
        if ($l === self::$locale_current) {
            return;
        }

        putenv('LANGUAGE=');
        putenv('LANG='.self::$langmap[$l]);

        $os_locale = self::$langmap[$l];
        $ret = setlocale(LC_ALL, $os_locale);
        if ($ret !== $os_locale) {
            print "setlocale failed for $os_locale";
        }

        self::$locale_current = $l;

        // Clear gettext's cache - you have to do this when you change
        // environment variables.
        textdomain(textdomain(NULL));
    }

    /**
     * Push a locale to the stack.
     *
     * Change locale using a stack system, so you can easily restore to whatever
     * locale was previously set.
     *
     * @param string $l The locale
     */
    static function locale_push($l) {
        array_push(self::$locale_stack, self::$locale_current);
        locale_change($l);
    }

    /**
     * Restore the last locale from the stack.
     *
     * Change locale using a stack system, so you can easily restore to whatever
     * locale was previously set.
     */
    static function locale_pop() {
        $l = array_pop(self::$locale_stack);
        locale_change($l);
    }
}
