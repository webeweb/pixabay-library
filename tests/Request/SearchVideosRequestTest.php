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

use Exception;
use InvalidArgumentException;
use WBW\Library\Pixabay\API\SearchVideosRequestInterface;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search videos request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Request
 */
class SearchVideosRequestTest extends AbstractTestCase {

    /**
     * Tests the enumVideoType() method.
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
     * Tests the setVideoType() method.
     *
     * @return void
     */
    public function testSetVideoType(): void {

        $obj = new SearchVideosRequest();

        $obj->setVideoType(SearchVideosRequest::VIDEO_TYPE_ALL);
        $this->assertEquals(SearchVideosRequest::VIDEO_TYPE_ALL, $obj->getVideoType());
    }

    /**
     * Tests the setVideoType() method.
     *
     * @return void
     */
    public function testSetVideoTypeWithInvalidArgumentException(): void {

        $obj = new SearchVideosRequest();

        try {

            $obj->setVideoType("videoType");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The video type "videoType" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
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
