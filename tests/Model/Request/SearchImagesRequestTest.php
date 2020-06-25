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

use Exception;
use InvalidArgumentException;
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
     * Tests the addColor() method.
     *
     * @return void
     */
    public function testAddColor() {

        $obj = new SearchImagesRequest();

        $obj->addColor(SearchImagesRequest::COLOR_BLACK);
        $this->assertCount(1, $obj->getColors());
        $this->assertEquals(SearchImagesRequest::COLOR_BLACK, $obj->getColors()[0]);
    }

    /**
     * Tests the addColor() method.
     *
     * @return void
     */
    public function testAddColorWithInvalidArgumentException() {

        $obj = new SearchImagesRequest();

        try {

            $obj->addColor("color");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The color "color" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the enumCategory() method..
     *
     * @return void
     */
    public function testEnumCategory() {

        $res = [
            SearchImagesRequestInterface::CATEGORY_ANIMALS,
            SearchImagesRequestInterface::CATEGORY_BACKGROUNDS,
            SearchImagesRequestInterface::CATEGORY_BUILDINGS,
            SearchImagesRequestInterface::CATEGORY_BUSINESS,
            SearchImagesRequestInterface::CATEGORY_COMPUTER,
            SearchImagesRequestInterface::CATEGORY_EDUCATION,
            SearchImagesRequestInterface::CATEGORY_FASHION,
            SearchImagesRequestInterface::CATEGORY_FEELINGS,
            SearchImagesRequestInterface::CATEGORY_FOOD,
            SearchImagesRequestInterface::CATEGORY_HEALTH,
            SearchImagesRequestInterface::CATEGORY_INDUSTRY,
            SearchImagesRequestInterface::CATEGORY_MUSIC,
            SearchImagesRequestInterface::CATEGORY_NATURE,
            SearchImagesRequestInterface::CATEGORY_PEOPLE,
            SearchImagesRequestInterface::CATEGORY_PLACES,
            SearchImagesRequestInterface::CATEGORY_RELIGION,
            SearchImagesRequestInterface::CATEGORY_SCIENCE,
            SearchImagesRequestInterface::CATEGORY_SPORTS,
            SearchImagesRequestInterface::CATEGORY_TRANSPORTATION,
            SearchImagesRequestInterface::CATEGORY_TRAVEL,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumCategory());
    }

    /**
     * Tests the enumColor() method.
     *
     * @return void
     */
    public function testEnumColor() {

        $res = [
            SearchImagesRequestInterface::COLOR_BLACK,
            SearchImagesRequestInterface::COLOR_BLUE,
            SearchImagesRequestInterface::COLOR_BROWN,
            SearchImagesRequestInterface::COLOR_GRAY,
            SearchImagesRequestInterface::COLOR_GRAYSCALE,
            SearchImagesRequestInterface::COLOR_GREEN,
            SearchImagesRequestInterface::COLOR_LILAC,
            SearchImagesRequestInterface::COLOR_ORANGE,
            SearchImagesRequestInterface::COLOR_PINK,
            SearchImagesRequestInterface::COLOR_RED,
            SearchImagesRequestInterface::COLOR_TRANSPARENT,
            SearchImagesRequestInterface::COLOR_TURQUOISE,
            SearchImagesRequestInterface::COLOR_YELLOW,
            SearchImagesRequestInterface::COLOR_WHITE,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumColor());
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
     * Tests the enumOrientation() method.
     *
     * @return void.
     */
    public function testEnumOrientation() {

        $res = [
            SearchImagesRequestInterface::ORIENTATION_ALL,
            SearchImagesRequestInterface::ORIENTATION_HORIZONTAL,
            SearchImagesRequestInterface::ORIENTATION_VERTICAL,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumOrientation());
    }

    /**
     * Tests the removeColor() method.
     *
     * @return void
     */
    public function testRemoveColor() {

        $obj = new SearchImagesRequest();

        $obj->addColor(SearchImagesRequest::COLOR_BLACK);
        $obj->removeColor(SearchImagesRequest::COLOR_BLACK);
        $this->assertCount(0, $obj->getColors());
    }

    /**
     * Tests the setImageType() method.
     *
     * @return void
     */
    public function testSetImageType() {

        $obj = new SearchImagesRequest();

        $obj->setImageType(SearchImagesRequest::IMAGE_TYPE_PHOTO);
        $this->assertEquals(SearchImagesRequest::IMAGE_TYPE_PHOTO, $obj->getImageType());
    }

    /**
     * Tests the setImageType() method.
     *
     * @return void
     */
    public function testSetImageTypeWithInvalidArgumentException() {

        $obj = new SearchImagesRequest();

        try {

            $obj->setImageType("imageType");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The image type "imageType" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the setOrientation() method.
     *
     * @return void
     */
    public function testSetOrientation() {

        $obj = new SearchImagesRequest();

        $obj->setOrientation(SearchImagesRequest::ORIENTATION_ALL);
        $this->assertEquals(SearchImagesRequest::ORIENTATION_ALL, $obj->getOrientation());
    }

    /**
     * Tests the setOrientation() method.
     *
     * @return void
     */
    public function testSetOrientationWithInvalidArgumentException() {

        $obj = new SearchImagesRequest();

        try {

            $obj->setOrientation("orientation");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The orientation "orientation" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("/", SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH);

        $obj = new SearchImagesRequest();

        $this->assertCount(0, $obj->getColors());
        $this->assertEquals(SearchImagesRequest::IMAGE_TYPE_ALL, $obj->getImageType());
        $this->assertEquals(SearchImagesRequest::ORIENTATION_ALL, $obj->getOrientation());
        $this->assertEquals(SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH, $obj->getResourcePath());
    }
}
