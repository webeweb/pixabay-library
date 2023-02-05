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

use RuntimeException;
use WBW\Library\Pixabay\Request\AbstractRequest;
use WBW\Library\Pixabay\Response\AbstractResponse;

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
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        throw new RuntimeException();
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return "";
    }

    /**
     * {@inheritdoc}
     */
    public function serializeRequest(): array {
        return [];
    }
}
