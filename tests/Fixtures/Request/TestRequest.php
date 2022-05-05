<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Fixtures\Request;

use WBW\Library\Pixabay\Request\AbstractRequest;

/**
 * Test request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Fixtures\Request
 */
class TestRequest extends AbstractRequest {

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return "";
    }
}
