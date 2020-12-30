<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Model;

use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestHit;
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Tests the addHit() method.
     *
     * @return void
     */
    public function testAddHit(): void {

        // Set a Hit mock.
        $hit = new TestHit();

        $obj = new TestResponse();

        $obj->addHit($hit);
        $this->assertCount(1, $obj->getHits());
        $this->assertSame($hit, $obj->getHits()[0]);
    }

    /**
     * Tests the setRawResponse() method.
     *
     * @return void
     */
    public function testSetRawResponse(): void {

        $obj = new TestResponse();

        $obj->setRawResponse("rawResponse");
        $this->assertEquals("rawResponse", $obj->getRawResponse());
    }

    /**
     * Tests the setTotal() method.
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new TestResponse();

        $obj->setTotal(1);
        $this->assertEquals(1, $obj->getTotal());
    }

    /**
     * Tests the setTotalHits() method.
     *
     * @return void
     */
    public function testSetTotalHits(): void {

        $obj = new TestResponse();

        $obj->setTotalHits(1);
        $this->assertEquals(1, $obj->getTotalHits());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestResponse();

        $this->assertCount(0, $obj->getHits());
        $this->assertNull($obj->getLimit());
        $this->assertNull($obj->getRawResponse());
        $this->assertNull($obj->getRemaining());
        $this->assertNull($obj->getReset());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTotalHits());
    }
}
