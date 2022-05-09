<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Serializer;

use WBW\Library\Pixabay\Request\AbstractRequest;
use WBW\Library\Pixabay\Request\SearchImagesRequest;
use WBW\Library\Pixabay\Request\SearchVideosRequest;
use WBW\Library\Types\Helper\ArrayHelper;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Serializer
 */
class RequestSerializer {

    /**
     * Serializes a request.
     *
     * @param AbstractRequest $request The request.
     * @return array Returns the serialized request.
     */
    protected static function serializeRequest(AbstractRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "q", $request->getQ(), [null]);
        ArrayHelper::set($result, "lang", $request->getLang(), [null, AbstractRequest::LANG_EN]);
        ArrayHelper::set($result, "id", $request->getId(), [null]);
        ArrayHelper::set($result, "category", $request->getCategory(), [null]);
        ArrayHelper::set($result, "min_width", $request->getMinWidth(), [null, 0]);
        ArrayHelper::set($result, "min_height", $request->getMinHeight(), [null, 0]);
        ArrayHelper::set($result, "editors_choice", StringHelper::parseBoolean($request->getEditorsChoice()), [null, "false"]);
        ArrayHelper::set($result, "safesearch", StringHelper::parseBoolean($request->getSafeSearch()), [null, "false"]);
        ArrayHelper::set($result, "order", $request->getOrder(), [null, AbstractRequest::ORDER_POPULAR]);
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, AbstractRequest::PER_PAGE_DEFAULT]);
        ArrayHelper::set($result, "pretty", StringHelper::parseBoolean($request->getPretty()), [null, "false"]);

        return $result;
    }

    /**
     * Serializes a search images request.
     *
     * @param SearchImagesRequest $request The search images request.
     * @return array Returns the serialized search images request.
     */
    public static function serializeSearchImagesRequest(SearchImagesRequest $request): array {

        $result = static::serializeRequest($request);

        ArrayHelper::set($result, "image_type", $request->getImageType(), [null, SearchImagesRequest::IMAGE_TYPE_ALL]);
        ArrayHelper::set($result, "orientation", $request->getOrientation(), [null, SearchImagesRequest::ORIENTATION_ALL]);
        ArrayHelper::set($result, "colors", implode(",", $request->getColors()), [null, ""]);

        return $result;
    }

    /**
     * Serializes a search videos request.
     *
     * @param SearchVideosRequest $request The search videos request.
     * @return array Returns the serialized search videos request.
     */
    public static function serializeSearchVideosRequest(SearchVideosRequest $request): array {

        $result = static::serializeRequest($request);

        ArrayHelper::set($result, "video_type", $request->getVideoType(), [null, SearchVideosRequest::VIDEO_TYPE_ALL]);

        return $result;
    }
}
