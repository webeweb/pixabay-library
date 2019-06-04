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

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Model\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Model\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Pixabay\Normalizer\ResponseNormalizer;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Normalizer\TestResponseNormalizer;
use WBW\Library\Pixabay\Tests\Fixtures\TestFixtures;

/**
 * Response normalizer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Normalizer
 */
class ResponseNormalizerTest extends AbstractTestCase {

    /**
     * Tests the denormalizeImageHit() method.
     *
     * @return void
     */
    public function testDenormalizeImageHit() {

        $arg = json_decode(TestFixtures::SAMPLE_SEARCH_IMAGES_RESPONSE, true)["hits"][0];

        $res = TestResponseNormalizer::denormalizeImageHit($arg);
        $this->assertInstanceOf(ImageHit::class, $res);

        $this->assertEquals(2, $res->getComments());
        $this->assertEquals(6439, $res->getDownloads());
        $this->assertEquals(1, $res->getFavorites());
        $this->assertEquals("https://pixabay.com/get/ed6a9369fd0a76647_1920.jpg", $res->getFullHDURL());
        $this->assertEquals(195893, $res->getId());
        $this->assertEquals(2250, $res->getImageHeight());
        $this->assertEquals(4731420, $res->getImageSize());
        $this->ASsertequals("https://pixabay.com/get/ed6a9364a9fd0a76647.jpg", $res->getImageURL());
        $this->assertEquals(4000, $res->getImageWidth());
        $this->assertEquals("https://pixabay.com/get/ed6a99fd0a76647_1280.jpg", $res->getLargeImageURL());
        $this->assertEquals(5, $res->getLikes());
        $this->assertEquals("https://pixabay.com/en/blossom-bloom-flower-195893/", $res->getPageURL());
        $this->assertEquals(84, $res->getPreviewHeight());
        $this->assErtEquals("https://cdn.pixabay.com/photo/2013/10/15/09/12/flower-195893_150.jpg", $res->getPreviewURL());
        $this->assertEquals(150, $res->getPreviewWidth());
        $this->assertEquals("blossom, bloom, flower", $res->getTags());
        $this->assertEquals("photo", $res->getType());
        $this->assertEquals(7671, $res->getViews());
        $this->assertEquals(360, $res->getWebformatHeight());
        $this->assertEquals("https://pixabay.com/get/35bbf209e13e39d2_640.jpg", $res->getWebformatURL());
        $this->assertEquals(640, $res->getWebformatWidth());
        $this->assertEquals("Josch13", $res->getUser());
        $this->assertEquals(48777, $res->getUserId());
        $this->assertEquals("https://cdn.pixabay.com/user/2013/11/05/02-10-23-764_250x250.jpg", $res->getUserImageURL());
    }

    /**
     * Tests the denormalizeSearchImagesResponse() method.
     *
     * @return void
     */
    public function testDenormalizeSeachImagesResponse() {

        $obj = ResponseNormalizer::denormalizeSearchImagesResponse(TestFixtures::SAMPLE_SEARCH_IMAGES_RESPONSE);
        $this->assertInstanceOf(SearchImagesResponse::class, $obj);

        $this->assertEquals(TestFixtures::SAMPLE_SEARCH_IMAGES_RESPONSE, $obj->getRawResponse());
        $this->assertEquals(4692, $obj->getTotal());
        $this->assertEquals(500, $obj->getTotalHits());

        $this->assertCount(1, $obj->getImageHits());
    }

    /**
     * Tests the denormalizeSearchImagesResponse() method.
     *
     * @return void
     */
    public function testDenormalizeSeachImagesResponseWithBadRawResponse() {

        $obj = ResponseNormalizer::denormalizeSearchImagesResponse("");
        $this->assertInstanceOf(SearchImagesResponse::class, $obj);

        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTotalHits());

        $this->assertCount(0, $obj->getImageHits());
    }

    /**
     * Tests the denormalizeSearchVideosResponse() method.
     *
     * @return void
     */
    public function testDenormalizeSeachVideosResponse() {

        $obj = ResponseNormalizer::denormalizeSearchVideosResponse(TestFixtures::SAMPLE_SEARCH_VIDEOS_RESPONSE);
        $this->assertInstanceOf(SearchVideosResponse::class, $obj);

        $this->assertEquals(TestFixtures::SAMPLE_SEARCH_VIDEOS_RESPONSE, $obj->getRawResponse());
        $this->assertEquals(42, $obj->getTotal());
        $this->assertEquals(42, $obj->getTotalHits());

        $this->assertCount(1, $obj->getVideoHits());
    }

    /**
     * Tests the denormalizeSearchVideosResponse() method.
     *
     * @return void
     */
    public function testDenormalizeSeachVideosResponseWithBadRawResponse() {

        $obj = ResponseNormalizer::denormalizeSearchVideosResponse("");
        $this->assertInstanceOf(SearchVideosResponse::class, $obj);

        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTotalHits());

        $this->assertCount(0, $obj->getVideoHits());
    }

    /**
     * Tests denormalizeVideo() method.
     *
     * @return void
     */
    public function testDenormalizeVideo() {

        $arg = json_decode(TestFixtures::SAMPLE_SEARCH_VIDEOS_RESPONSE, true)["hits"][0]["videos"]["large"];

        $res = TestResponseNormalizer::denormalizeVideo($arg);
        $this->assertInstanceOf(Video::class, $res);

        $this->assertEquals(1080, $res->getHeight());
        $this->assertNull($res->getQuality());
        $this->assertEquals(6615235, $res->getSize());
        $this->assertEquals("https://player.vimeo.com/external/135736646.hd.mp4?s=ed02d71c92dd0df7d1110045e6eb65a6&profile_id=119", $res->getUrl());
        $this->assertEquals(1920, $res->getWidth());
    }

    /**
     * Tests the denormalizeVideoHit() method.
     *
     * @return void
     */
    public function testDenormalizeVideoHit() {

        $arg = json_decode(TestFixtures::SAMPLE_SEARCH_VIDEOS_RESPONSE, true)["hits"][0];

        $res = TestResponseNormalizer::denormalizeVideoHit($arg);
        $this->assertInstanceOf(VideoHit::class, $res);

        $this->assertEquals(2, $res->getComments());
        $this->assertEquals(66, $res->getDownloads());
        $this->assertEquals(12, $res->getDuration());
        $this->assertEquals(7, $res->getFavorites());
        $this->assertEquals(125, $res->getId());
        $this->assertEquals(3, $res->getLikes());
        $this->assertEquals("https://pixabay.com/videos/id-125/", $res->getPageURL());
        $this->assertEquals("529927645", $res->getPictureId());
        $this->assertEquals("flowers, yellow, blossom", $res->getTags());
        $this->assertEquals("film", $res->getType());
        $this->assertCount(4, $res->getVideos());
        $this->assertEquals(169, $res->getViews());
        $this->assertEquals("CoverrFreeFootage", $res->getUser());
        $this->assertEquals(1281706, $res->getUserId());
        $this->assertEquals("https://cdn.pixabay.com/user/2015/10/16/09-28-45-303_250x250.png", $res->getUserImageURL());

        $this->assertEquals("large", $res->getVideos()[0]->getQuality());
        $this->assertEquals("medium", $res->getVideos()[1]->getQuality());
        $this->assertEquals("small", $res->getVideos()[2]->getQuality());
        $this->assertEquals("tiny", $res->getVideos()[3]->getQuality());
    }
}
