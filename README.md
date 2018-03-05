# filter-strings-php

A filtering implementation for verifying correct data and performing typical modifications to data.

[![Build Status](https://travis-ci.org/traderinteractive/filter-strings-php.svg?branch=master)](https://travis-ci.org/traderinteractive/filter-strings-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/traderinteractive/filter-strings-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/traderinteractive/filter-strings-php/?branch=master)
[![Coverage Status](https://coveralls.io/repos/github/traderinteractive/filter-strings-php/badge.svg?branch=master)](https://coveralls.io/github/traderinteractive/filter-strings-php?branch=master)

[![Latest Stable Version](https://poser.pugx.org/traderinteractive/filter-strings/v/stable)](https://packagist.org/packages/traderinteractive/filter-strings)
[![Latest Unstable Version](https://poser.pugx.org/traderinteractive/filter-strings/v/unstable)](https://packagist.org/packages/traderinteractive/filter-strings)
[![License](https://poser.pugx.org/traderinteractive/filter-strings/license)](https://packagist.org/packages/traderinteractive/filter-strings)

[![Total Downloads](https://poser.pugx.org/traderinteractive/filter-strings/downloads)](https://packagist.org/packages/traderinteractive/filter-strings)
[![Daily Downloads](https://poser.pugx.org/traderinteractive/filter-strings/d/daily)](https://packagist.org/packages/traderinteractive/filter-strings)
[![Monthly Downloads](https://poser.pugx.org/traderinteractive/filter-strings/d/monthly)](https://packagist.org/packages/traderinteractive/filter-strings)

## Features

TO DO

## Example

TO DO

## Composer

To add the library as a local, per-project dependency use [Composer](http://getcomposer.org)! Simply add a dependency on
`traderinteractive/filter-strings` to your project's `composer.json` file such as:

```sh
composer require traderinteractive/filter-strings
```

## Documentation

TO DO

#### Specification

TODO

#### DateTime::filter

Aliased in the filterer as `date`, this will filter the value as a `\DateTime` object. The value can be any string that conforms to [PHP's valid date/time formats](http://php.net/manual/en/datetime.formats.php)

The following checks that `$value` is a date/time.

```php
$dateTime = \TraderInteractive\Filter\DateTime::filter('2014-02-04T11:55:00-0500');
```

#### DateTime::format

Aliased in the filterer as `date-format`, this will filter a given `\DateTime' value to a string based on the given format.

The following returns formatted string for a given `\DateTime` `$value`

```php
$formatted = \TraderInteractive\Filter\DateTime::format($value, 'Y-m-d H:i:s');
```

#### DateTimeZone::filter

Aliased in the filterer as `date`, this will filter the value as a `\DateTimeZone` object. The value can be any [supported timezone name](http://php.net/manual/en/timezones.php)

The following checks that `$value` is a timezone

```php
$timezone = \TraderInteractive\Filter\DateTimeZone::filter('America/New_York');
```

## Contact

Developers may be contacted at:

 * [Pull Requests](https://github.com/traderinteractive/filter-strings-php/pulls)
 * [Issues](https://github.com/traderinteractive/filter-strings-php/issues)

## Project Build

With a checkout of the code get [Composer](http://getcomposer.org) in your PATH and run:

```bash
./vendor/bin/phpcs
./vendor/bin/phpunit
```

For more information on our build process, read through out our [Contribution Guidelines](CONTRIBUTING.md).
