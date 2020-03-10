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

use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Pixabay\Model\AbstractHit;
use WBW\Library\Pixabay\Model\AbstractResponse;
use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Model\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Model\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize an hit.
     *
     * @param AbstractHit $model The hit.
     * @param array $response The response.
     * @return void
     */
    protected static function deserializeHit(AbstractHit $model, array $response) {

        $model->setComments(intval(ArrayHelper::get($response, "comments", -1)));
        $model->setDownloads(intval(ArrayHelper::get($response, "downloads", -1)));
        $model->setFavorites(intval(ArrayHelper::get($response, "favorites", -1)));
        $model->setId(intval(ArrayHelper::get($response, "id", -1)));
        $model->setLikes(intval(ArrayHelper::get($response, "likes", -1)));
        $model->setPageURL(ArrayHelper::get($response, "pageURL"));
        $model->setTags(ArrayHelper::get($response, "tags"));
        $model->setType(ArrayHelper::get($response, "type"));
        $model->setUser(ArrayHelper::get($response, "user"));
        $model->setUserId(intval(ArrayHelper::get($response, "user_id", -1)));
        $model->setUserImageURL(ArrayHelper::get($response, "userImageURL"));
        $model->setViews(intval(ArrayHelper::get($response, "views", -1)));
    }

    /**
     * Deserialize an image hit.
     *
     * @param array $response The response.
     * @return ImageHit Returns an image hit.
     */
    protected static function deserializeImageHit(array $response) {

        $model = new ImageHit();

        static::deserializeHit($model, $response);

        $model->setFullHDURL(ArrayHelper::get($response, "fullHDURL"));
        $model->setImageHeight(intval(ArrayHelper::get($response, "imageHeight", -1)));
        $model->setImageSize(intval(ArrayHelper::get($response, "imageSize", -1)));
        $model->setImageURL(ArrayHelper::get($response, "imageURL"));
        $model->setImageWidth(intval(ArrayHelper::get($response, "imageWidth", -1)));
        $model->setLargeImageURL(ArrayHelper::get($response, "largeImageURL"));
        $model->setPreviewHeight(intval(ArrayHelper::get($response, "previewHeight", -1)));
        $model->setPreviewURL(ArrayHelper::get($response, "previewURL"));
        $model->setPreviewWidth(intval(ArrayHelper::get($response, "previewWidth", -1)));
        $model->setWebFormatHeight(intval(ArrayHelper::get($response, "webformatHeight", -1)));
        $model->setWebFormatURL(ArrayHelper::get($response, "webformatURL"));
        $model->setWebFormatWidth(intval(ArrayHelper::get($response, "webformatWidth", -1)));

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param AbstractResponse $model The response.
     * @param array $response The response.
     * @return void
     */
    protected static function deserializeResponse(AbstractResponse $model, array $response) {

        $model->setTotal(intval(ArrayHelper::get($response, "total", -1)));
        $model->setTotalHits(intval(ArrayHelper::get($response, "totalHits", -1)));
    }

    /**
     * Deserialize a search images response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchImagesResponse Returns the search images response.
     */
    public static function deserializeSearchImagesResponse($rawResponse) {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $model = new SearchImagesResponse();
        $model->setRawResponse($rawResponse);

        if (null === $decodedResponse) {
            return $model;
        }

        static::deserializeResponse($model, $decodedResponse);

        foreach (ArrayHelper::get($decodedResponse, "hits", []) as $current) {
            $model->addImageHit(static::deserializeImageHit($current));
        }

        return $model;
    }

    /**
     * Deserialize a search videos response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchVideosResponse Returns the search videos response.
     */
    public static function deserializeSearchVideosResponse($rawResponse) {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $model = new SearchVideosResponse();
        $model->setRawResponse($rawResponse);

        if (null === $decodedResponse) {
            return $model;
        }

        static::deserializeResponse($model, $decodedResponse);

        foreach (ArrayHelper::get($decodedResponse, "hits", []) as $current) {
            $model->addVideoHit(static::deserializeVideoHit($current));
        }

        return $model;
    }

    /**
     * Deserialize a video.
     *
     * @param array $response The response.
     * @return Video Returns a video.
     */
    protected static function deserializeVideo(array $response) {

        $model = new Video();

        $model->setHeight(intval(ArrayHelper::get($response, "height", -1)));
        $model->setSize(intval(ArrayHelper::get($response, "size", -1)));
        $model->setUrl(ArrayHelper::get($response, "url"));
        $model->setWidth(intval(ArrayHelper::get($response, "width", -1)));

        return $model;
    }

    /**
     * Deserialize a video hit.
     *
     * @param array $response The response.
     * @return VideoHit Returns a video hit.
     */
    protected static function deserializeVideoHit(array $response) {

        $model = new VideoHit();

        static::deserializeHit($model, $response);

        $model->setDuration(intval(ArrayHelper::get($response, "duration", -1)));
        $model->setPictureId(intval(ArrayHelper::get($response, "picture_id", -1)));

        foreach (ArrayHelper::get($response, "videos", []) as $q => $v) {
            $model->addVideo(static::deserializeVideo($v)->setQuality($q));
        }

        return $model;
    }
}
