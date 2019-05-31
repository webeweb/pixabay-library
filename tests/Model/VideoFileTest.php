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

use WBW\Library\Pixabay\Model\VideoFile;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Video file test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class VideoFileTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void.
     */
    public function testConstruct() {

        $obj = new VideoFile();

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

        $obj = new VideoFile();

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }

    /**
     * Tests the setQuality() method.
     *
     * @return void.
     */
    public function testSetQuality() {

        $obj = new VideoFile();

        $obj->setQuality("quality");
        $this->assertEquals("quality", $obj->getQuality());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void.
     */
    public function testSetSize() {

        $obj = new VideoFile();

        $obj->setSize(1);
        $this->assertEquals(1, $obj->getSize());
    }

    /**
     * Tests the setUrl() method.
     *
     * @return void.
     */
    public function testSetUrl() {

        $obj = new VideoFile();

        $obj->setUrl("url");
        $this->assertEquals("url", $obj->getUrl());
    }

    /**
     * Tests the setWidth() method.
     *
     * @return void.
     */
    public function testSetWidth() {

        $obj = new VideoFile();

        $obj->setWidth(1);
        $this->assertEquals(1, $obj->getWidth());
    }
}
