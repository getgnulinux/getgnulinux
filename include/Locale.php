<?php
/*
 * locale.php:
 * Functions to change locale; for display of text (via gettext), dates
 * times and so on in different human languages.
 *
 * Copyright (c) 2005 UK Citizens Online Democracy. All rights reserved.
 * Email: francis@mysociety.org; WWW: http://www.mysociety.org
 *
 * $Id: locale.php,v 1.7 2007/08/17 10:33:24 matthew Exp $
 *
 * Downloaded from http://www.dracos.co.uk/code/php/language-negotiation/
 * Modified 2014/02/09 by Serrano Pereira <serrano.pereira@gmail.com>
 *
 */

$locale_current = null;
$locale_stack = array();

/**
 * Try to load PEAR's HTTP2 package which provides HTTP2::negotiateLanguage.
 */
require_once "PEAR/Registry.php";
$reg = new PEAR_Registry;

if ($reg->packageExists("HTTP2")) {
    require_once "HTTP2.php";
    $http = new HTTP2();
} else {
    $http = NULL;
}

/**
 * Sets global variable $lang to negotiated language.
 * Languages for which the translation is not completed are not selected,
 * except if it's an override language.
 *
 * @param array $available_languages Array of the available locales,
 *      for example:
 *      array('en' => array('en_US.UTF-8',"English"),
 *            'ia' => array('ia', "Interlingua"),
 *            'es' => array('es_ES.UTF-8',"Español"),
 *      )
 * @param array $complete Contains language codes for completed translations.
 * @param string $override_langage Override language, such as from cookie
 *      or domain name. Set to null to force negotiation of language from
 *      browser, using HTTP headers.
 */
function locale_negotiate_language($available_languages, $complete, $override_langage=NULL) {
    global $http, $http2_fallback, $langs, $langmap, $lang;

    $langs = array();
    $langmap = array();
    foreach ($available_languages as $code => $items) {
        list($locale, $native) = $items;
        if ( !in_array($code, $complete) && $code != $override_langage ) {
            continue;
        }
        $langs[$code] = $native;
        $langmap[$code] = $locale;
    }
    if ($override_langage && array_key_exists($override_langage, $langs)) {
        $lang = $override_langage;
    } else {
        if ($http)
            $lang = $http->negotiateLanguage($langs);
        else
            $lang = negotiateLanguage($langs);

        if (!$lang || !array_key_exists($lang, $langmap)) {
            $lang = NULL;
        }
    }
}

/**
 * Change human language to display text, dates, numbers, etc. in.
 *
 * $l is the keys from the available language string previously passed to
 * locale_negotiate_language. Leave unset to use the default negotiated
 * language.
 *
 * Note: To get a language working from PHP on Unix, you also need
 * to install the system locale for that language. In Debian this is done
 * using "dpkg-reconfigure locales". You may need to restart Apache also.
 *
 * @param string $l The locale
 */
function locale_change($l = "") {
    global $langmap, $lang, $locale_current;
    if ($l == "")
        $l = $lang;
    if ($l == $locale_current)
        return;
    putenv('LANGUAGE='); /* clear this if set */
    putenv('LANG='.$langmap[$l]);
    $os_locale = $langmap[$l];
    $ret = setlocale(LC_ALL, $os_locale);
    if ($ret != $os_locale)
        print "setlocale failed for $os_locale";
    $locale_current = $l;
    /* Clear gettext's cache - you have to do this when
     * you change environment variables. */
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
function locale_push($l) {
    global $locale_stack, $locale_current;
    array_push($locale_stack, $locale_current);
    locale_change($l);
}

/**
 * Restore the last locale from the stack.
 *
 * Change locale using a stack system, so you can easily restore to whatever
 * locale was previously set.
 */
function locale_pop() {
    global $locale_stack;
    $l = array_pop($locale_stack);
    locale_change($l);
}

/**
 * Set gettext domain and the path for a domain.
 *
 * @param string $domain The domain
 * @param string $directory The directory path
 */
function locale_gettext_domain($domain, $directory) {
    bindtextdomain($domain, $directory);
    textdomain($domain);
    bind_textdomain_codeset($domain, 'UTF-8');
}

/**
 * A modified local copy of PEAR's HTTP::negotiateLanguage
 *
 * This copy is used as fallback if PEAR's HTTP2 package is not installed.
 * PEAR's HTTP2 can be installed with `pear install HTTP2'.
 *
 * @param array $supported An associative array of supported languages,
 *                         whose values must evaluate to true.
 *
 * @return string The negotiated language result.
 */
function negotiateLanguage(&$supported) {
    $supported = array_change_key_case($supported, CASE_LOWER);
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $accepted = preg_split('/\s*,\s*/', strtolower(trim($_SERVER['HTTP_ACCEPT_LANGUAGE'])));
        for ($i = 0; $i < count($accepted); $i++) {
            if (preg_match('/^([a-z_-]+);\s*q=([\d\.]+)/', $accepted[$i], $arr)) {
                $q = (double)$arr[2];
                $l = $arr[1];
            } else {
                $q = 1;
                $l = $accepted[$i];
            }
            if ($q > 0.0) {
                if (!empty($supported[$l])) {
                    if ($q == 1) {
                        return $l;
                    }
                    $candidates[$l] = $q;
                } else {
                    $l = preg_quote($l, '/');
                    foreach (array_keys($supported) as $value) {
                        if (preg_match("/^$l-/",$value)) {
                            if ($q == 1) {
                                return $value;
                            }
                            $candidates[$value] = $q;
                            break;
                        }
                    }
                }
            }
        }
        if (isset($candidates)) {
            arsort($candidates);
            reset($candidates);
            return key($candidates);
        }
    }
}

