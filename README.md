# SilverStripe chec.io integration

[![Build Status](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checkio-integration/badges/build.png?b=master)](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checkio-integration/build-status/master)
[![scrutinizer](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checkio-integration/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checkio-integration/)
[![Code Coverage](https://codecov.io/gh/creative-commoners/silverstripe-checkio-integration/branch/master/graph/badge.svg)](https://codecov.io/gh/creative-commoners/silverstripe-checkio-integration)
[![License](http://img.shields.io/packagist/l/creative-commoners/silverstripe-checkio-integration.svg?style=flat-square)](LICENSE.md)

## Introduction

This module adds a `[BuyNow][/BuyNow]` shortcode to the SilverStripe CMS which can integrate with [chec.io](https://chec.io)

## Requirements

 * SilverStripe 3.6+

## Features


## Installation

 ```sh
 $ composer require creative-commoners/silverstripe-checkio-integration
 ```
 
 ### Loading the chec.io javascript
 
 This extension automatically tries to load the chec.io javascript file, but for some reason should your active template block requirements, `ChecIOExtension::getChecIOJs()` fetches and loads this 
 javascript content inline for you. Placing this before the closing body tag (e.g. `$ChecIOJs</body>`) in your mysite themes templates/Page.ss ensures that it always
 gets loaded quickly.

## Maintainer

Creative Commoners - creativecommoners@silverstripe.com

## License

This module is licensed under the [MIT license](LICENSE).
