# CSSPrites

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/Benoth/cssprites.svg?style=flat-square)](https://travis-ci.org/Benoth/cssprites)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/Benoth/cssprites.svg?style=flat-square)](https://scrutinizer-ci.com/g/Benoth/cssprites/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/Benoth/cssprites.svg?style=flat-square)](https://scrutinizer-ci.com/g/Benoth/cssprites)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/d6070e0b-2008-42b7-a2ed-e7189815fd91/mini.png)](https://insight.sensiolabs.com/projects/da68ab1e-0d70-4042-8f48-c4995df72c6d)

This package is compliant with [PSR-1], [PSR-2] and [PSR-4]. If you notice compliance oversights,
please send a patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md

Simple CSS Sprites generator.

## Requirements

The following versions of PHP are supported:

* PHP 5.4
* PHP 5.5
* PHP 5.6

## Installation

### Phar file

Download the [cssprites.phar](http://benoth.github.io/phar/cssprites/cssprites.phar).

```bash
wget http://benoth.github.io/phar/cssprites/cssprites.phar
```

To install globally put `cssprites.phar` in `/usr/bin`.

```bash
sudo chmod +x cssprites.phar && mv cssprites.phar /usr/bin/cssprites
```

### Composer global

```bash
composer global require benoth/cssprites
```

## Usage

### Short version

Go in your sprite's images directory and run `cssprites generate` and just answer the few asked questions on how you want your sprite generated.

You can also run with `-i path/to/images` and `-n` for non interactive mode.

### Long version

@todo

## Testing

``` bash
$ vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [License File](https://github.com/Benoth/cssprites/blob/master/LICENSE) for more information.
