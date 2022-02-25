<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Fixtures\Response;

use WBW\Library\Pixabay\Model\AbstractHit;
use WBW\Library\Pixabay\Response\AbstractResponse;

/**
 * Test response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Fixtures\Response
 */
class TestResponse extends AbstractResponse {

    /**
     * {@inheritDoc}
     */
    public function addHit(AbstractHit $hit): AbstractResponse {
        return parent::addHit($hit);
    }

    /**
     * {@inheritDoc}
     */
    public function getHits(): array {
        return parent::getHits();
    }
}
