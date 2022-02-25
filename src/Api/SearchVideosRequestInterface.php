<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Api;

/**
 * Search videos request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Api
 */
interface SearchVideosRequestInterface extends RequestInterface {

    /**
     * Video type "all".
     *
     * @var string
     */
    const VIDEO_TYPE_ALL = "all";

    /**
     * Video type "animation".
     *
     * @var string
     */
    const VIDEO_TYPE_ANIMATION = "animation";

    /**
     * Video type "film".
     *
     * @var string
     */
    const VIDEO_TYPE_FILM = "film";
}
