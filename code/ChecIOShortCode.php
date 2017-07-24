<?php

class ChecIOShortCode extends SiteTree
{
    private static $casting = array(
        'BuyNowButton' => 'HTMLText'
    );

    /**
     * ShortCode which adds a link to a chec.io buy now popup window
     * @param $arguments
     * @param null $content
     * @param null $parser
     * @param null $tagName
     * @return string
     */
    public static function BuyNowButton($arguments, $content = null, $parser = null, $tagName)
    {
        if ($id = $arguments['product-id']) {
            return "<a href=\"https://checkout.chec.io/{$id}\" data-chec-product-id=\"{$id}\">{$content}</a>";
        }
        return '';
    }
}
