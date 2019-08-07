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
use WBW\Library\Pixabay\Exception\APIException;
use WBW\Library\Pixabay\Model\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Model\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Model\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Model\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Provider\APIProvider;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Provider\TestAPIProvider;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Provider
 */
class APIProviderTest extends AbstractTestCase {

    /**
     * Key.
     *
     * @var string
     */
    private $key;

    /**
     * {inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a key mock.
        $this->key = "YOUR_API_KEY";
    }

    /**
     * Tests the beforeReturnResponse() method.
     *
     * @return void
     */
    public function testBeforeReturnResponse() {

        // Set a Search images response mock.
        $searchImageResponse = new SearchImagesResponse();

        $obj = new TestAPIProvider();

        $obj->beforeReturnResponse($searchImageResponse);
        $this->assertSame($obj->getLimit(), $searchImageResponse->getLimit());
        $this->assertSame($obj->getRemaining(), $searchImageResponse->getRemaining());
        $this->assertSame($obj->getReset(), $searchImageResponse->getReset());
    }

    /**
     * Tests the searchImages() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchImages() {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        $obj = new APIProvider($this->key, $logger);

        try {

            $res = $obj->searchImages($searchImagesRequest);

            $this->assertInstanceOf(SearchImagesResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(APIException::class, $ex);
        }
    }

    /**
     * Tests the searchImages() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchImagesWithInvalidArgumentException() {

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        $obj = new APIProvider();

        try {

            $obj->searchImages($searchImagesRequest);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"key\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the searchVideos() method.
     *
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSearchVideos() {

        // Set a Search videos request mock.
        $searchVideosRequest = new SearchVideosRequest();

        $obj = new APIProvider($this->key);

        try {

            $res = $obj->searchVideos($searchVideosRequest);

            $this->assertInstanceOf(SearchVideosResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(APIException::class, $ex);
        }
    }
}
