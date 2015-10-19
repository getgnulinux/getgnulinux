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
     * Return the absolute path if the path is valid, null otherwise.
     *
     * @param string $path A file path.
     * @return string The absolute path, null if invalid path.
     */
    static function fpath($path) {
        $path = realpath($path);
        if ($path === false || !self::startswith($path, ROOT)) {
            return null;
        }
        return $path;
    }
}
