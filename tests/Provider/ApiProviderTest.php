<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Provider;

use Exception;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Provider\TestApiProvider;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Key.
     *
     * @var string
     */
    private $key;

    /**
     * {inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a key mock.
        $this->key = "YOUR_API_KEY";
    }

    /**
     * Tests beforeReturnResponse()
     *
     * @return void
     */
    public function testBeforeReturnResponse(): void {

        // Set a Search images response mock.
        $searchImageResponse = new SearchImagesResponse();

        $obj = new TestApiProvider();

        $obj->beforeReturnResponse($searchImageResponse);
        $this->assertSame($obj->getLimit(), $searchImageResponse->getLimit());
        $this->assertSame($obj->getRemaining(), $searchImageResponse->getRemaining());
        $this->assertSame($obj->getReset(), $searchImageResponse->getReset());
    }

    /**
     * Tests searchImages()
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchImages(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        $obj = new ApiProvider($this->key, $logger);

        try {

            $res = $obj->searchImages($searchImagesRequest);

            $this->assertInstanceOf(SearchImagesResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests searchImages()
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchImagesWithInvalidArgumentException(): void {

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        $obj = new ApiProvider();

        try {

            $obj->searchImages($searchImagesRequest);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "key" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests searchVideos()
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchVideos(): void {

        // Set a Search videos request mock.
        $searchVideosRequest = new SearchVideosRequest();

        $obj = new ApiProvider($this->key);

        try {

            $res = $obj->searchVideos($searchVideosRequest);

            $this->assertInstanceOf(SearchVideosResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }
}
