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

namespace WBW\Library\Pixabay\Tests\Provider;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Provider\TestApiProvider;
use WBW\Library\Pixabay\Tests\Fixtures\Response\TestResponse;

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
        $this->key = static::getToken();
    }

    /**
     * Test populateResponse()
     *
     * @return void
     */
    public function testPopulateResponse(): void {

        // Set a response mock.
        $response = new TestResponse();

        $obj = new TestApiProvider();

        $obj->populateResponse($response);
        $this->assertSame($obj->getLimit(), $response->getLimit());
        $this->assertSame($obj->getRemaining(), $response->getRemaining());
        $this->assertSame($obj->getReset(), $response->getReset());
    }

    /**
     * Test searchImages()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSearchImages(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        $obj = new ApiProvider($this->key, $logger);

        try {

            $res = $obj->sendRequest($searchImagesRequest);

            $this->assertInstanceOf(SearchImagesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test searchImages()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSearchImagesWithInvalidArgumentException(): void {

        // Set a Search images request mock.
        $searchImagesRequest = new SearchImagesRequest();

        $obj = new ApiProvider();

        try {

            $obj->sendRequest($searchImagesRequest);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "key" is missing', $ex->getMessage());
        }
    }

    /**
     * Test searchVideos()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSearchVideos(): void {

        // Set a Search videos request mock.
        $searchVideosRequest = new SearchVideosRequest();

        $obj = new ApiProvider($this->key);

        try {

            $res = $obj->sendRequest($searchVideosRequest);

            $this->assertInstanceOf(SearchVideosResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }
}
