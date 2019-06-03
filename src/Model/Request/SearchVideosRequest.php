<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Model\Request;

use UnexpectedValueException;
use WBW\Library\Pixabay\API\SearchVideosRequestInterface;
use WBW\Library\Pixabay\Model\AbstractRequest;

/**
 * Search videos request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model\Request
 */
class SearchVideosRequest extends AbstractRequest implements SearchVideosRequestInterface {

    /**
     * Video type.
     *
     * @var string
     */
    private $videoType;

    /**
     * Enumerate video type.
     *
     * @return string[] Returns the video type enumeration.
     */
    public static function enumVideoType() {
        return [
            self::VIDEO_TYPE_ALL,
            self::VIDEO_TYPE_ANIMATION,
            self::VIDEO_TYPE_FILM,
        ];
    }

    /**
     * Get the video type.
     *
     * @return string Returns the video type.
     */
    public function getVideoType() {
        return $this->videoType;
    }

    /**
     * Set the video type.
     *
     * @param string $videoType The video type.
     * @return SearchVideosRequest Returns this search videos request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the video type is invalid.
     */
    public function setVideoType($videoType) {
        if (false === in_array($videoType, static::enumVideoType())) {
            throw new UnexpectedValueException(sprintf("The video type \"%s\" is invalid", $videoType));
        }
        $this->videoType = $videoType;
        return $this;
    }
}
