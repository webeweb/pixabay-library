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

namespace WBW\Library\Pixabay\Tests\Request;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Pixabay\Api\RequestInterface;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Request
 */
class SearchImagesRequestTest extends AbstractTestCase {

    /**
     * Test addColor()
     *
     * @return void
     */
    public function testAddColor(): void {

        $obj = new SearchImagesRequest();

        $obj->addColor(RequestInterface::COLOR_BLACK);
        $this->assertCount(1, $obj->getColors());
        $this->assertEquals(RequestInterface::COLOR_BLACK, $obj->getColors()[0]);
    }

    /**
     * Test addColor()
     *
     * @return void
     */
    public function testAddColorWithInvalidArgumentException(): void {

        $obj = new SearchImagesRequest();

        try {

            $obj->addColor("color");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The color "color" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new SearchImagesRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(SearchImagesResponse::class, $res);
    }

    /**
     * Test enumCategory().
     *
     * @return void
     */
    public function testEnumCategory(): void {

        $res = [
            RequestInterface::CATEGORY_ANIMALS,
            RequestInterface::CATEGORY_BACKGROUNDS,
            RequestInterface::CATEGORY_BUILDINGS,
            RequestInterface::CATEGORY_BUSINESS,
            RequestInterface::CATEGORY_COMPUTER,
            RequestInterface::CATEGORY_EDUCATION,
            RequestInterface::CATEGORY_FASHION,
            RequestInterface::CATEGORY_FEELINGS,
            RequestInterface::CATEGORY_FOOD,
            RequestInterface::CATEGORY_HEALTH,
            RequestInterface::CATEGORY_INDUSTRY,
            RequestInterface::CATEGORY_MUSIC,
            RequestInterface::CATEGORY_NATURE,
            RequestInterface::CATEGORY_PEOPLE,
            RequestInterface::CATEGORY_PLACES,
            RequestInterface::CATEGORY_RELIGION,
            RequestInterface::CATEGORY_SCIENCE,
            RequestInterface::CATEGORY_SPORTS,
            RequestInterface::CATEGORY_TRANSPORTATION,
            RequestInterface::CATEGORY_TRAVEL,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumCategory());
    }

    /**
     * Test enumColor()
     *
     * @return void
     */
    public function testEnumColor(): void {

        $res = [
            RequestInterface::COLOR_BLACK,
            RequestInterface::COLOR_BLUE,
            RequestInterface::COLOR_BROWN,
            RequestInterface::COLOR_GRAY,
            RequestInterface::COLOR_GRAYSCALE,
            RequestInterface::COLOR_GREEN,
            RequestInterface::COLOR_LILAC,
            RequestInterface::COLOR_ORANGE,
            RequestInterface::COLOR_PINK,
            RequestInterface::COLOR_RED,
            RequestInterface::COLOR_TRANSPARENT,
            RequestInterface::COLOR_TURQUOISE,
            RequestInterface::COLOR_YELLOW,
            RequestInterface::COLOR_WHITE,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumColor());
    }

    /**
     * Test enumImageType()
     *
     * @return void
     */
    public function testEnumImageType(): void {

        $res = [
            RequestInterface::IMAGE_TYPE_ALL,
            RequestInterface::IMAGE_TYPE_ILLUSTRATION,
            RequestInterface::IMAGE_TYPE_PHOTO,
            RequestInterface::IMAGE_TYPE_VECTOR,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumImageType());
    }

    /**
     * Test enumOrientation()
     *
     * @return void.
     */
    public function testEnumOrientation(): void {

        $res = [
            RequestInterface::ORIENTATION_ALL,
            RequestInterface::ORIENTATION_HORIZONTAL,
            RequestInterface::ORIENTATION_VERTICAL,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumOrientation());
    }

    /**
     * Test removeColor()
     *
     * @return void
     */
    public function testRemoveColor(): void {

        $obj = new SearchImagesRequest();

        $obj->addColor(RequestInterface::COLOR_BLACK);
        $obj->removeColor(RequestInterface::COLOR_BLACK);
        $this->assertCount(0, $obj->getColors());
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new SearchImagesRequest();
        $obj->setImageType(RequestInterface::IMAGE_TYPE_ILLUSTRATION);

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals(RequestInterface::IMAGE_TYPE_ILLUSTRATION, $res["image_type"]);
    }

    /**
     * Test setImageType()
     *
     * @return void
     */
    public function testSetImageType(): void {

        $obj = new SearchImagesRequest();

        $obj->setImageType(RequestInterface::IMAGE_TYPE_PHOTO);
        $this->assertEquals(RequestInterface::IMAGE_TYPE_PHOTO, $obj->getImageType());
    }

    /**
     * Test setImageType()
     *
     * @return void
     */
    public function testSetImageTypeWithInvalidArgumentException(): void {

        $obj = new SearchImagesRequest();

        try {

            $obj->setImageType("imageType");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The image type "imageType" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setOrientation()
     *
     * @return void
     */
    public function testSetOrientation(): void {

        $obj = new SearchImagesRequest();

        $obj->setOrientation(RequestInterface::ORIENTATION_ALL);
        $this->assertEquals(RequestInterface::ORIENTATION_ALL, $obj->getOrientation());
    }

    /**
     * Test setOrientation()
     *
     * @return void
     */
    public function testSetOrientationWithInvalidArgumentException(): void {

        $obj = new SearchImagesRequest();

        try {

            $obj->setOrientation("orientation");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The orientation "orientation" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/", SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH);

        $obj = new SearchImagesRequest();

        $this->assertCount(0, $obj->getColors());
        $this->assertEquals(RequestInterface::IMAGE_TYPE_ALL, $obj->getImageType());
        $this->assertEquals(RequestInterface::ORIENTATION_ALL, $obj->getOrientation());
        $this->assertEquals(SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH, $obj->getResourcePath());
    }
}
