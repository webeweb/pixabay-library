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
     */
    protected static function normalizeRequest(AbstractRequest $request) {

        $parameters = [];

        ArrayHelper::set($parameters, "q", $request->getQ(), [null]);
        ArrayHelper::set($parameters, "lang", $request->getLang(), [null, "en"]);
        ArrayHelper::set($parameters, "id", $request->getId(), [null]);
        ArrayHelper::set($parameters, "category", $request->getCategory(), [null]);
        ArrayHelper::set($parameters, "min_width", $request->getMinWidth(), [null]);
        ArrayHelper::set($parameters, "min_height", $request->getMinHeight(), [null]);
        ArrayHelper::set($parameters, "editors_choice", StringHelper::parseBoolean($request->getEditorsChoice()), [null, "false"]);
        ArrayHelper::set($parameters, "safesearch", StringHelper::parseBoolean($request->getSafeSearch()), [null, "false"]);
        ArrayHelper::set($parameters, "order", $request->getOrder(), [null, "popular"]);
        ArrayHelper::set($parameters, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($parameters, "per_page", $request->getPerPage(), [null, 20]);
        ArrayHelper::set($parameters, "pretty", StringHelper::parseBoolean($request->getPretty()), [null, "false"]);

        return $parameters;
    }

    /**
     * Normalize a search images request.
     *
     * @param SearchImagesRequest $searchImagesRequest The search images request.
     * @return array Returns the parameters.
     */
    public static function normalizeSearchImagesRequest(SearchImagesRequest $searchImagesRequest) {

        $parameters = static::normalizeRequest($searchImagesRequest);

        ArrayHelper::set($parameters, "image_type", $searchImagesRequest->getImageType(), [null, "all"]);
        ArrayHelper::set($parameters, "colors", $searchImagesRequest->getColors(), [null]);

        return $parameters;
    }

    /**
     * Normalize a search videos request.
     *
     * @param SearchVideosRequest $searchVideosRequest The search videos request.
     * @return array Returns the parameters.
     */
    public static function normalizeSearchVideosRequest(SearchVideosRequest $searchVideosRequest) {

        $parameters = static::normalizeRequest($searchVideosRequest);

        ArrayHelper::set($parameters, "video_type", $searchVideosRequest->getVideoType(), [null, "all"]);

        return $parameters;
    }
}
