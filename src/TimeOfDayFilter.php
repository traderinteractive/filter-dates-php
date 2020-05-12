<?php

namespace TraderInteractive\Filter;

use TraderInteractive\Exceptions\FilterException;

final class TimeOfDayFilter
{
    /**
     * @var string
     */
    const TIME_OF_DAY_REGEX = '/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/';

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

        if (preg_match(self::TIME_OF_DAY_REGEX, $value) === 0) {
            throw new FilterException('$value must be in the correct format HH:MM:SS');
        }

        return $value;
    }
}
