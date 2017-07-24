<?php

class ChecIOShortcode extends SiteTree
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
            $id = Convert::html2raw($id);
            $siteURL = self::config()->get('third-party-url');
            return "<a href=\"$siteURL/{$id}\" data-chec-product-id=\"{$id}\">{$content}</a>";
        }
        return '';
    }
}
