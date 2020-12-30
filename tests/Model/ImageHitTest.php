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

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Image hit test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class ImageHitTest extends AbstractTestCase {

    /**
     * Tests the setFullHDURL() method.
     *
     * @return void
     */
    public function testSetFullHDURL(): void {

        $obj = new ImageHit();

        $obj->setFullHDURL("fullHDURL");
        $this->assertEquals("fullHDURL", $obj->getFullHDURL());
    }

    /**
     * Tests the setImageHeight() method.
     *
     * @return void
     */
    public function testSetImageHeight(): void {

        $obj = new ImageHit();

        $obj->setImageHeight(1);
        $this->assertEquals(1, $obj->getImageHeight());
    }

    /**
     * Tests the setImageSize() method.
     *
     * @return void
     */
    public function testSetImageSize(): void {

        $obj = new ImageHit();

        $obj->setImageSize(1);
        $this->assertEquals(1, $obj->getImageSize());
    }

    /**
     * Tests the setImageURL() method.
     *
     * @return void
     */
    public function testSetImageURL(): void {

        $obj = new ImageHit();

        $obj->setImageURL("imageURL");
        $this->assertEquals("imageURL", $obj->getImageURL());
    }

    /**
     * Tests the setImageWidth() method.
     *
     * @return void
     */
    public function testSetImageWidth(): void {

        $obj = new ImageHit();

        $obj->setImageWidth(1);
        $this->assertEquals(1, $obj->getImageWidth());
    }

    /**
     * Tests the setLargeImageURL() method.
     *
     * @return void
     */
    public function testSetLargeImageURL(): void {

        $obj = new ImageHit();

        $obj->setLargeImageURL("largeImageURL");
        $this->assertEquals("largeImageURL", $obj->getLargeImageURL());
    }

    /**
     * Tests the setPreviewHeight() method.
     *
     * @return void
     */
    public function testSetPreviewHeight(): void {

        $obj = new ImageHit();

        $obj->setPreviewHeight(1);
        $this->assertEquals(1, $obj->getPreviewHeight());
    }

    /**
     * Tests the setPreviewURL() method.
     *
     * @return void
     */
    public function testSetPreviewURL(): void {

        $obj = new ImageHit();

        $obj->setPreviewURL("previewURL");
        $this->assertEquals("previewURL", $obj->getPreviewURL());
    }

    /**
     * Tests the setPreviewWidth() method.
     *
     * @return void
     */
    public function testSetPreviewWidth(): void {

        $obj = new ImageHit();

        $obj->setPreviewWidth(1);
        $this->assertEquals(1, $obj->getPreviewWidth());
    }

    /**
     * Tests the setWebFormatHeight() method.
     *
     * @return void
     */
    public function testSetWebFormatHeight(): void {

        $obj = new ImageHit();

        $obj->setWebFormatHeight(1);
        $this->assertEquals(1, $obj->getWebFormatHeight());
    }

    /**
     * Tests the setWebFormatURL() method.
     *
     * @return void
     */
    public function testSetWebFormatURL(): void {

        $obj = new ImageHit();

        $obj->setWebFormatURL("webFormatURL");
        $this->assertEquals("webFormatURL", $obj->getWebFormatURL());
    }

    /**
     * Tests the setWebFormatWidth() method.
     *
     * @return void
     */
    public function testSetWebFormatWidth(): void {

        $obj = new ImageHit();

        $obj->setWebFormatWidth(1);
        $this->assertEquals(1, $obj->getWebFormatWidth());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ImageHit();

        $this->assertNull($obj->getFullHDURL());
        $this->assertNull($obj->getImageHeight());
        $this->assertNull($obj->getImageSize());
        $this->assertNull($obj->getImageURL());
        $this->assertNull($obj->getImageWidth());
        $this->assertNull($obj->getLargeImageURL());
        $this->assertNull($obj->getPreviewHeight());
        $this->assertNull($obj->getPreviewURL());
        $this->assertNull($obj->getPreviewWidth());
        $this->assertNull($obj->getWebFormatHeight());
        $this->assertNull($obj->getWebFormatURL());
        $this->assertNull($obj->getWebFormatWidth());
    }
}
