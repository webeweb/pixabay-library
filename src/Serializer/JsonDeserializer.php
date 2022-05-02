<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Serializer;

use WBW\Library\Pixabay\Model\AbstractHit;
use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * JSON deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Serializer
 */
class JsonDeserializer {

    /**
     * Deserialize a hit.
     *
     * @param AbstractHit $model The hit.
     * @param array $data The data.
     * @return void
     */
    protected static function deserializeHit(AbstractHit $model, array $data): void {

        $model->setId(intval(ArrayHelper::get($data, "id", -1)));
        $model->setPageURL(ArrayHelper::get($data, "pageURL"));
        $model->setType(ArrayHelper::get($data, "type"));
        $model->setTags(ArrayHelper::get($data, "tags"));
        $model->setViews(intval(ArrayHelper::get($data, "views", -1)));
        $model->setDownloads(intval(ArrayHelper::get($data, "downloads", -1)));
        $model->setFavorites(intval(ArrayHelper::get($data, "favorites", -1)));
        $model->setLikes(intval(ArrayHelper::get($data, "likes", -1)));
        $model->setComments(intval(ArrayHelper::get($data, "comments", -1)));
        $model->setUserId(intval(ArrayHelper::get($data, "user_id", -1)));
        $model->setUser(ArrayHelper::get($data, "user"));
        $model->setUserImageURL(ArrayHelper::get($data, "userImageURL"));
    }

    /**
     * Deserialize an image hit.
     *
     * @param array $data The data.
     * @return ImageHit Returns an image hit.
     */
    public static function deserializeImageHit(array $data): ImageHit {

        $model = new ImageHit();
        $model->setRawData(json_encode($data));

        static::deserializeHit($model, $data);

        $model->setPreviewUrl(ArrayHelper::get($data, "previewURL"));
        $model->setPreviewWidth(intval(ArrayHelper::get($data, "previewWidth", -1)));
        $model->setPreviewHeight(intval(ArrayHelper::get($data, "previewHeight", -1)));
        $model->setWebFormatUrl(ArrayHelper::get($data, "webformatURL"));
        $model->setWebFormatWidth(intval(ArrayHelper::get($data, "webformatWidth", -1)));
        $model->setWebFormatHeight(intval(ArrayHelper::get($data, "webformatHeight", -1)));
        $model->setLargeImageUrl(ArrayHelper::get($data, "largeImageURL"));
        $model->setFullHdUrl(ArrayHelper::get($data, "fullHDURL"));
        $model->setImageUrl(ArrayHelper::get($data, "imageURL"));
        $model->setImageWidth(intval(ArrayHelper::get($data, "imageWidth", -1)));
        $model->setImageHeight(intval(ArrayHelper::get($data, "imageHeight", -1)));
        $model->setImageSize(intval(ArrayHelper::get($data, "imageSize", -1)));

        return $model;
    }

    /**
     * Deserialize a video.
     *
     * @param array $data The data.
     * @return Video Returns a video.
     */
    public static function deserializeVideo(array $data): Video {

        $model = new Video();
        $model->setRawData(json_encode($data));

        $model->setUrl(ArrayHelper::get($data, "url"));
        $model->setWidth(intval(ArrayHelper::get($data, "width", -1)));
        $model->setHeight(intval(ArrayHelper::get($data, "height", -1)));
        $model->setSize(intval(ArrayHelper::get($data, "size", -1)));

        return $model;
    }

    /**
     * Deserialize a video hit.
     *
     * @param array $data The data.
     * @return VideoHit Returns a video hit.
     */
    public static function deserializeVideoHit(array $data): VideoHit {

        $model = new VideoHit();
        $model->setRawData(json_encode($data));

        static::deserializeHit($model, $data);

        $model->setDuration(intval(ArrayHelper::get($data, "duration", -1)));
        $model->setPictureId(intval(ArrayHelper::get($data, "picture_id", -1)));

        foreach (ArrayHelper::get($data, "videos", []) as $q => $v) {
            $model->addVideo(static::deserializeVideo($v)->setQuality($q));
        }

        return $model;
    }
}
