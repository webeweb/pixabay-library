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

use WBW\Library\Pixabay\Model\ImageHit;

/**
 * Search images response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Response
 */
class SearchImagesResponse extends AbstractResponse {

    /**
     * Add an image hit.
     *
     * @param ImageHit $imageHit The image hit.
     * @return SearchImagesResponse Returns this search image response.
     */
    public function addImageHit(ImageHit $imageHit): SearchImagesResponse {
        return $this->addHit($imageHit);
    }

    /**
     * Get the images hits.
     *
     * @return ImageHit[] Returns the image hits.
     */
    public function getImageHits(): array {
        return $this->getHits();
    }
}
