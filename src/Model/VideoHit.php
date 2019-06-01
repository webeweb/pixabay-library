<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Model;

/**
 * Video hit.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 */
class VideoHit extends AbstractHit {

    /**
     * Duration.
     *
     * @var int
     */
    private $duration;

    /**
     * Picture id.
     *
     * @var string
     */
    private $pictureId;

    /**
     * Video sizes.
     *
     * @var VideoSize[]
     */
    private $videoSizes;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setVideoSizes([]);
    }

    /**
     * Add a video size.
     *
     * @param VideoSize $videoSize The video size.
     * @return VideoHit Retuns this video.
     */
    public function addVideoSize(VideoSize $videoSize) {
        $this->videoSizes[] = $videoSize;
        return $this;
    }

    /**
     * Get the duration.
     *
     * @return int Returns the duration.
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * Get the picture id.
     *
     * @return string Returns the picture id.
     */
    public function getPictureId() {
        return $this->pictureId;
    }

    /**
     * Get the video sizes.
     *
     * @return VideoSize[] Returns the video sizes.
     */
    public function getVideoSizes() {
        return $this->videoSizes;
    }

    /**
     * Set the duration.
     *
     * @param int $duration The duration.
     * @return VideoHit Returns this video hit.
     */
    public function setDuration($duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Set the picture id.
     *
     * @param string $pictureId The picture id.
     * @return VideoHit Returns this video hit.
     */
    public function setPictureId($pictureId) {
        $this->pictureId = $pictureId;
        return $this;
    }

    /**
     * Set the video sizes.
     *
     * @param VideoSize[] $videoSizes The video siizes.
     * @return VideoHit Returns this video hit.
     */
    protected function setVideoSizes(array $videoSizes) {
        $this->videoSizes = $videoSizes;
        return $this;
    }
}
