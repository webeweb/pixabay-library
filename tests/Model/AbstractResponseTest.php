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
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestResponse();

        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTotalHits());
    }

    /**
     * Tests the setTotal() method.
     *
     * @return void
     */
    public function testSetTotal() {

        $obj = new TestResponse();

        $obj->setTotal(1);
        $this->assertEquals(1, $obj->getTotal());
    }

    /**
     * Tests the setTotalHits() method.
     *
     * @return void
     */
    public function testSetTotalHits() {

        $obj = new TestResponse();

        $obj->setTotalHits(1);
        $this->assertEquals(1, $obj->getTotalHits());
    }
}
