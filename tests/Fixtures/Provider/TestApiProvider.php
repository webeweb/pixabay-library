<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pixabay\Tests\Fixtures\Provider;

use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Response\AbstractResponse;

/**
 * Test API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Fixtures\Provider
 */
class TestApiProvider extends ApiProvider {

    /**
     * {@inheritDoc}
     */
    public function populateResponse(AbstractResponse $response): AbstractResponse {
        return parent::populateResponse($response);
    }
}
