<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\API;

/**
 * Search images request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\API
 */
interface SearchImagesRequestInterface extends RequestInterface {

    /**
     * Image type "all".
     *
     * @var string
     */
    const IMAGE_TYPE_ALL = "all";

    /**
     * Image type "illustration".
     *
     * @var string
     */
    const IMAGE_TYPE_ILLUSTRATION = "illustration";

    /**
     * Image type "photo".
     *
     * @var string
     */
    const IMAGE_TYPE_PHOTO = "photo";

    /**
     * Image type "vector".
     *
     * @var string
     */
    const IMAGE_TYPE_VECTOR = "vector";
}
