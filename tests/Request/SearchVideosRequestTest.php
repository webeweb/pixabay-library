<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

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
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new SearchVideosRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(SearchVideosResponse::class, $res);
    }

    /**
     * Test enumVideoType()
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
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new SearchVideosRequest();
        $obj->setVideoType(RequestInterface::VIDEO_TYPE_ANIMATION);

        $res = $obj->serializeRequest();
        $this->assertIsArray($res);

        $this->assertEquals(RequestInterface::VIDEO_TYPE_ANIMATION, $res["video_type"]);
    }

    /**
     * Test setVideoType()
     *
     * @return void
     */
    public function testSetVideoType(): void {

        $obj = new SearchVideosRequest();

        $obj->setVideoType(RequestInterface::VIDEO_TYPE_ALL);
        $this->assertEquals(RequestInterface::VIDEO_TYPE_ALL, $obj->getVideoType());
    }

    /**
     * Test setVideoType()
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
     * Test __construct()
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
