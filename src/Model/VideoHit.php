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
     * Videos.
     *
     * @var Video[]
     */
    private $videos;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setVideos([]);
    }

    /**
     * Add a video.
     *
     * @param Video $video The video.
     * @return VideoHit Retuns this video.
     */
    public function addVideo(Video $video) {
        $this->videos[] = $video;
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
     * Get the videos.
     *
     * @return Video[] Returns the videos.
     */
    public function getVideos() {
        return $this->videos;
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
     * Set the videos.
     *
     * @param Video[] $videos The video siizes.
     * @return VideoHit Returns this video hit.
     */
    protected function setVideos(array $videos) {
        $this->videos = $videos;
        return $this;
    }
}
