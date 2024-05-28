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

namespace WBW\Library\Pixabay\Serializer;

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Pixabay\Response\AbstractResponse;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize a response.
     *
     * @param AbstractResponse $model The response.
     * @param array<string,mixed> $data The response.
     * @return void
     */
    protected static function deserializeResponse(AbstractResponse $model, array $data): void {

        $model->setTotal(intval(ArrayHelper::get($data, "total", -1)));
        $model->setTotalHits(intval(ArrayHelper::get($data, "totalHits", -1)));
    }

    /**
     * Deserialize a search images response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchImagesResponse Returns the search images response.
     */
    public static function deserializeSearchImagesResponse(string $rawResponse): SearchImagesResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new SearchImagesResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        static::deserializeResponse($model, $data);

        foreach (ArrayHelper::get($data, "hits", []) as $current) {
            $model->addImageHit(JsonDeserializer::deserializeImageHit($current));
        }

        return $model;
    }

    /**
     * Deserialize a search videos response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchVideosResponse Returns the search videos response.
     */
    public static function deserializeSearchVideosResponse(string $rawResponse): SearchVideosResponse {

        $data = json_decode(trim($rawResponse), true);

        $model = new SearchVideosResponse();
        $model->setRawResponse($rawResponse);

        if (null === $data) {
            return $model;
        }

        static::deserializeResponse($model, $data);

        foreach (ArrayHelper::get($data, "hits", []) as $current) {
            $model->addVideoHit(JsonDeserializer::deserializeVideoHit($current));
        }

        return $model;
    }
}
