<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Api;

use WBW\Library\Pixabay\Api\SearchVideosRequestInterface;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search videos request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Api
 */
class SearchVideosRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("all", SearchVideosRequestInterface::VIDEO_TYPE_ALL);
        $this->assertEquals("animation", SearchVideosRequestInterface::VIDEO_TYPE_ANIMATION);
        $this->assertEquals("film", SearchVideosRequestInterface::VIDEO_TYPE_FILM);
    }
}
