<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Normalizer;

use InvalidArgumentException;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Argument\StringHelper;
use WBW\Library\Pixabay\Model\AbstractRequest;
use WBW\Library\Pixabay\Model\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Model\Request\SearchVideosRequest;

/**
 * Request normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Normalizer
 */
class RequestNormalizer {

    /**
     * Normalize a request.
     *
     * @param AbstractRequest $request The request.
     * @return array Returns the parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    protected static function normalizeRequest(AbstractRequest $request) {

        $parameters = [];

        if (null === $request->getQ()) {
            throw new InvalidArgumentException("The mandatory parameter \"q\" is missing");
        }

        ArrayHelper::set($parameters, "q", $request->getQ());
        ArrayHelper::set($parameters, "lang", $request->getLang(), [null, AbstractRequest::LANG_EN]);
        ArrayHelper::set($parameters, "id", $request->getId(), [null]);
        ArrayHelper::set($parameters, "category", $request->getCategory(), [null]);
        ArrayHelper::set($parameters, "min_width", $request->getMinWidth(), [null, 0]);
        ArrayHelper::set($parameters, "min_height", $request->getMinHeight(), [null, 0]);
        ArrayHelper::set($parameters, "editors_choice", StringHelper::parseBoolean($request->getEditorsChoice()), [null, "false"]);
        ArrayHelper::set($parameters, "safesearch", StringHelper::parseBoolean($request->getSafeSearch()), [null, "false"]);
        ArrayHelper::set($parameters, "order", $request->getOrder(), [null, AbstractRequest::ORDER_POPULAR]);
        ArrayHelper::set($parameters, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($parameters, "per_page", $request->getPerPage(), [null, AbstractRequest::PER_PAGE_DEFAULT]);
        ArrayHelper::set($parameters, "pretty", StringHelper::parseBoolean($request->getPretty()), [null, "false"]);

        return $parameters;
    }

    /**
     * Normalize a search images request.
     *
     * @param SearchImagesRequest $searchImagesRequest The search images request.
     * @return array Returns the parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public static function normalizeSearchImagesRequest(SearchImagesRequest $searchImagesRequest) {

        $parameters = static::normalizeRequest($searchImagesRequest);

        ArrayHelper::set($parameters, "image_type", $searchImagesRequest->getImageType(), [null, SearchImagesRequest::IMAGE_TYPE_ALL]);
        ArrayHelper::set($parameters, "orientation", $searchImagesRequest->getOrientation(), [null, SearchImagesRequest::ORIENTATION_ALL]);
        ArrayHelper::set($parameters, "colors", implode(",", $searchImagesRequest->getColors()), [null, ""]);

        return $parameters;
    }

    /**
     * Normalize a search videos request.
     *
     * @param SearchVideosRequest $searchVideosRequest The search videos request.
     * @return array Returns the parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public static function normalizeSearchVideosRequest(SearchVideosRequest $searchVideosRequest) {

        $parameters = static::normalizeRequest($searchVideosRequest);

        ArrayHelper::set($parameters, "video_type", $searchVideosRequest->getVideoType(), [null, SearchVideosRequest::VIDEO_TYPE_ALL]);

        return $parameters;
    }
}
