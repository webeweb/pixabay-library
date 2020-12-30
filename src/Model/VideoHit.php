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
     * @var int|null
     */
    private $duration;

    /**
     * Picture id.
     *
     * @var string|null
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
        parent::__construct();

        $this->setVideos([]);
    }

    /**
     * Add a video.
     *
     * @param Video $video The video.
     * @return VideoHit Retuns this video.
     */
    public function addVideo(Video $video): VideoHit {
        $this->videos[] = $video;
        return $this;
    }

    /**
     * Get the duration.
     *
     * @return int|null Returns the duration.
     */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * Get the picture id.
     *
     * @return string|null Returns the picture id.
     */
    public function getPictureId(): ?string {
        return $this->pictureId;
    }

    /**
     * Get the videos.
     *
     * @return Video[] Returns the videos.
     */
    public function getVideos(): array {
        return $this->videos;
    }

    /**
     * Set the duration.
     *
     * @param int|null $duration The duration.
     * @return VideoHit Returns this video hit.
     */
    public function setDuration(?int $duration): VideoHit {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Set the picture id.
     *
     * @param string|null $pictureId The picture id.
     * @return VideoHit Returns this video hit.
     */
    public function setPictureId(?string $pictureId): VideoHit {
        $this->pictureId = $pictureId;
        return $this;
    }

    /**
     * Set the videos.
     *
     * @param Video[] $videos The video siizes.
     * @return VideoHit Returns this video hit.
     */
    protected function setVideos(array $videos): VideoHit {
        $this->videos = $videos;
        return $this;
    }
}
