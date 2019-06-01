<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Fixtures\Normalizer;

use WBW\Library\Pixabay\Normalizer\ResponseNormalizer;

/**
 * Test response normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Fixtures\Normalizer
 */
class TestResponseNormalizer extends ResponseNormalizer {

    /**
     * {@inheritDoc}
     */
    public static function denormalizeImageHit(array $response) {
        return parent::denormalizeImageHit($response);
    }

    /**
     * {@inheritDoc}
     */
    public static function denormalizeVideo(array $response) {
        return parent::denormalizeVideo($response);
    }

    /**
     * {@inheritDoc}
     */
    public static function denormalizeVideoHit(array $response) {
        return parent::denormalizeVideoHit($response);
    }
}
