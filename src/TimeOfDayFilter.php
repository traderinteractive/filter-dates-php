<?php

namespace TraderInteractive\Filter;

use TraderInteractive\Exceptions\FilterException;

final class TimeOfDayFilter
{
    /**
     * Filters a given value as a valid HH:MM:SS formatted string.
     *
     * @param mixed $value the value to be filtered.
     *
     * @return string
     *
     * @throws FilterException Thrown if the value cannot be filtered.
     */
    public static function filter($value) : string
    {
        if (!is_string($value) || trim($value) === '') {
            throw new FilterException('$value must be a non-empty string');
        }

        $pattern = '/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/';
        if (preg_match($pattern, $value) === 0) {
            throw new FilterException('$value must be in the correct format HH:MM:SS');
        }

        return $value;
    }
}
