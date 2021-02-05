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

use InvalidArgumentException;
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
     * Search videos resource path.
     *
     * @var string
     */
    const SEARCH_VIDEOS_RESOURCE_PATH = "/videos/";

    /**
     * Video type.
     *
     * @var string|null
     */
    private $videoType;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setVideoType(static::VIDEO_TYPE_ALL);
    }

    /**
     * Enumerate video type.
     *
     * @return string[] Returns the video type enumeration.
     */
    public static function enumVideoType(): array {
        return [
            static::VIDEO_TYPE_ALL,
            static::VIDEO_TYPE_ANIMATION,
            static::VIDEO_TYPE_FILM,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return static::SEARCH_VIDEOS_RESOURCE_PATH;
    }

    /**
     * Get the video type.
     *
     * @return string|null Returns the video type.
     */
    public function getVideoType(): ?string {
        return $this->videoType;
    }

    /**
     * Set the video type.
     *
     * @param string|null $videoType The video type.
     * @return SearchVideosRequest Returns this search videos request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the video type is invalid.
     */
    public function setVideoType(?string $videoType): SearchVideosRequest {
        if (false === in_array($videoType, static::enumVideoType())) {
            throw new InvalidArgumentException(sprintf('The video type "%s" is invalid', $videoType));
        }
        $this->videoType = $videoType;
        return $this;
    }
}
