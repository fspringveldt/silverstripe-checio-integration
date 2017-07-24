<?php

if (!defined('CHEC_IO_DIR')) {
    define('CHEC_IO_DIR', basename(__DIR__));
}

ShortcodeParser::get('default')->register('BuyNowButton', array('CheckIOShortCode', 'BuyNowButton'));
