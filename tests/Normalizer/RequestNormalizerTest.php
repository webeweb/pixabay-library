<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Normalizer;

use Exception;
use InvalidArgumentException;
use WBW\Library\Pixabay\Model\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Model\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Normalizer\RequestNormalizer;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Request normalizer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Normalizer
 */
class RequestNormalizerTest extends AbstractTestCase {

    /**
     * Tests the normalizeSearchImagesRequest() method.
     *
     * @return void
     */
    public function testNormalizeSearchImagesRequest() {

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();
        $searchImagesRequest->setCategory("category");
        $searchImagesRequest->setEditorsChoice(true);
        $searchImagesRequest->setId(1234);
        $searchImagesRequest->setLang("fr");
        $searchImagesRequest->setMinHeight(720);
        $searchImagesRequest->setMinWidth(1280);
        $searchImagesRequest->setOrder(SearchImagesRequest::ORDER_LATEST);
        $searchImagesRequest->setPage(2);
        $searchImagesRequest->setPerPage(15);
        $searchImagesRequest->setPretty(true);
        $searchImagesRequest->setQ("github");
        $searchImagesRequest->setSafeSearch(true);

        $searchImagesRequest->addColor(SearchImagesRequest::COLOR_BLACK);
        $searchImagesRequest->setImageType(SearchImagesRequest::IMAGE_TYPE_PHOTO);
        $searchImagesRequest->setOrientation(SearchImagesRequest::ORIENTATION_HORIZONTAL);

        $res = RequestNormalizer::normalizeSearchImagesRequest($searchImagesRequest);
        $this->assertArrayHasKey("category", $res);
        $this->assertArrayHasKey("editors_choice", $res);
        $this->assertArrayHasKey("id", $res);
        $this->assertArrayHasKey("lang", $res);
        $this->assertArrayHasKey("min_height", $res);
        $this->assertArrayHasKey("min_width", $res);
        $this->assertArrayHasKey("order", $res);
        $this->assertArrayHasKey("page", $res);
        $this->assertArrayHasKey("per_page", $res);
        $this->assertArrayHasKey("pretty", $res);
        $this->assertArrayHasKey("q", $res);
        $this->assertArrayHasKey("safesearch", $res);

        $this->assertArrayHasKey("colors", $res);
        $this->assertArrayHasKey("image_type", $res);
        $this->assertArrayHasKey("orientation", $res);

        $this->assertEquals("category", $res["category"]);
        $this->assertEquals("true", $res["editors_choice"]);
        $this->assertEquals(1234, $res["id"]);
        $this->assertEquals("fr", $res["lang"]);
        $this->assertEquals(720, $res["min_height"]);
        $this->assertEquals(1280, $res["min_width"]);
        $this->assertEquals(SearchImagesRequest::ORDER_LATEST, $res["order"]);
        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(15, $res["per_page"]);
        $this->assertEquals("true", $res["pretty"]);
        $this->assertEquals("github", $res["q"]);
        $this->assertEquals("true", $res["safesearch"]);

        $this->assertEquals(SearchImagesRequest::COLOR_BLACK, $res["colors"]);
        $this->assertEquals(SearchImagesRequest::IMAGE_TYPE_PHOTO, $res["image_type"]);
        $this->assertEquals(SearchImagesRequest::ORIENTATION_HORIZONTAL, $res["orientation"]);
    }

    /**
     * Tests the normalizeSearchImagesRequest() method.
     *
     * @return void
     */
    public function testNormalizeSearchImagesRequestWithInvalidArgumentException() {

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        try {

            RequestNormalizer::normalizeSearchImagesRequest($searchImagesRequest);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"q\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the normalizeSearchVideosRequest() method.
     *
     * @return void
     */
    public function testNormalizeSearchVideosRequest() {

        // Set a Search videos request mock.
        $searchVideosRequest = new SearchVideosRequest();
        $searchVideosRequest->setCategory("category");
        $searchVideosRequest->setEditorsChoice(true);
        $searchVideosRequest->setId(1234);
        $searchVideosRequest->setLang("fr");
        $searchVideosRequest->setMinHeight(720);
        $searchVideosRequest->setMinWidth(1280);
        $searchVideosRequest->setOrder(SearchVideosRequest::ORDER_LATEST);
        $searchVideosRequest->setPage(2);
        $searchVideosRequest->setPerPage(15);
        $searchVideosRequest->setPretty(true);
        $searchVideosRequest->setQ("github");
        $searchVideosRequest->setSafeSearch(true);

        $searchVideosRequest->setVideoType(SearchVideosRequest::VIDEO_TYPE_FILM);

        $res = RequestNormalizer::normalizeSearchVideosRequest($searchVideosRequest);
        $this->assertArrayHasKey("category", $res);
        $this->assertArrayHasKey("editors_choice", $res);
        $this->assertArrayHasKey("id", $res);
        $this->assertArrayHasKey("lang", $res);
        $this->assertArrayHasKey("min_height", $res);
        $this->assertArrayHasKey("min_width", $res);
        $this->assertArrayHasKey("order", $res);
        $this->assertArrayHasKey("page", $res);
        $this->assertArrayHasKey("per_page", $res);
        $this->assertArrayHasKey("pretty", $res);
        $this->assertArrayHasKey("q", $res);
        $this->assertArrayHasKey("safesearch", $res);

        $this->assertArrayHasKey("video_type", $res);

        $this->assertEquals("category", $res["category"]);
        $this->assertEquals("true", $res["editors_choice"]);
        $this->assertEquals(1234, $res["id"]);
        $this->assertEquals("fr", $res["lang"]);
        $this->assertEquals(720, $res["min_height"]);
        $this->assertEquals(1280, $res["min_width"]);
        $this->assertEquals(SearchVideosRequest::ORDER_LATEST, $res["order"]);
        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(15, $res["per_page"]);
        $this->assertEquals("true", $res["pretty"]);
        $this->assertEquals("github", $res["q"]);
        $this->assertEquals("true", $res["safesearch"]);

        $this->assertEquals(SearchVideosRequest::VIDEO_TYPE_FILM, $res["video_type"]);
    }
}
