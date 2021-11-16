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

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Serializer\ResponseDeserializer;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Serializer\TestResponseDeserializer;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Tests the deserializeImageHit() method.
     *
     * @return void
     */
    public function testDeserializeImageHit(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/SearchImagesResponse.json");
        $data = json_decode($json, true);

        $res = TestResponseDeserializer::deserializeImageHit($data["hits"][0]);
        $this->assertInstanceOf(ImageHit::class, $res);

        $this->assertEquals(195893, $res->getId());
        $this->assertEquals("https://pixabay.com/en/blossom-bloom-flower-195893/", $res->getPageURL());
        $this->assertEquals("photo", $res->getType());
        $this->assertEquals("blossom, bloom, flower", $res->getTags());
        $this->assErtEquals("https://cdn.pixabay.com/photo/2013/10/15/09/12/flower-195893_150.jpg", $res->getPreviewURL());
        $this->assertEquals(150, $res->getPreviewWidth());
        $this->assertEquals(84, $res->getPreviewHeight());
        $this->assertEquals("https://pixabay.com/get/35bbf209e13e39d2_640.jpg", $res->getWebformatURL());
        $this->assertEquals(640, $res->getWebformatWidth());
        $this->assertEquals(360, $res->getWebformatHeight());
        $this->assertEquals("https://pixabay.com/get/ed6a99fd0a76647_1280.jpg", $res->getLargeImageURL());
        $this->assertEquals("https://pixabay.com/get/ed6a9369fd0a76647_1920.jpg", $res->getFullHDURL());
        $this->assertequals("https://pixabay.com/get/ed6a9364a9fd0a76647.jpg", $res->getImageURL());
        $this->assertEquals(4000, $res->getImageWidth());
        $this->assertEquals(2250, $res->getImageHeight());
        $this->assertEquals(4731420, $res->getImageSize());
        $this->assertEquals(7671, $res->getViews());
        $this->assertEquals(6439, $res->getDownloads());
        $this->assertEquals(1, $res->getFavorites());
        $this->assertEquals(5, $res->getLikes());
        $this->assertEquals(2, $res->getComments());
        $this->assertEquals(48777, $res->getUserId());
        $this->assertEquals("Josch13", $res->getUser());
        $this->assertEquals("https://cdn.pixabay.com/user/2013/11/05/02-10-23-764_250x250.jpg", $res->getUserImageURL());
    }

    /**
     * Tests the deserializeSearchImagesResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchImagesResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/SearchImagesResponse.json");

        $res = ResponseDeserializer::deserializeSearchImagesResponse($json);
        $this->assertInstanceOf(SearchImagesResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertEquals(4692, $res->getTotal());
        $this->assertEquals(500, $res->getTotalHits());

        $this->assertCount(1, $res->getImageHits());
    }

    /**
     * Tests the deserializeSearchImagesResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchImagesResponseWithBadRawResponse(): void {

        // Set a JSON mock.
        $json = "";

        $res = ResponseDeserializer::deserializeSearchImagesResponse($json);
        $this->assertInstanceOf(SearchImagesResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertNull($res->getTotal());
        $this->assertNull($res->getTotalHits());

        $this->assertCount(0, $res->getImageHits());
    }

    /**
     * Tests the deserializeSearchVideosResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchVideosResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/SearchVideosResponse.json");

        $res = ResponseDeserializer::deserializeSearchVideosResponse($json);
        $this->assertInstanceOf(SearchVideosResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertEquals(42, $res->getTotal());
        $this->assertEquals(42, $res->getTotalHits());

        $this->assertCount(1, $res->getVideoHits());
    }

    /**
     * Tests the deserializeSearchVideosResponse() method.
     *
     * @return void
     */
    public function testDeserializeSearchVideosResponseWithBadRawResponse(): void {

        // Set a JSON mock.
        $json = "";

        $res = ResponseDeserializer::deserializeSearchVideosResponse($json);
        $this->assertInstanceOf(SearchVideosResponse::class, $res);

        $this->assertEquals($json, $res->getRawResponse());
        $this->assertNull($res->getTotal());
        $this->assertNull($res->getTotalHits());

        $this->assertCount(0, $res->getVideoHits());
    }

    /**
     * Tests deserializeVideo() method.
     *
     * @return void
     */
    public function testDeserializeVideo(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/SearchVideosResponse.json");
        $data = json_decode($json, true);

        $res = TestResponseDeserializer::deserializeVideo($data["hits"][0]["videos"]["large"]);
        $this->assertInstanceOf(Video::class, $res);

        $this->assertEquals("https://player.vimeo.com/external/135736646.hd.mp4?s=ed02d71c92dd0df7d1110045e6eb65a6&profile_id=119", $res->getUrl());
        $this->assertEquals(1920, $res->getWidth());
        $this->assertEquals(1080, $res->getHeight());
        $this->assertEquals(6615235, $res->getSize());
        $this->assertNull($res->getQuality());
    }

    /**
     * Tests the deserializeVideoHit() method.
     *
     * @return void
     */
    public function testDeserializeVideoHit(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/SearchVideosResponse.json");
        $data = json_decode($json, true);

        $res = TestResponseDeserializer::deserializeVideoHit($data["hits"][0]);
        $this->assertInstanceOf(VideoHit::class, $res);

        $this->assertEquals(125, $res->getId());
        $this->assertEquals("https://pixabay.com/videos/id-125/", $res->getPageURL());
        $this->assertEquals("film", $res->getType());
        $this->assertEquals("flowers, yellow, blossom", $res->getTags());
        $this->assertEquals(12, $res->getDuration());
        $this->assertEquals("529927645", $res->getPictureId());
        $this->assertCount(4, $res->getVideos());
        $this->assertEquals(169, $res->getViews());
        $this->assertEquals(66, $res->getDownloads());
        $this->assertEquals(7, $res->getFavorites());
        $this->assertEquals(3, $res->getLikes());
        $this->assertEquals(2, $res->getComments());
        $this->assertEquals(1281706, $res->getUserId());
        $this->assertEquals("CoverrFreeFootage", $res->getUser());
        $this->assertEquals("https://cdn.pixabay.com/user/2015/10/16/09-28-45-303_250x250.png", $res->getUserImageURL());

        $this->assertEquals("large", $res->getVideos()[0]->getQuality());
        $this->assertEquals("medium", $res->getVideos()[1]->getQuality());
        $this->assertEquals("small", $res->getVideos()[2]->getQuality());
        $this->assertEquals("tiny", $res->getVideos()[3]->getQuality());
    }
}
