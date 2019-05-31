<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Model;

use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

class VideoTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Video();

        $this->assertNull($obj->getDuration());
        $this->assertNull($obj->getPictureId());
    }

    /**
     * Tests the setDuration() method.
     *
     * @return void.
     */
    public function testSetDuration() {

        $obj = new Video();

        $obj->setDuration(1);
        $this->assertEquals(1, $obj->getDuration());
    }

    /**
     * Tests the setPictureId() method.
     *
     * @return void.
     */
    public function testSetPictureId() {

        $obj = new Video();

        $obj->setPictureId("pictureId");
        $this->assertEquals("pictureId", $obj->getPictureId());
    }
}
