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

use InvalidArgumentException;
use WBW\Library\Pixabay\Exception\APIException;
use WBW\Library\Pixabay\Model\AbstractResponse;
use WBW\Library\Pixabay\Model\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Model\Request\SearchVideosRequest;
use WBW\Library\Pixabay\Model\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Model\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Normalizer\RequestNormalizer;
use WBW\Library\Pixabay\Normalizer\ResponseNormalizer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Provider
 */
class APIProvider extends AbstractProvider {

    /**
     * Before return a response.
     *
     * @param AbstractResponse $response The response.
     * @return AbstractResponse Returns the response.
     */
    protected function beforeReturnResponse(AbstractResponse $response) {

        $response->setLimit($this->getLimit());
        $response->setRemaining($this->getRemaining());
        $response->setReset($this->getReset());

        return $response;
    }

    /**
     * Search images.
     *
     * @param SearchImagesRequest $searchImagesRequest The search images request.
     * @return SearchImagesResponse Returns the search images response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function searchImages(SearchImagesRequest $searchImagesRequest) {

        $queryData = RequestNormalizer::normalizeSearchImagesRequest($searchImagesRequest);

        $rawResponse = $this->callAPI($searchImagesRequest, $queryData);

        return $this->beforeReturnResponse(ResponseNormalizer::denormalizeSearchImagesResponse($rawResponse));
    }

    /**
     * Search videos.
     *
     * @param SearchVideosRequest $searchVideosRequest The search videos request.
     * @return SearchVideosResponse Returns the search videos response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function searchVideos(SearchVideosRequest $searchVideosRequest) {

        $queryData = RequestNormalizer::normalizeSearchVideosRequest($searchVideosRequest);

        $rawResponse = $this->callAPI($searchVideosRequest, $queryData);

        return $this->beforeReturnResponse(ResponseNormalizer::denormalizeSearchVideosResponse($rawResponse));
    }
}
