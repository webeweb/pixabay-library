<?php

declare(strict_types = 1);

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Model;

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Image hit test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class ImageHitTest extends AbstractTestCase {

    /**
     * Test setFullHDURL()
     *
     * @return void
     */
    public function testSetFullHDURL(): void {

        $obj = new ImageHit();

        $obj->setFullHdUrl("fullHDURL");
        $this->assertEquals("fullHDURL", $obj->getFullHdUrl());
    }

    /**
     * Test setImageHeight()
     *
     * @return void
     */
    public function testSetImageHeight(): void {

        $obj = new ImageHit();

        $obj->setImageHeight(1);
        $this->assertEquals(1, $obj->getImageHeight());
    }

    /**
     * Test setImageSize()
     *
     * @return void
     */
    public function testSetImageSize(): void {

        $obj = new ImageHit();

        $obj->setImageSize(1);
        $this->assertEquals(1, $obj->getImageSize());
    }

    /**
     * Test setImageURL()
     *
     * @return void
     */
    public function testSetImageURL(): void {

        $obj = new ImageHit();

        $obj->setImageUrl("imageURL");
        $this->assertEquals("imageURL", $obj->getImageUrl());
    }

    /**
     * Test setImageWidth()
     *
     * @return void
     */
    public function testSetImageWidth(): void {

        $obj = new ImageHit();

        $obj->setImageWidth(1);
        $this->assertEquals(1, $obj->getImageWidth());
    }

    /**
     * Test setLargeImageURL()
     *
     * @return void
     */
    public function testSetLargeImageURL(): void {

        $obj = new ImageHit();

        $obj->setLargeImageUrl("largeImageURL");
        $this->assertEquals("largeImageURL", $obj->getLargeImageUrl());
    }

    /**
     * Test setPreviewHeight()
     *
     * @return void
     */
    public function testSetPreviewHeight(): void {

        $obj = new ImageHit();

        $obj->setPreviewHeight(1);
        $this->assertEquals(1, $obj->getPreviewHeight());
    }

    /**
     * Test setPreviewURL()
     *
     * @return void
     */
    public function testSetPreviewURL(): void {

        $obj = new ImageHit();

        $obj->setPreviewUrl("previewURL");
        $this->assertEquals("previewURL", $obj->getPreviewUrl());
    }

    /**
     * Test setPreviewWidth()
     *
     * @return void
     */
    public function testSetPreviewWidth(): void {

        $obj = new ImageHit();

        $obj->setPreviewWidth(1);
        $this->assertEquals(1, $obj->getPreviewWidth());
    }

    /**
     * Test setWebFormatHeight()
     *
     * @return void
     */
    public function testSetWebFormatHeight(): void {

        $obj = new ImageHit();

        $obj->setWebFormatHeight(1);
        $this->assertEquals(1, $obj->getWebFormatHeight());
    }

    /**
     * Test setWebFormatURL()
     *
     * @return void
     */
    public function testSetWebFormatURL(): void {

        $obj = new ImageHit();

        $obj->setWebFormatUrl("webFormatURL");
        $this->assertEquals("webFormatURL", $obj->getWebFormatUrl());
    }

    /**
     * Test setWebFormatWidth()
     *
     * @return void
     */
    public function testSetWebFormatWidth(): void {

        $obj = new ImageHit();

        $obj->setWebFormatWidth(1);
        $this->assertEquals(1, $obj->getWebFormatWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ImageHit();

        $this->assertNull($obj->getFullHdUrl());
        $this->assertNull($obj->getImageHeight());
        $this->assertNull($obj->getImageSize());
        $this->assertNull($obj->getImageUrl());
        $this->assertNull($obj->getImageWidth());
        $this->assertNull($obj->getLargeImageUrl());
        $this->assertNull($obj->getPreviewHeight());
        $this->assertNull($obj->getPreviewUrl());
        $this->assertNull($obj->getPreviewWidth());
        $this->assertNull($obj->getRawData());
        $this->assertNull($obj->getWebFormatHeight());
        $this->assertNull($obj->getWebFormatUrl());
        $this->assertNull($obj->getWebFormatWidth());
    }
}
