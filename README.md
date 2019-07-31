pixabay-library
===============

[![Build Status](https://img.shields.io/travis/com/webeweb/pixabay-library/master.svg?style=flat-square)](https://travis-ci.com/webeweb/pixabay-library)
[![Coverage Status](https://img.shields.io/coveralls/webeweb/pixabay-library/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/pixabay-library?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/pixabay-library/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/pixabay-library/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/pixabay-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/pixabay-library)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/pixabay-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/pixabay-library)
[![License](https://img.shields.io/packagist/l/webeweb/pixabay-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/pixabay-library)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/pixabay-library)

Integrate Pixabay API with your projects.

---

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/pixabay-library.svg?style=flat-square)](http://php.net)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/pixabay-library "^1.0"
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

---

## Usage

Read the [documentation](doc/index.md).

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/pixabay-library.git
$ cd pixabay-library
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

> IMPORTANT NOTICE: To test the package with your API key, edit the
> `tests/Provider/APIProviderTest.php` file to find and replace "YOUR_API_KEY".

---

## License

`pixabay-library` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

Please note that the Pixabay API is not free for use, see their
[API page](https://www.pixabay.com/api/documentation/) for details on usage.
