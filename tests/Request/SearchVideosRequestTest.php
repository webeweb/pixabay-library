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
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search videos request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Request
 */
class SearchVideosRequestTest extends AbstractTestCase {

    /**
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/SearchVideosRequestTest.testDeserializeResponse.json");

        $obj = new SearchVideosRequest();

        $res = $obj->deserializeResponse($rawResponse);
        $this->assertInstanceOf(SearchVideosResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertEquals(42, $res->getTotal());
        $this->assertEquals(42, $res->getTotalHits());

        $this->assertCount(1, $res->getVideoHits());

        $this->assertNotNull($res->getVideoHits()[0]->getRawData());
        $this->assertEquals(125, $res->getVideoHits()[0]->getId());
        $this->assertEquals("https://pixabay.com/videos/id-125/", $res->getVideoHits()[0]->getPageURL());
        $this->assertEquals("film", $res->getVideoHits()[0]->getType());
        $this->assertEquals("flowers, yellow, blossom", $res->getVideoHits()[0]->getTags());
        $this->assertEquals(12, $res->getVideoHits()[0]->getDuration());
        $this->assertEquals("529927645", $res->getVideoHits()[0]->getPictureId());
        $this->assertCount(4, $res->getVideoHits()[0]->getVideos());
        $this->assertEquals(169, $res->getVideoHits()[0]->getViews());
        $this->assertEquals(66, $res->getVideoHits()[0]->getDownloads());
        $this->assertEquals(7, $res->getVideoHits()[0]->getFavorites());
        $this->assertEquals(3, $res->getVideoHits()[0]->getLikes());
        $this->assertEquals(2, $res->getVideoHits()[0]->getComments());
        $this->assertEquals(1281706, $res->getVideoHits()[0]->getUserId());
        $this->assertEquals("CoverrFreeFootage", $res->getVideoHits()[0]->getUser());
        $this->assertEquals("https://cdn.pixabay.com/user/2015/10/16/09-28-45-303_250x250.png", $res->getVideoHits()[0]->getUserImageURL());

        $this->assertEquals("large", $res->getVideoHits()[0]->getVideos()[0]->getQuality());
        $this->assertEquals("medium", $res->getVideoHits()[0]->getVideos()[1]->getQuality());
        $this->assertEquals("small", $res->getVideoHits()[0]->getVideos()[2]->getQuality());
        $this->assertEquals("tiny", $res->getVideoHits()[0]->getVideos()[3]->getQuality());

        $this->assertEquals("https://player.vimeo.com/external/135736646.hd.mp4?s=ed02d71c92dd0df7d1110045e6eb65a6&profile_id=119", $res->getVideoHits()[0]->getVideos()[0]->getUrl());
        $this->assertEquals(1920, $res->getVideoHits()[0]->getVideos()[0]->getWidth());
        $this->assertEquals(1080, $res->getVideoHits()[0]->getVideos()[0]->getHeight());
        $this->assertEquals(6615235, $res->getVideoHits()[0]->getVideos()[0]->getSize());
        $this->assertEquals("large", $res->getVideoHits()[0]->getVideos()[0]->getQuality());
    }

    /**
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $obj = new SearchVideosRequest();

        $res = $obj->deserializeResponse($rawResponse);
        $this->assertInstanceOf(SearchVideosResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getTotal());
        $this->assertNull($res->getTotalHits());

        $this->assertCount(0, $res->getVideoHits());
    }

    /**
     * Tests enumVideoType()
     *
     * @return void
     */
    public function testEnumVideoType(): void {

        $res = [
            RequestInterface::VIDEO_TYPE_ALL,
            RequestInterface::VIDEO_TYPE_ANIMATION,
            RequestInterface::VIDEO_TYPE_FILM,
        ];

        $this->assertEquals($res, SearchVideosRequest::enumVideoType());
    }

    /**
     * Tests serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new SearchVideosRequest();
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

        $obj->setVideoType(RequestInterface::VIDEO_TYPE_FILM);

        $res = $obj->serializeRequest();
        $this->assertCount(13, $res);

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

        $this->assertEquals(RequestInterface::VIDEO_TYPE_FILM, $res["video_type"]);
    }

    /**
     * Tests setVideoType()
     *
     * @return void
     */
    public function testSetVideoType(): void {

        $obj = new SearchVideosRequest();

        $obj->setVideoType(RequestInterface::VIDEO_TYPE_ALL);
        $this->assertEquals(RequestInterface::VIDEO_TYPE_ALL, $obj->getVideoType());
    }

    /**
     * Tests setVideoType()
     *
     * @return void
     */
    public function testSetVideoTypeWithInvalidArgumentException(): void {

        $obj = new SearchVideosRequest();

        try {

            $obj->setVideoType("videoType");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The video type "videoType" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/videos/", SearchVideosRequest::SEARCH_VIDEOS_RESOURCE_PATH);

        $obj = new SearchVideosRequest();

        $this->assertEquals(SearchVideosRequest::SEARCH_VIDEOS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertEquals(RequestInterface::VIDEO_TYPE_ALL, $obj->getVideoType());
    }
}
