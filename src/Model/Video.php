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
 * Video.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 */
class Video extends AbstractMedia {

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
     * Set the duration.
     *
     * @param int $duration The duration.
     * @return Video Returns this video.
     */
    public function setDuration($duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Set the picture id.
     *
     * @param string $pictureId The picture id.
     * @return Video Returns this video.
     */
    public function setPictureId($pictureId) {
        $this->pictureId = $pictureId;
        return $this;
    }
}
