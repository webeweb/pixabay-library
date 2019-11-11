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

use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Pixabay\Model\AbstractHit;
use WBW\Library\Pixabay\Model\AbstractResponse;
use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Model\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Model\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;

/**
 * Response normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Normalizer
 */
class ResponseNormalizer {

    /**
     * Denormalize an hit.
     *
     * @param AbstractHit $model The hit.
     * @param array $response The response.
     * @return void
     */
    protected static function denormalizeHit(AbstractHit $model, array $response) {

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
     * Denormalize an image hit.
     *
     * @param array $response The response.
     * @return ImageHit Returns an image hit.
     */
    protected static function denormalizeImageHit(array $response) {

        $model = new ImageHit();

        static::denormalizeHit($model, $response);

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
     * Denormalize a response.
     *
     * @param AbstractResponse $model The response.
     * @param array $response The response.
     * @return void
     */
    protected static function denormalizeResponse(AbstractResponse $model, array $response) {

        $model->setTotal(intval(ArrayHelper::get($response, "total", -1)));
        $model->setTotalHits(intval(ArrayHelper::get($response, "totalHits", -1)));
    }

    /**
     * Denormalize a search images response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchImagesResponse Returns the search images response.
     */
    public static function denormalizeSearchImagesResponse($rawResponse) {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $model = new SearchImagesResponse();
        $model->setRawResponse($rawResponse);

        if (null === $decodedResponse) {
            return $model;
        }

        static::denormalizeResponse($model, $decodedResponse);

        foreach (ArrayHelper::get($decodedResponse, "hits", []) as $current) {
            $model->addImageHit(static::denormalizeImageHit($current));
        }

        return $model;
    }

    /**
     * Denormalize a search videos response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchVideosResponse Returns the search videos response.
     */
    public static function denormalizeSearchVideosResponse($rawResponse) {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $model = new SearchVideosResponse();
        $model->setRawResponse($rawResponse);

        if (null === $decodedResponse) {
            return $model;
        }

        static::denormalizeResponse($model, $decodedResponse);

        foreach (ArrayHelper::get($decodedResponse, "hits", []) as $current) {
            $model->addVideoHit(static::denormalizeVideoHit($current));
        }

        return $model;
    }

    /**
     * Denormalize a video.
     *
     * @param array $response The response.
     * @return Video Returns a video.
     */
    protected static function denormalizeVideo(array $response) {

        $model = new Video();

        $model->setHeight(intval(ArrayHelper::get($response, "height", -1)));
        $model->setSize(intval(ArrayHelper::get($response, "size", -1)));
        $model->setUrl(ArrayHelper::get($response, "url"));
        $model->setWidth(intval(ArrayHelper::get($response, "width", -1)));

        return $model;
    }

    /**
     * Denormalize a video hit.
     *
     * @param array $response The response.
     * @return VideoHit Returns a video hit.
     */
    protected static function denormalizeVideoHit(array $response) {

        $model = new VideoHit();

        static::denormalizeHit($model, $response);

        $model->setDuration(intval(ArrayHelper::get($response, "duration", -1)));
        $model->setPictureId(intval(ArrayHelper::get($response, "picture_id", -1)));

        foreach (ArrayHelper::get($response, "videos", []) as $q => $v) {
            $model->addVideo(static::denormalizeVideo($v)->setQuality($q));
        }

        return $model;
    }
}
