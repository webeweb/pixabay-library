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
}
