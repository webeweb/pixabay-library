<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Response;

use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Pixabay\Response\AbstractResponse;
use WBW\Library\Pixabay\Response\SearchVideosResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search videos response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Response
 */
class SearchVideosResponseTest extends AbstractTestCase {

    /**
     * Test addVideoHit()
     *
     * @return void
     */
    public function testAddVideoHit(): void {

        // Set an Video hit mock.
        $videoHit = new VideoHit();

        $obj = new SearchVideosResponse();

        $obj->addVideoHit($videoHit);
        $this->assertCount(1, $obj->getVideoHits());
        $this->assertSame($videoHit, $obj->getVideoHits()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SearchVideosResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertCount(0, $obj->getVideoHits());
    }
}
