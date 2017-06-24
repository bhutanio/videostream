<?php

/**
 * Converts a string to UTF-8 encoding.
 *
 * @param   $string
 *
 * @return string
 */
function convert_to_utf8($string)
{
    if (is_string($string) && !check_if_utf8($string)) {
        if (function_exists('mb_convert_encoding')) {
            $string = mb_convert_encoding($string, 'UTF-8',
                mb_detect_encoding($string, 'UTF-8, ISO-8859-1, ISO-8859-15'));
        } else {
            $string = utf8_encode($string);
        }
    }

    return $string;
}

/**
 * Checks a string for UTF-8 encoding.
 *
 * @param string $string
 *
 * @return bool
 */
function check_if_utf8($string)
{
    $length = strlen($string);

    for ($i = 0; $i < $length; ++$i) {
        if (ord($string[$i]) < 0x80) {
            $n = 0;
        } elseif ((ord($string[$i]) & 0xE0) == 0xC0) {
            $n = 1;
        } elseif ((ord($string[$i]) & 0xF0) == 0xE0) {
            $n = 2;
        } elseif ((ord($string[$i]) & 0xF0) == 0xF0) {
            $n = 3;
        } else {
            return false;
        }

        for ($j = 0; $j < $n; ++$j) {
            if ((++$i == $length) || ((ord($string[$i]) & 0xC0) != 0x80)) {
                return false;
            }
        }
    }

    return true;
}
