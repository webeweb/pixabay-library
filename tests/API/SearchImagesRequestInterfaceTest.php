<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\API;

use WBW\Library\Pixabay\API\SearchImagesRequestInterface;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\API
 */
class SearchImagesRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals("all", SearchImagesRequestInterface::IMAGE_TYPE_ALL);
        $this->assertEquals("illustration", SearchImagesRequestInterface::IMAGE_TYPE_ILLUSTRATION);
        $this->assertEquals("photo", SearchImagesRequestInterface::IMAGE_TYPE_PHOTO);
        $this->assertEquals("vector", SearchImagesRequestInterface::IMAGE_TYPE_VECTOR);
    }
}
