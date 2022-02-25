<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Provider;

use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Response\AbstractResponse;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Serializer\RequestSerializer;
use WBW\Library\Pixabay\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Before return a response.
     *
     * @param AbstractResponse $response The response.
     * @return AbstractResponse Returns the response.
     */
    protected function beforeReturnResponse(AbstractResponse $response): AbstractResponse {

        $response->setLimit($this->getLimit());
        $response->setRemaining($this->getRemaining());
        $response->setReset($this->getReset());

        return $response;
    }

    /**
     * Search images.
     *
     * @param SearchImagesRequest $request The search images request.
     * @return SearchImagesResponse Returns the search images response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchImages(SearchImagesRequest $request): SearchImagesResponse {

        $queryData = RequestSerializer::serializeSearchImagesRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeSearchImagesResponse($rawResponse));
    }

    /**
     * Search videos.
     *
     * @param SearchVideosRequest $request The search videos request.
     * @return SearchVideosResponse Returns the search videos response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchVideos(SearchVideosRequest $request): SearchVideosResponse {

        $queryData = RequestSerializer::serializeSearchVideosRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return $this->beforeReturnResponse(ResponseDeserializer::deserializeSearchVideosResponse($rawResponse));
    }
}
