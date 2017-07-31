# SilverStripe chec.io integration

[![Build Status](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checio-integration/badges/build.png?b=master)](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checio-integration/build-status/master)
[![scrutinizer](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checio-integration/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/creative-commoners/silverstripe-checio-integration/)
[![Code Coverage](https://codecov.io/gh/creative-commoners/silverstripe-checio-integration/branch/master/graph/badge.svg)](https://codecov.io/gh/creative-commoners/silverstripe-checio-integration)
[![License](http://img.shields.io/packagist/l/creative-commoners/silverstripe-checio-integration.svg?style=flat-square)](LICENSE.md)

## Introduction

This module adds a `[BuyNow][/BuyNow]` shortcode to the SilverStripe CMS which can integrate with [chec.io](https://chec.io)

## Requirements

 * SilverStripe 3.6+

## Features


## Installation

 ```sh
 $ composer require creative-commoners/checio-integration
 ```
 
 ### Loading the chec.io javascript
 
 This extension automatically tries to load the chec.io javascript file, but for some reason should your active template block requirements, `ChecIOExtension::getChecIOJs()` fetches and loads this 
 javascript content inline for you. 
 
 Placing this before the closing body tag (e.g. `$ChecIOJs</body>`) in either your mysite or themes' templates/Page.ss ensures that it always
 gets loaded.
 
## Usage

**Basic usage**: 

`[BuyNowButton,data-chec-product-id="<your product id>",class="btn"]<your button text>[/BuyNowButton]`

replacing the parts between <> with your product info and your link label respectively.

## Maintainer

Creative Commoners - creativecommoners@silverstripe.com

## License

This module is licensed under the [MIT license](LICENSE).
