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

namespace WBW\Library\Pixabay\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Get a token.
     *
     * @return string Returns the token.
     */
    public static function getToken(): string {

        $path = __DIR__ . "/../.token";
        if (true === file_exists($path)) {
            return file_get_contents($path);
        }

        return "API_TOKEN_MOCK";
    }
}
