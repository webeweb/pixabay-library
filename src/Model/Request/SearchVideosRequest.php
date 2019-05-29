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

use WBW\Library\Pixabay\Model\AbstractRequest;

/**
 * Search videos request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model\Request
 */
class SearchVideosRequest extends AbstractRequest {

    /**
     * Video type.
     *
     * @var string
     */
    private $videoType;

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
     */
    public function setVideoType($videoType) {
        $this->videoType = $videoType;
        return $this;
    }
}
