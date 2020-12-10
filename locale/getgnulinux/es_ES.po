<?php

class Util
{
    /**
     * Return TRUE if haystack starts with needle.
     *
     * @param string $haystack The string to search in.
     * @param string $needle The string to search with.
     * @return boolean
     */
    static function startswith($haystack, $needle) {
        return strpos($haystack, $needle) === 0;
    }

    /**
     * Return the absolute path if the path is valid, NULL otherwise.
     *
     * @param string $path A file path.
     * @return string The safe canonicalized path, NULL if the path is invalid.
     */
    static function safe_path($path) {
        $real_path = realpath($path);

        if ($real_path === false) {
            return null;
        }

        if (!self::startswith($real_path, ROOT)) {
            return null;
        }

        return $real_path;
    }

    /**
     * Computes the intersection of arrays using keys for comparison.
     *
     * @param array $array The array with master keys to check.
     * @param array $keys An array to compare values against.
     * @return array Array containing all the entries of `array` which have
     *         keys that are present as values in `keys`.
     */
    static function array_intersect_keys($array, $keys) {
        return array_intersect_key($array, array_combine($keys, $keys));
    }

    /**
     * Set gettext domain, domain path, and character encoding.
     *
     * @param string $domain The domain.
     * @param string $directory The directory path.
     * @param string $codeset The code set.
     */
    static function gettext_set_domain($domain, $directory, $codeset) {
        bindtextdomain($domain, $directory);
        textdomain($domain);
        bind_textdomain_codeset($domain, $codeset);
    }
}
