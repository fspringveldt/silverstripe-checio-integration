<?php

class ChecIOExtension extends SiteTreeExtension
{
    /**
     * Loads the third party javascript during Controller->init()
     */
    public function contentcontrollerInit()
    {
        Requirements::javascript(ChecIOShortcode::config()->get('third-party-js'));
    }

    /**
     * Tries to fetch the inline check.io JS from cache, failing which it gets it from the URL.
     * Should your theme clear requirements, placing this before the closing body tag ensures
     * that it always gets loaded.
     * @return string
     */
    public function getChecIOJs()
    {
        $cache = SS_Cache::factory('checio');
        $cacheKey = 'js';
        if (!$result = $cache->load($cacheKey)) {
            $service = new RestfulService(ChecIOShortcode::config()->get('third-party-js'));
            $response = $service->request('?' . mt_rand(0, 9));
            $result = $response->getBody();
            $cache->save($result, $cacheKey);
        }
        return sprintf('<script type="text/javascript">%s</script>', $result);
    }
}
