# SilverStripe chec.io integration

[![Build Status](https://scrutinizer-ci.com/g/fspringveldt/silverstripe-checio-integration/badges/build.png?b=1.0)](https://scrutinizer-ci.com/g/fspringveldt/silverstripe-checio-integration/build-status/1.0)
[![scrutinizer](https://scrutinizer-ci.com/g/fspringveldt/silverstripe-checio-integration/badges/quality-score.png?b=1.0)](https://scrutinizer-ci.com/g/fspringveldt/silverstripe-checio-integration/)

## Introduction

This module adds a `[BuyNow][/BuyNow]` shortcode to the SilverStripe CMS which can integrate with [chec.io](https://chec.io)

## Requirements

 * SilverStripe 3.2+

## Installation

 ```sh
 $ composer require fspringveldt/checio-integration
 ```
 
 ### Loading the chec.io javascript
 
 This extension automatically tries to load the chec.io javascript file, but for some reason should your active template block requirements, `ChecIOExtension::getChecIOJs()` fetches and loads this 
 javascript content inline for you. 
 
 Placing this before the closing body tag (e.g. `$ChecIOJs</body>`) in either your mysite or themes' templates/Page.ss ensures that it always
 gets loaded.
 
## Usage

The below short code should be placed in your the content section of your CMS page editor window


`[BuyNowButton,data-chec-product-id="<your product id>",class="btn"]<your button text>[/BuyNowButton]`

replacing the parts between <> with your product info and your link text respectively.

## Maintainer

Franco Springveldt - fspringveldt@gmail.com

## License

This module is licensed under the [MIT license](LICENSE).
