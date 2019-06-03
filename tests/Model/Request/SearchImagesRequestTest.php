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

use WBW\Library\Pixabay\API\SearchImagesRequestInterface;
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
        $this->assertNull($obj->getOrientation());
    }

    /**
     * Tests the enumImageType() method.
     *
     * @return void
     */
    public function testEnumImageType() {

        $res = [
            SearchImagesRequestInterface::IMAGE_TYPE_ALL,
            SearchImagesRequestInterface::IMAGE_TYPE_ILLUSTRATION,
            SearchImagesRequestInterface::IMAGE_TYPE_PHOTO,
            SearchImagesRequestInterface::IMAGE_TYPE_VECTOR,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumImageType());
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

    /**
     * Tests the setOrientation() method.
     *
     * @return void
     */
    public function testSetOrientation() {

        $obj = new SearchImagesRequest();

        $obj->setOrientation("orientation");
        $this->assertEquals("orientation", $obj->getOrientation());
    }
}
