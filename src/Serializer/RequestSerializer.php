<?php

declare(strict_types = 1);

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Serializer;

use WBW\Library\Pixabay\Api\RequestInterface;
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
     * Serialize a request.
     *
     * @param AbstractRequest $request The request.
     * @return array<string,mixed> Returns the serialized request.
     */
    protected static function serializeRequest(AbstractRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "q", $request->getQ(), [null]);
        ArrayHelper::set($result, "lang", $request->getLang(), [null, RequestInterface::LANG_EN]);
        ArrayHelper::set($result, "id", $request->getId(), [null]);
        ArrayHelper::set($result, "category", $request->getCategory(), [null]);
        ArrayHelper::set($result, "min_width", $request->getMinWidth(), [null, 0]);
        ArrayHelper::set($result, "min_height", $request->getMinHeight(), [null, 0]);
        ArrayHelper::set($result, "editors_choice", StringHelper::parseBoolean($request->getEditorsChoice()), [null, "false"]);
        ArrayHelper::set($result, "safesearch", StringHelper::parseBoolean($request->getSafeSearch()), [null, "false"]);
        ArrayHelper::set($result, "order", $request->getOrder(), [null, RequestInterface::ORDER_POPULAR]);
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, RequestInterface::PER_PAGE_DEFAULT]);
        ArrayHelper::set($result, "pretty", StringHelper::parseBoolean($request->getPretty()), [null, "false"]);

        return $result;
    }

    /**
     * Serialize a search images request.
     *
     * @param SearchImagesRequest $request The search images request.
     * @return array<string,mixed> Returns the serialized search images request.
     */
    public static function serializeSearchImagesRequest(SearchImagesRequest $request): array {

        $result = static::serializeRequest($request);

        ArrayHelper::set($result, "image_type", $request->getImageType(), [null, RequestInterface::IMAGE_TYPE_ALL]);
        ArrayHelper::set($result, "orientation", $request->getOrientation(), [null, RequestInterface::ORIENTATION_ALL]);
        ArrayHelper::set($result, "colors", implode(",", $request->getColors()), [null, ""]);

        return $result;
    }

    /**
     * Serialize a search videos request.
     *
     * @param SearchVideosRequest $request The search videos request.
     * @return array<string,mixed> Returns the serialized search videos request.
     */
    public static function serializeSearchVideosRequest(SearchVideosRequest $request): array {

        $result = static::serializeRequest($request);

        ArrayHelper::set($result, "video_type", $request->getVideoType(), [null, RequestInterface::VIDEO_TYPE_ALL]);

        return $result;
    }
}
