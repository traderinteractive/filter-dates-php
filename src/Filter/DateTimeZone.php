<?php

namespace TraderInteractive\Filter;

use TraderInteractive\Exceptions\FilterException;

/**
 * A collection of filters for filtering strings into \DateTimeZone objects.
 */
class DateTimeZone
{
    /**
     * Filters the given value into a \DateTimeZone object.
     *
     * @param mixed   $value     The value to be filtered.
     * @param boolean $allowNull True to allow nulls through, and false (default) if nulls should not be allowed.
     *
     * @return \DateTimeZone|null
     *
     * @throws \InvalidArgumentException Thrown if $allowNull was not a boolean value.
     * @throws FilterException if the value did not pass validation.
     */
    public static function filter($value, bool $allowNull = false)
    {
        if (self::valueIsNullAndValid($allowNull, $value)) {
            return null;
        }

        if ($value instanceof \DateTimeZone) {
            return $value;
        }

        if (!is_string($value) || trim($value) == '') {
            throw new FilterException('$value not a non-empty string');
        }

        try {
            return new \DateTimeZone($value);
        } catch (\Exception $e) {
            throw new FilterException($e->getMessage(), $e->getCode(), $e);
        }
    }

    private static function valueIsNullAndValid(bool $allowNull, $value = null) : bool
    {
        if ($allowNull === false && $value === null) {
            throw new FilterException('Value failed filtering, $allowNull is set to false');
        }
        return $allowNull === true && $value === null;
    }
}
