<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Serializer;

use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Serializer\RequestSerializer;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Tests the serializeSearchImagesRequest() method.
     *
     * @return void
     */
    public function testSerializeSearchImagesRequest(): void {

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

        $res = RequestSerializer::serializeSearchImagesRequest($searchImagesRequest);

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
     * Tests the serializeSearchVideosRequest() method.
     *
     * @return void
     */
    public function testSerializeSearchVideosRequest(): void {

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

        $res = RequestSerializer::serializeSearchVideosRequest($searchVideosRequest);

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
