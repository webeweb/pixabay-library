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
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/SearchImagesRequestTest.testDeserializeResponse.json");

        $obj = new SearchImagesRequest();

        $res = $obj->deserializeResponse($rawResponse);
        $this->assertInstanceOf(SearchImagesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertEquals(4692, $res->getTotal());
        $this->assertEquals(500, $res->getTotalHits());

        $this->assertCount(1, $res->getImageHits());

        $this->assertNotNull($res->getImageHits()[0]->getRawData());
        $this->assertEquals(195893, $res->getImageHits()[0]->getId());
        $this->assertEquals("https://pixabay.com/en/blossom-bloom-flower-195893/", $res->getImageHits()[0]->getPageURL());
        $this->assertEquals("photo", $res->getImageHits()[0]->getType());
        $this->assertEquals("blossom, bloom, flower", $res->getImageHits()[0]->getTags());
        $this->assErtEquals("https://cdn.pixabay.com/photo/2013/10/15/09/12/flower-195893_150.jpg", $res->getImageHits()[0]->getPreviewUrl());
        $this->assertEquals(150, $res->getImageHits()[0]->getPreviewWidth());
        $this->assertEquals(84, $res->getImageHits()[0]->getPreviewHeight());
        $this->assertEquals("https://pixabay.com/get/35bbf209e13e39d2_640.jpg", $res->getImageHits()[0]->getWebFormatUrl());
        $this->assertEquals(640, $res->getImageHits()[0]->getWebformatWidth());
        $this->assertEquals(360, $res->getImageHits()[0]->getWebformatHeight());
        $this->assertEquals("https://pixabay.com/get/ed6a99fd0a76647_1280.jpg", $res->getImageHits()[0]->getLargeImageUrl());
        $this->assertEquals("https://pixabay.com/get/ed6a9369fd0a76647_1920.jpg", $res->getImageHits()[0]->getFullHdUrl());
        $this->assertequals("https://pixabay.com/get/ed6a9364a9fd0a76647.jpg", $res->getImageHits()[0]->getImageUrl());
        $this->assertEquals(4000, $res->getImageHits()[0]->getImageWidth());
        $this->assertEquals(2250, $res->getImageHits()[0]->getImageHeight());
        $this->assertEquals(4731420, $res->getImageHits()[0]->getImageSize());
        $this->assertEquals(7671, $res->getImageHits()[0]->getViews());
        $this->assertEquals(6439, $res->getImageHits()[0]->getDownloads());
        $this->assertEquals(1, $res->getImageHits()[0]->getFavorites());
        $this->assertEquals(5, $res->getImageHits()[0]->getLikes());
        $this->assertEquals(2, $res->getImageHits()[0]->getComments());
        $this->assertEquals(48777, $res->getImageHits()[0]->getUserId());
        $this->assertEquals("Josch13", $res->getImageHits()[0]->getUser());
        $this->assertEquals("https://cdn.pixabay.com/user/2013/11/05/02-10-23-764_250x250.jpg", $res->getImageHits()[0]->getUserImageURL());
    }

    /**
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $obj = new SearchImagesRequest();

        $res = $obj->deserializeResponse($rawResponse);
        $this->assertInstanceOf(SearchImagesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getTotal());
        $this->assertNull($res->getTotalHits());

        $this->assertCount(0, $res->getImageHits());
    }

    /**
     * Tests enumCategory().
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
     * Tests enumColor()
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
     * Tests enumImageType()
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
     * Tests enumOrientation()
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
     * Tests removeColor()
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
     * Tests setImageType()
     *
     * @return void
     */
    public function testSetImageType(): void {

        $obj = new SearchImagesRequest();

        $obj->setImageType(RequestInterface::IMAGE_TYPE_PHOTO);
        $this->assertEquals(RequestInterface::IMAGE_TYPE_PHOTO, $obj->getImageType());
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

        $obj->setOrientation(RequestInterface::ORIENTATION_ALL);
        $this->assertEquals(RequestInterface::ORIENTATION_ALL, $obj->getOrientation());
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
        $this->assertEquals(RequestInterface::IMAGE_TYPE_ALL, $obj->getImageType());
        $this->assertEquals(RequestInterface::ORIENTATION_ALL, $obj->getOrientation());
        $this->assertEquals(SearchImagesRequest::SEARCH_IMAGES_RESOURCE_PATH, $obj->getResourcePath());
    }
}
