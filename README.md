# LongestCommonSubsequence

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-coveralls]][link-coveralls]
[![Total Downloads][ico-downloads]][link-downloads]

PHP Implementation of Longest common subsequence algorith that works with UTF-8.

## Install

Via Composer

``` bash
$ composer require gordonlesti/longest-common-subsequence
```

## Usage

``` php
use GordonLesti\LongestCommonSubsequence\LongestCommonSubsequence;
```

With default default costs.

``` php
$$lcsDist = LongestCommonSubsequence::lcs("DABDC", "CBDBBAC");
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email info@gordonlesti.com instead of using the issue tracker.

## Credits

- [Gordon Lesti][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/gordonlesti/longest-common-subsequence.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/GordonLesti/LongestCommonSubsequence/master.svg?style=flat-square
[ico-coveralls]: https://img.shields.io/coveralls/GordonLesti/LongestCommonSubsequence/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gordonlesti/longest-common-subsequence.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/gordonlesti/longest-common-subsequence
[link-travis]: https://travis-ci.org/GordonLesti/LongestCommonSubsequence
[link-coveralls]: https://coveralls.io/r/GordonLesti/LongestCommonSubsequence?branch=master
[link-downloads]: https://packagist.org/packages/gordonlesti/longest-common-subsequence
[link-author]: https://gordonlesti.com
[link-contributors]: ../../contributors
