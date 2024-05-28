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

namespace WBW\Library\Pixabay\Tests\Model;

use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Video hit test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class VideoHitTest extends AbstractTestCase {

    /**
     * Test addVideo()
     *
     * @return void
     */
    public function testAddVideo(): void {

        // Set a Video mock.
        $video = new Video();

        $obj = new VideoHit();

        $obj->addVideo($video);
        $this->assertCount(1, $obj->getVideos());
        $this->assertSame($video, $obj->getVideos()[0]);
    }

    /**
     * Test setDuration()
     *
     * @return void.
     */
    public function testSetDuration(): void {

        $obj = new VideoHit();

        $obj->setDuration(1);
        $this->assertEquals(1, $obj->getDuration());
    }

    /**
     * Test setPictureId()
     *
     * @return void.
     */
    public function testSetPictureId(): void {

        $obj = new VideoHit();

        $obj->setPictureId("pictureId");
        $this->assertEquals("pictureId", $obj->getPictureId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VideoHit();

        $this->assertNull($obj->getDuration());
        $this->assertNull($obj->getPictureId());
        $this->assertNull($obj->getRawData());
        $this->assertCount(0, $obj->getVideos());
    }
}
