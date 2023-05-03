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

use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Serializer\ResponseDeserializer;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeSearchImagesResponse()
     *
     * @return void
     */
    public function testDeserializeSearchImagesResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeSearchImagesResponse.json");

        $res = ResponseDeserializer::deserializeSearchImagesResponse($rawResponse);
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
     * Test deserializeSearchImagesResponse()
     *
     * @return void
     */
    public function testDeserializeSearchImagesResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeSearchImagesResponse($rawResponse);
        $this->assertInstanceOf(SearchImagesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getTotal());
        $this->assertNull($res->getTotalHits());

        $this->assertCount(0, $res->getImageHits());
    }

    /**
     * Test deserializeSearchVideosResponse()
     *
     * @return void
     */
    public function testDeserializeVideosResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeSearchVideosResponse.json");

        $res = ResponseDeserializer::deserializeSearchVideosResponse($rawResponse);
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
     * Test deserializeSearchVideosResponse()
     *
     * @return void
     */
    public function testDeserializeVideosResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeSearchVideosResponse($rawResponse);
        $this->assertInstanceOf(SearchVideosResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getTotal());
        $this->assertNull($res->getTotalHits());

        $this->assertCount(0, $res->getVideoHits());
    }
}
