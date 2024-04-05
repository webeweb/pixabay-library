<?php

declare(strict_types = 1);

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Request;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Pixabay\Api\RequestInterface;
use WBW\Library\Pixabay\Request\AbstractRequest;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Request\TestRequest;

/**
 * Abstract request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Request
 */
class AbstractRequestTest extends AbstractTestCase {

    /**
     * Test enumLang()
     *
     * @return void
     */
    public function testEnumLang(): void {

        $res = [
            RequestInterface::LANG_BG,
            RequestInterface::LANG_CS,
            RequestInterface::LANG_DA,
            RequestInterface::LANG_DE,
            RequestInterface::LANG_EL,
            RequestInterface::LANG_EN,
            RequestInterface::LANG_ES,
            RequestInterface::LANG_FI,
            RequestInterface::LANG_FR,
            RequestInterface::LANG_HU,
            RequestInterface::LANG_ID,
            RequestInterface::LANG_IT,
            RequestInterface::LANG_JA,
            RequestInterface::LANG_KO,
            RequestInterface::LANG_NL,
            RequestInterface::LANG_NO,
            RequestInterface::LANG_PL,
            RequestInterface::LANG_PT,
            RequestInterface::LANG_RO,
            RequestInterface::LANG_RU,
            RequestInterface::LANG_SK,
            RequestInterface::LANG_SV,
            RequestInterface::LANG_TH,
            RequestInterface::LANG_TR,
            RequestInterface::LANG_VI,
            RequestInterface::LANG_ZH,
        ];

        $this->assertEquals($res, AbstractRequest::enumLang());
    }

    /**
     * Test enumOrder()
     *
     * @return void
     */
    public function testEnumOrder(): void {

        $res = [
            RequestInterface::ORDER_LATEST,
            RequestInterface::ORDER_POPULAR,
        ];

        $this->assertEquals($res, AbstractRequest::enumOrder());
    }

    /**
     * Test setCategory()
     *
     * @return void
     */
    public function testSetCategory(): void {

        $obj = new TestRequest();

        $obj->setCategory("category");
        $this->assertEquals("category", $obj->getCategory());
    }

    /**
     * Test setEditorsChoice()
     *
     * @return void
     */
    public function testSetEditorsChoice(): void {

        $obj = new TestRequest();

        $obj->setEditorsChoice(true);
        $this->assertTrue($obj->getEditorsChoice());
    }

    /**
     * Test setLang()
     *
     * @return void
     */
    public function testSetLang(): void {

        $obj = new TestRequest();

        $obj->setLang(RequestInterface::LANG_EN);
        $this->assertEquals(RequestInterface::LANG_EN, $obj->getLang());
    }

    /**
     * Test setLang()
     *
     * @return void
     */
    public function testSetLangWithInvalidArgumentException(): void {

        $obj = new TestRequest();

        try {

            $obj->setLang("lang");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The lang "lang" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setMinHeight()
     *
     * @return void
     */
    public function testSetMinHeight(): void {

        $obj = new TestRequest();

        $obj->setMinHeight(0);
        $this->assertEquals(0, $obj->getMinHeight());
    }

    /**
     * Test setMinWidth()
     *
     * @return void
     */
    public function testSetMinWidth(): void {

        $obj = new TestRequest();

        $obj->setMinWidth(0);
        $this->assertEquals(0, $obj->getMinWidth());
    }

    /**
     * Test setOrder()
     *
     * @return void
     */
    public function testSetOrder(): void {

        $obj = new TestRequest();

        $obj->setOrder(RequestInterface::ORDER_POPULAR);
        $this->assertEquals(RequestInterface::ORDER_POPULAR, $obj->getOrder());
    }

    /**
     * Test setOrder()
     *
     * @return void
     */
    public function testSetOrderWithInvalidArgumentException(): void {

        $obj = new TestRequest();

        try {

            $obj->setOrder("order");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The order "order" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setPage()
     *
     * @return void
     */
    public function testSetPage(): void {

        $obj = new TestRequest();

        $obj->setPage(1);
        $this->assertEquals(1, $obj->getPage());
    }

    /**
     * Test setPage()
     *
     * @return void
     */
    public function testSetPageWithInvalidArgumentException(): void {

        $obj = new TestRequest();

        try {

            $obj->setPage(0);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The page must be greater than 0", $ex->getMessage());
        }
    }

    /**
     * Test setPerPage()
     *
     * @return void
     */
    public function testSetPerPage(): void {

        $obj = new TestRequest();

        $obj->setPerPage(20);
        $this->assertEquals(20, $obj->getPerPage());
    }

    /**
     * Test setPerPage()
     *
     * @return void
     */
    public function testSetPerPageWithInvalidArgumentException(): void {

        $obj = new TestRequest();

        try {

            $obj->setPerPage(2);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The per page must be between 3 and 200", $ex->getMessage());
        }

        try {

            $obj->setPerPage(201);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The per page must be between 3 and 200", $ex->getMessage());
        }
    }

    /**
     * Test setPretty()
     *
     * @return void
     */
    public function testSetPretty(): void {

        $obj = new TestRequest();

        $obj->setPretty(true);
        $this->assertTrue($obj->getPretty());
    }

    /**
     * Test setQ()
     *
     * @return void
     */
    public function testSetQ(): void {

        $obj = new TestRequest();

        $obj->setQ("query");
        $this->assertEquals("query", $obj->getQ());
    }

    /**
     * Test setSafeSearch()
     *
     * @return void
     */
    public function testSetSafeSearch(): void {

        $obj = new TestRequest();

        $obj->setSafeSearch(true);
        $this->assertTrue($obj->getSafeSearch());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestRequest();

        $this->assertNull($obj->getCategory());
        $this->assertFalse($obj->getEditorsChoice());
        $this->assertNull($obj->getId());
        $this->assertEquals(RequestInterface::LANG_EN, $obj->getLang());
        $this->assertEquals(0, $obj->getMinHeight());
        $this->assertEquals(0, $obj->getMinWidth());
        $this->assertEquals(RequestInterface::ORDER_POPULAR, $obj->getOrder());
        $this->assertEquals(1, $obj->getPage());
        $this->assertEquals(RequestInterface::PER_PAGE_DEFAULT, $obj->getPerPage());
        $this->assertFalse($obj->getPretty());
        $this->assertNull($obj->getQ());
        $this->assertFalse($obj->getSafeSearch());
    }
}
