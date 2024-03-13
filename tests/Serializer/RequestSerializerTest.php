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

use WBW\Library\Pixabay\Api\RequestInterface;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Serializer\RequestSerializer;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Test serializeSearchImagesRequest()
     *
     * @return void
     */
    public function testSerializeSearchImagesRequest(): void {

        // Set a Search images request mock.
        $arg = new SearchImagesRequest();
        $arg->setCategory("category");
        $arg->setEditorsChoice(true);
        $arg->setId("1234");
        $arg->setLang("fr");
        $arg->setMinHeight(720);
        $arg->setMinWidth(1280);
        $arg->setOrder(RequestInterface::ORDER_LATEST);
        $arg->setPage(2);
        $arg->setPerPage(15);
        $arg->setPretty(true);
        $arg->setQ("github");
        $arg->setSafeSearch(true);

        $arg->addColor(RequestInterface::COLOR_BLACK);
        $arg->setImageType(RequestInterface::IMAGE_TYPE_PHOTO);
        $arg->setOrientation(RequestInterface::ORIENTATION_HORIZONTAL);

        $obj = RequestSerializer::serializeSearchImagesRequest($arg);
        $this->assertCount(15, $obj);

        $this->assertEquals("category", $obj["category"]);
        $this->assertEquals("true", $obj["editors_choice"]);
        $this->assertEquals("1234", $obj["id"]);
        $this->assertEquals("fr", $obj["lang"]);
        $this->assertEquals(720, $obj["min_height"]);
        $this->assertEquals(1280, $obj["min_width"]);
        $this->assertEquals(RequestInterface::ORDER_LATEST, $obj["order"]);
        $this->assertEquals(2, $obj["page"]);
        $this->assertEquals(15, $obj["per_page"]);
        $this->assertEquals("true", $obj["pretty"]);
        $this->assertEquals("github", $obj["q"]);
        $this->assertEquals("true", $obj["safesearch"]);

        $this->assertEquals(RequestInterface::COLOR_BLACK, $obj["colors"]);
        $this->assertEquals(RequestInterface::IMAGE_TYPE_PHOTO, $obj["image_type"]);
        $this->assertEquals(RequestInterface::ORIENTATION_HORIZONTAL, $obj["orientation"]);
    }

    /**
     * Test serializeSearchVideosRequest()
     *
     * @return void
     */
    public function testSerializeSearchVideosRequest(): void {

        // Set a Search videos request mock.
        $arg = new SearchVideosRequest();
        $arg->setCategory("category");
        $arg->setEditorsChoice(true);
        $arg->setId("1234");
        $arg->setLang("fr");
        $arg->setMinHeight(720);
        $arg->setMinWidth(1280);
        $arg->setOrder(RequestInterface::ORDER_LATEST);
        $arg->setPage(2);
        $arg->setPerPage(15);
        $arg->setPretty(true);
        $arg->setQ("github");
        $arg->setSafeSearch(true);

        $arg->setVideoType(RequestInterface::VIDEO_TYPE_FILM);

        $res = RequestSerializer::serializeSearchVideosRequest($arg);
        $this->assertCount(13, $res);

        $this->assertEquals("category", $res["category"]);
        $this->assertEquals("true", $res["editors_choice"]);
        $this->assertEquals("1234", $res["id"]);
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
}
