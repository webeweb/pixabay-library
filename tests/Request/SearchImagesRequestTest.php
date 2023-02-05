<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Request;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Pixabay\Api\RequestInterface;
use WBW\Library\Pixabay\Api\SearchImagesRequestInterface;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Request
 */
class SearchImagesRequestTest extends AbstractTestCase {

    /**
     * Tests serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new SearchImagesRequest();
        $obj->setCategory("category");
        $obj->setEditorsChoice(true);
        $obj->setId(1234);
        $obj->setLang("fr");
        $obj->setMinHeight(720);
        $obj->setMinWidth(1280);
        $obj->setOrder(RequestInterface::ORDER_LATEST);
        $obj->setPage(2);
        $obj->setPerPage(15);
        $obj->setPretty(true);
        $obj->setQ("github");
        $obj->setSafeSearch(true);

        $obj->addColor(RequestInterface::COLOR_BLACK);
        $obj->setImageType(RequestInterface::IMAGE_TYPE_PHOTO);
        $obj->setOrientation(RequestInterface::ORIENTATION_HORIZONTAL);

        $res = $obj->serializeRequest();
        $this->assertCount(15, $res);

        $this->assertEquals("category", $res["category"]);
        $this->assertEquals("true", $res["editors_choice"]);
        $this->assertEquals(1234, $res["id"]);
        $this->assertEquals("fr", $res["lang"]);
        $this->assertEquals(720, $res["min_height"]);
        $this->assertEquals(1280, $res["min_width"]);
        $this->assertEquals(RequestInterface::ORDER_LATEST, $res["order"]);
        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(15, $res["per_page"]);
        $this->assertEquals("true", $res["pretty"]);
        $this->assertEquals("github", $res["q"]);
        $this->assertEquals("true", $res["safesearch"]);

        $this->assertEquals(RequestInterface::COLOR_BLACK, $res["colors"]);
        $this->assertEquals(RequestInterface::IMAGE_TYPE_PHOTO, $res["image_type"]);
        $this->assertEquals(RequestInterface::ORIENTATION_HORIZONTAL, $res["orientation"]);
    }

    /**
     * Tests addColor()
     *
     * @return void
     */
    public function testAddColor(): void {

        $obj = new SearchImagesRequest();

        $obj->addColor(SearchImagesRequest::COLOR_BLACK);
        $this->assertCount(1, $obj->getColors());
        $this->assertEquals(SearchImagesRequest::COLOR_BLACK, $obj->getColors()[0]);
    }

    /**
     * Tests addColor()
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
     * Tests enumCategory().
     *
     * @return void
     */
    public function testEnumCategory(): void {

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
     * Tests enumColor()
     *
     * @return void
     */
    public function testEnumColor(): void {

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
     * Tests enumImageType()
     *
     * @return void
     */
    public function testEnumImageType(): void {

        $res = [
            SearchImagesRequestInterface::IMAGE_TYPE_ALL,
            SearchImagesRequestInterface::IMAGE_TYPE_ILLUSTRATION,
            SearchImagesRequestInterface::IMAGE_TYPE_PHOTO,
            SearchImagesRequestInterface::IMAGE_TYPE_VECTOR,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumImageType());
    }

    /**
     * Tests enumOrientation()
     *
     * @return void.
     */
    public function testEnumOrientation(): void {

        $res = [
            SearchImagesRequestInterface::ORIENTATION_ALL,
            SearchImagesRequestInterface::ORIENTATION_HORIZONTAL,
            SearchImagesRequestInterface::ORIENTATION_VERTICAL,
        ];

        $this->assertEquals($res, SearchImagesRequest::enumOrientation());
    }

    /**
     * Tests removeColor()
     *
     * @return void
     */
    public function testRemoveColor(): void {

        $obj = new SearchImagesRequest();

        $obj->addColor(SearchImagesRequest::COLOR_BLACK);
        $obj->removeColor(SearchImagesRequest::COLOR_BLACK);
        $this->assertCount(0, $obj->getColors());
    }

    /**
     * Tests setImageType()
     *
     * @return void
     */
    public function testSetImageType(): void {

        $obj = new SearchImagesRequest();

        $obj->setImageType(SearchImagesRequest::IMAGE_TYPE_PHOTO);
        $this->assertEquals(SearchImagesRequest::IMAGE_TYPE_PHOTO, $obj->getImageType());
    }

    /**
     * Tests setImageType()
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
     * Tests setOrientation()
     *
     * @return void
     */
    public function testSetOrientation(): void {

        $obj = new SearchImagesRequest();

        $obj->setOrientation(SearchImagesRequest::ORIENTATION_ALL);
        $this->assertEquals(SearchImagesRequest::ORIENTATION_ALL, $obj->getOrientation());
    }

    /**
     * Tests setOrientation()
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
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/", SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH);

        $obj = new SearchImagesRequest();

        $this->assertCount(0, $obj->getColors());
        $this->assertEquals(SearchImagesRequest::IMAGE_TYPE_ALL, $obj->getImageType());
        $this->assertEquals(SearchImagesRequest::ORIENTATION_ALL, $obj->getOrientation());
        $this->assertEquals(SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH, $obj->getResourcePath());
    }
}
