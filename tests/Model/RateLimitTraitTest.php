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

use DateTime;
use Exception;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestRateLimitTrait;

/**
 * Rate limit trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class RateLimitTraitTest extends AbstractTestCase {

    /**
     * Tests the setLimit() method.
     *
     * @return void
     */
    public function testSetLimit(): void {

        $obj = new TestRateLimitTrait();

        $obj->setLimit(1);
        $this->assertEquals(1, $obj->getLimit());
    }

    /**
     * Tests the setRemaining() method.
     *
     * @return void
     */
    public function testSetRemaining(): void {

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
    public function testSetReset(): void {

        // Set a Date/time mock.
        $reset = new DateTime();

        $obj = new TestRateLimitTrait();

        $obj->setReset($reset);
        $this->assertSame($reset, $obj->getReset());
    }
}
