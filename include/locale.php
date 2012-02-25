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
 * Modified 2012/02/24 by Serrano Pereira <serrano.pereira@gmail.com> for
 * http://getgnulinux.org/
 * Downloaded from http://www.dracos.co.uk/code/php/language-negotiation/
 *
 */

/**
 * Sets global variable $lang to negotiated language.
 *
 * @param array $available_language_config: contains information for locales,
 *      for example:
 *      array(
 *          'en' => array('en_US',"English", "Watch this page in English", 1),
 *          'eo' => array('eo'   ,"Esperanto", "Watch this page in Esperanto", 0.24),
 *      )
 * @param string $override_langage: is override language, such as from cookie
 *      or domain name. Set to NULL to force negotiation of language from
 *      browser, using HTTP headers.
 * @param string $default: is the fallback language if none of the preferred
 *      languages can be set.
 */
function locale_negotiate_language($available_language_config, $override_langage, $default='en-gb') {
    global $langs, $langmap, $lang;

    $opt_langs = $available_language_config;
    $langs = array(); $langmap = array();
    foreach ($opt_langs as $code => $items) {
        list($locale, $verbose, $verbose_long, $percent) = $items;
        # Skip languages that are not completed, except if it's an override
        # language.
        if ($code != $override_langage && $percent < 1) {
            continue;
        }
        $langs[$code] = $verbose;
        $langmap[$code] = $locale;
    }
    if ($override_langage && array_key_exists($override_langage, $langs)) {
        $lang = $override_langage;
    } else {
        $lang = negotiateLanguage($langs); # local copy, see further down this file
        if (!$lang || !array_key_exists($lang, $langmap)) {
            $lang = NULL;
        }
    }
}

/* Note: To get a language working from PHP on Unix, you also need
to install the system locale for that language. In Debian this is done
using "dpkg-reconfigure locales". You may need to restart Apache also. */

/* locale_change LANG
 * Change human language to display text, dates, numbers etc. in. LANG is the
 * keys from the available language string previously passed to
 * locale_negotiate_language. Leave unset to use the default negotiated language.
 */
$locale_current = null;
function locale_change($l = "") {
    global $langmap, $lang, $locale_current;
    if ($l == "")
        $l = $lang;
    if ($l == $locale_current)
        return;
    putenv('LANGUAGE='); # clear this if set
    putenv('LANG='.$langmap[$l].'.UTF-8');
    $os_locale = $langmap[$l].'.UTF-8';
    $ret = setlocale(LC_ALL, $os_locale);
    if ($ret != $os_locale)
        err("setlocale failed for $os_locale");
    $locale_current = $l;
    // Clear gettext's cache - you have to do this when
    // you change environment variables.
    textdomain(textdomain(NULL));
}

/* locale_push LANG, locale_pop
 * Change locale using a stack system, so you can easily restore to whatever
 * locale was previously set. */
$locale_stack = array();
function locale_push($l) {
    global $locale_stack, $locale_current;
    array_push($locale_stack, $locale_current);
    locale_change($l);
}
function locale_pop() {
    global $locale_stack;
    $l = array_pop($locale_stack);
    locale_change($l);
}

/* locale_gettext_domain DOMAIN
 * Set gettext domain. e.g. 'PledgeBank' */
function locale_gettext_domain($domain) {
    bindtextdomain($domain, '../../locale');
    textdomain($domain);
    bind_textdomain_codeset($domain, 'UTF-8');
}

# PHP's own negotiateLanguage in HTTP.php is broken in old versions, so we use a copy
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

