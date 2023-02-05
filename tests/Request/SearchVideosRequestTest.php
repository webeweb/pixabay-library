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
use WBW\Library\Pixabay\Api\SearchVideosRequestInterface;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search videos request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Request
 */
class SearchVideosRequestTest extends AbstractTestCase {

    /**
     * Tests enumVideoType()
     *
     * @return void
     */
    public function testEnumVideoType(): void {

        $res = [
            SearchVideosRequestInterface::VIDEO_TYPE_ALL,
            SearchVideosRequestInterface::VIDEO_TYPE_ANIMATION,
            SearchVideosRequestInterface::VIDEO_TYPE_FILM,
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

        $obj->setVideoType(SearchVideosRequest::VIDEO_TYPE_ALL);
        $this->assertEquals(SearchVideosRequest::VIDEO_TYPE_ALL, $obj->getVideoType());
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
        $this->assertEquals(SearchVideosRequest::VIDEO_TYPE_ALL, $obj->getVideoType());
    }
}
