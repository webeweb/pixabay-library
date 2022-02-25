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

/**
 * Video test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class VideoTest extends AbstractTestCase {

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new Video();

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }

    /**
     * Tests setQuality()
     *
     * @return void.
     */
    public function testSetQuality(): void {

        $obj = new Video();

        $obj->setQuality("quality");
        $this->assertEquals("quality", $obj->getQuality());
    }

    /**
     * Tests setSize()
     *
     * @return void.
     */
    public function testSetSize(): void {

        $obj = new Video();

        $obj->setSize(1);
        $this->assertEquals(1, $obj->getSize());
    }

    /**
     * Tests setUrl()
     *
     * @return void.
     */
    public function testSetUrl(): void {

        $obj = new Video();

        $obj->setUrl("url");
        $this->assertEquals("url", $obj->getUrl());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new Video();

        $obj->setWidth(1);
        $this->assertEquals(1, $obj->getWidth());
    }

    /**
     * Tests __construct()
     *
     * @return void.
     */
    public function test__construct(): void {

        $obj = new Video();

        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getQuality());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getUrl());
        $this->assertNull($obj->getWidth());
    }
}
