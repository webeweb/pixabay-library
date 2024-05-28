<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pixabay\Tests\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Pixabay\Provider\AbstractProvider;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Test setKey()
     *
     * @retunr void.
     */
    public function testSetKey(): void {

        $obj = new TestProvider();

        $obj->setKey("key");
        $this->assertEquals("key", $obj->getKey());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $this->assertEquals("https://pixabay.com/api", AbstractProvider::ENDPOINT_PATH);

        $obj = new TestProvider("key", $logger);

        $this->assertSame($logger, $obj->getLogger());

        $this->assertEquals("key", $obj->getKey());
        $this->assertNull($obj->getLimit());
        $this->assertNull($obj->getRemaining());
        $this->assertNull($obj->getReset());
    }
}
