<?php

class ChecIOExtension extends SiteTreeExtension
{
    /**
     * Loads the third party javascript during Controller->init()
     */
    public function contentcontrollerInit()
    {
        if ($jsPath = ChecIOShortcode::config()->get('third-party-js')) {
            Requirements::javascript($jsPath);
        }
    }

    /**
     * Tries to fetch the inline chec.io JS from cache, failing which it gets it from the URL.
     * Should your theme clear requirements, placing this before the closing body tag ensures
     * that it always gets loaded.
     * @return string
     */
    public function getChecIOJs()
    {
        if ($jsPath = ChecIOShortcode::config()->get('third-party-js')) {
            return sprintf('<script type="text/javascript" src="%s"></script>', $jsPath);
        }
        return '';
    }
}
