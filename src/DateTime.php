<?php

namespace TraderInteractive\Filter;

use DateTimeInterface;
use DateTimeZone as DateTimeZoneStandard;
use DateTime as DateTimeStandard;
use TraderInteractive\Exceptions\FilterException;

/**
 * A collection of filters for filtering strings into \DateTime objects.
 */
class DateTime
{
    /**
     * Filters the given value into a \DateTime object.
     *
     * @param mixed                $value     The value to be filtered.
     * @param boolean $allowNull              True to allow nulls through, and false (default) if nulls should
     *                                        not be allowed.
     * @param DateTimeZoneStandard $timezone  A \DateTimeZone object representing the timezone of $value.
     *                                        If $timezone is omitted, the current timezone will be used.
     *
     * @return DateTimeStandard|null
     *
     * @throws FilterException if the value did not pass validation.
     */
    public static function filter($value, bool $allowNull = false, DateTimeZoneStandard $timezone = null)
    {
        if (self::valueIsNullAndValid($allowNull, $value)) {
            return null;
        }

        if ($value instanceof DateTimeStandard) {
            return $value;
        }

        if (is_int($value) || ctype_digit($value)) {
            $value = "@{$value}";
        }

        if (!is_string($value) || trim($value) == '') {
            throw new FilterException('$value is not a non-empty string');
        }

        return new DateTimeStandard($value, $timezone);
    }

    /**
     * Filters the give \DateTime object to a formatted string.
     *
     * @param DateTimeInterface $dateTime The date to be formatted.
     * @param string            $format   The format of the outputted date string.
     *
     * @return string
     *
     * @throws \InvalidArgumentException Thrown if $format is not a string
     */
    public static function format(DateTimeInterface $dateTime, string $format = 'c') : string
    {
        if (empty(trim($format))) {
            throw new \InvalidArgumentException('$format is not a non-empty string');
        }

        return $dateTime->format($format);
    }

    private static function valueIsNullAndValid(bool $allowNull, $value = null) : bool
    {
        if ($allowNull === false && $value === null) {
            throw new FilterException('Value failed filtering, $allowNull is set to false');
        }
        return $allowNull === true && $value === null;
    }
}
