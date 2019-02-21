<?php

if (!function_exists('bool2string')) {
    /**
     * @param bool $boolean
     * @return string
     */
    function bool2string($boolean)
    {
        if (true === $boolean || 'true' === $boolean || 1 === $boolean || '1' === $boolean) {
            return 'true';
        } else {
            return 'false';
        }
    }
}
