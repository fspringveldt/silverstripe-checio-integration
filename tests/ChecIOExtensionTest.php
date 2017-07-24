<?php

class ChecIOExtensionTest extends SapphireTest
{
    protected static $fixture_file = 'ChecIOShortcodeTest.yml';

    /**
     * @var Page
     */
    private $page;

    public function setUp()
    {
        parent::setUp();
        $this->page = $this->objFromFixture('Page', 'test');
    }

    /**
     * Tests that a non-empty result is returned.
     */
    public function testGetChecIOJs()
    {
        $result = $this->page->getChecIOJs();
        $this->assertNotNull($result);
        $this->assertContains('var add_iframe', $result);
    }
}
