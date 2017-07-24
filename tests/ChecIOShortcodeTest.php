<?php

class ChecIOShortcodeTest extends FunctionalTest
{
    protected static $fixture_file = 'ChecIOShortcodeTest.yml';

    /**
     * @var Page
     */
    private $page;

    public function setUp()
    {
        parent::setUp();
        $this->page = $this->objFromFixture('SiteTree', 'test');
    }

    /**
     * Tests that the shortcode gets parsed
     */
    public function testBuyNowButton()
    {
        $text = $this->page->Content;
        $parsed = ShortcodeParser::get_active()->parse($text);
        $this->assertContains(
            '<a href="https://checkout.chec.io/1" data-chec-product-id="1">Buy Now</a>',
            $parsed
        );
    }
}
