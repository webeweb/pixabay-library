<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Response;

use WBW\Library\Pixabay\Model\VideoHit;

/**
 * Search videos response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Response
 */
class SearchVideosResponse extends AbstractResponse {

    /**
     * Add an video hit.
     *
     * @param VideoHit $videoHit The video hit.
     * @return SearchVideosResponse Returns this search video response.
     */
    public function addVideoHit(VideoHit $videoHit): SearchVideosResponse {
        return $this->addHit($videoHit);
    }

    /**
     * Get the videos hits.
     *
     * @return VideoHit[] Returns the video hits.
     */
    public function getVideoHits(): array {
        return $this->getHits();
    }
}
