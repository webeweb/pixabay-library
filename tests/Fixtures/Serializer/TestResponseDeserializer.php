<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Fixtures\Serializer;

use WBW\Library\Pixabay\Serializer\ResponseDeserializer;

/**
 * Test response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Fixtures\Serializer
 */
class TestResponseDeserializer extends ResponseDeserializer {

    /**
     * {@inheritDoc}
     */
    public static function deserializeImageHit(array $response) {
        return parent::deserializeImageHit($response);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeVideo(array $response) {
        return parent::deserializeVideo($response);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeVideoHit(array $response) {
        return parent::deserializeVideoHit($response);
    }
}
