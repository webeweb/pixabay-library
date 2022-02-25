<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information", please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Api;

use WBW\Library\Pixabay\Api\RequestInterface;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Api
 */
class RequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("bg", RequestInterface::LANG_BG);
        $this->assertEquals("cs", RequestInterface::LANG_CS);
        $this->assertEquals("da", RequestInterface::LANG_DA);
        $this->assertEquals("de", RequestInterface::LANG_DE);
        $this->assertEquals("el", RequestInterface::LANG_EL);
        $this->assertEquals("en", RequestInterface::LANG_EN);
        $this->assertEquals("es", RequestInterface::LANG_ES);
        $this->assertEquals("fi", RequestInterface::LANG_FI);
        $this->assertEquals("fr", RequestInterface::LANG_FR);
        $this->assertEquals("hu", RequestInterface::LANG_HU);
        $this->assertEquals("id", RequestInterface::LANG_ID);
        $this->assertEquals("it", RequestInterface::LANG_IT);
        $this->assertEquals("ja", RequestInterface::LANG_JA);
        $this->assertEquals("ko", RequestInterface::LANG_KO);
        $this->assertEquals("nl", RequestInterface::LANG_NL);
        $this->assertEquals("no", RequestInterface::LANG_NO);
        $this->assertEquals("pl", RequestInterface::LANG_PL);
        $this->assertEquals("pt", RequestInterface::LANG_PT);
        $this->assertEquals("ro", RequestInterface::LANG_RO);
        $this->assertEquals("ru", RequestInterface::LANG_RU);
        $this->assertEquals("sk", RequestInterface::LANG_SK);
        $this->assertEquals("sv", RequestInterface::LANG_SV);
        $this->assertEquals("th", RequestInterface::LANG_TH);
        $this->assertEquals("tr", RequestInterface::LANG_TR);
        $this->assertEquals("vi", RequestInterface::LANG_VI);
        $this->assertEquals("zh", RequestInterface::LANG_ZH);

        $this->assertEquals("latest", RequestInterface::ORDER_LATEST);
        $this->assertEquals("popular", RequestInterface::ORDER_POPULAR);

        $this->assertEquals(20, RequestInterface::PER_PAGE_DEFAULT);
        $this->assertEquals(200, RequestInterface::PER_PAGE_MAX);
        $this->assertEquals(3, RequestInterface::PER_PAGE_MIN);
    }

}
