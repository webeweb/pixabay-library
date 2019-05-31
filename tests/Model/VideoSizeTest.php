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

use WBW\Library\Pixabay\Model\VideoSize;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Video size test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class VideoSizeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void.
     */
    public function testConstruct() {

        $obj = new VideoSize();

        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getQuality());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getUrl());
        $this->assertNull($obj->getWidth());
    }

    /**
     * Tests the setHeight() method.
     *
     * @return void.
     */
    public function testSetHeight() {

        $obj = new VideoSize();

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }

    /**
     * Tests the setQuality() method.
     *
     * @return void.
     */
    public function testSetQuality() {

        $obj = new VideoSize();

        $obj->setQuality("quality");
        $this->assertEquals("quality", $obj->getQuality());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void.
     */
    public function testSetSize() {

        $obj = new VideoSize();

        $obj->setSize(1);
        $this->assertEquals(1, $obj->getSize());
    }

    /**
     * Tests the setUrl() method.
     *
     * @return void.
     */
    public function testSetUrl() {

        $obj = new VideoSize();

        $obj->setUrl("url");
        $this->assertEquals("url", $obj->getUrl());
    }

    /**
     * Tests the setWidth() method.
     *
     * @return void.
     */
    public function testSetWidth() {

        $obj = new VideoSize();

        $obj->setWidth(1);
        $this->assertEquals(1, $obj->getWidth());
    }
}
