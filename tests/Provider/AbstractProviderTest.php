<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Provider;

use WBW\Library\Pixabay\Provider\AbstractProvider;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Tests the setKey() method.
     *
     * @retunr void.
     */
    public function testSetKey(): void {

        $obj = new TestProvider();

        $obj->setKey("key");
        $this->assertEquals("key", $obj->getKey());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("https://pixabay.com/api", AbstractProvider::ENDPOINT_PATH);

        $obj = new TestProvider();

        $this->assertNull($obj->getKey());
        $this->assertNull($obj->getLimit());
        $this->assertNull($obj->getRemaining());
        $this->assertNull($obj->getReset());
    }
}
