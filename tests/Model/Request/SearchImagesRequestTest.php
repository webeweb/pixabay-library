<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Model\Request;

use WBW\Library\Pixabay\Model\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model\Request
 */
class SearchImagesRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SearchImagesRequest();

        $this->assertNull($obj->getColors());
        $this->assertNull($obj->getImageType());
    }

    /**
     * Tests the setColors() method.
     *
     * @return void
     */
    public function testSetColors() {

        $obj = new SearchImagesRequest();

        $obj->setColors("colors");
        $this->assertEquals("colors", $obj->getColors());
    }

    /**
     * Tests the setImageType() method.
     *
     * @return void
     */
    public function testSetImageType() {

        $obj = new SearchImagesRequest();

        $obj->setImageType("imageType");
        $this->assertEquals("imageType", $obj->getImageType());
    }
}