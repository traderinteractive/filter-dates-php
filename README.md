# filter-dates-php

[![Build Status](https://travis-ci.org/traderinteractive/filter-dates-php.svg?branch=master)](https://travis-ci.org/traderinteractive/filter-dates-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/traderinteractive/filter-dates-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/traderinteractive/filter-dates-php/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/traderinteractive/filter-dates-php/badge.svg?branch=master)](https://coveralls.io/github/traderinteractive/filter-dates-php?branch=master)

[![Latest Stable Version](https://poser.pugx.org/traderinteractive/filter-dates/v/stable)](https://packagist.org/packages/traderinteractive/filter-dates)
[![Latest Unstable Version](https://poser.pugx.org/traderinteractive/filter-dates/v/unstable)](https://packagist.org/packages/traderinteractive/filter-dates)
[![License](https://poser.pugx.org/traderinteractive/filter-dates/license)](https://packagist.org/packages/traderinteractive/filter-dates)

[![Total Downloads](https://poser.pugx.org/traderinteractive/filter-dates/downloads)](https://packagist.org/packages/traderinteractive/filter-dates)
[![Daily Downloads](https://poser.pugx.org/traderinteractive/filter-dates/d/daily)](https://packagist.org/packages/traderinteractive/filter-dates)
[![Monthly Downloads](https://poser.pugx.org/traderinteractive/filter-dates/d/monthly)](https://packagist.org/packages/traderinteractive/filter-dates)

A filtering implementation for verifying correct data and performing typical modifications to common date objects.

## Requirements

Requires PHP 7.0 or newer and uses composer to install further PHP dependencies.  See the [composer specification](composer.json) for more details.

## Composer

To add the library as a local, per-project dependency use [Composer](http://getcomposer.org)! Simply add a dependency on
`traderinteractive/filter-dates` to your project's `composer.json` file such as:

```sh
composer require traderinteractive/filter-dates
```

### Functionality

#### DateTime::filter

This will filter the value as a `\DateTime` object. The value can be any string that conforms to [PHP's valid date/time formats](http://php.net/manual/en/datetime.formats.php)

The following checks that `$value` is a date/time.

```php
$dateTime = \TraderInteractive\Filter\DateTime::filter('2014-02-04T11:55:00-0500');
```

#### DateTime::format

This will filter a given `\DateTime' value to a string based on the given format.

The following returns formatted string for a given `\DateTime` `$value`

```php
$formatted = \TraderInteractive\Filter\DateTime::format($value, 'Y-m-d H:i:s');
```

#### DateTimeZone::filter

This will filter the value as a `\DateTimeZone` object. The value can be any [supported timezone name](http://php.net/manual/en/timezones.php)

The following checks that `$value` is a timezone

```php
$timezone = \TraderInteractive\Filter\DateTimeZone::filter('America/New_York');
```

#### TimeOfDayFilter::filter

This will filter values as a time-of-day string in the format of `HH:MM:SS`

The following checks that `$value` is a valid time-of-day string

```php
$timeOfDay = \TraderInteractive\Filter\TimeOfDayFilter::filter('12:00:59');
```

## Contact

Developers may be contacted at:

 * [Pull Requests](https://github.com/traderinteractive/filter-dates-php/pulls)
 * [Issues](https://github.com/traderinteractive/filter-dates-php/issues)

## Project Build

With a checkout of the code get [Composer](http://getcomposer.org) in your PATH and run:

```bash
composer install
./vendor/bin/phpcs
./vendor/bin/phpunit
```

For more information on our build process, read through out our [Contribution Guidelines](CONTRIBUTING.md).
