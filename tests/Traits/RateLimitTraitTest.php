<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Traits;

use DateTime;
use Exception;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Traits\TestRateLimitTrait;

/**
 * Rate limit trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Traits
 */
class RateLimitTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestRateLimitTrait();

        $this->assertNull($obj->getLimit());
        $this->assertNull($obj->getRemaining());
        $this->assertNull($obj->getReset());
    }

    /**
     * Tests the setLimit() method.
     *
     * @return void
     */
    public function testSetLimit() {

        $obj = new TestRateLimitTrait();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Tests the setRemaining() method.
     *
     * @return void
     */
    public function testSetRemaining() {

        $obj = new TestRateLimitTrait();

        $obj->setRemaining(1);
        $this->assertEquals(1, $obj->getRemaining());
    }

    /**
     * Tests the setReset() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetReset() {

        // Set a Date/time mock.
        $reset = new DateTime();

        $obj = new TestRateLimitTrait();

        $obj->setReset($reset);
        $this->assertSame($reset, $obj->getReset());
    }
}