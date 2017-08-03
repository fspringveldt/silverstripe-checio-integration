<?php

class ChecIOShortcode extends Object
{
    /**
     * ShortCode which adds a link to a chec.io buy now popup window
     * @param array $arguments
     * @param string $content
     * @param ShortcodeParser $parser
     * @param string $tagName
     * @return string
     */
    public static function BuyNowButton($arguments, $content = null, $parser = null, $tagName)
    {
        if (isset($arguments['data-chec-product-id'])) {
            $id = Convert::raw2att($arguments['data-chec-product-id']);
            unset($arguments['data-chec-product-id']);
            $siteURL = self::config()->get('third-party-url');

            $link = "<a href=\"$siteURL/{$id}\"";
            // Add all arguments as-is as we could potentially be receiving css class styles
            foreach ($arguments as $key => $val) {
                $val = Convert::raw2att($val);
                $link .= " {$key}=\"{$val}\" ";
            }
            $link .= ">{$content}</a>";
            return $link;
        }
        return '';
    }
}
