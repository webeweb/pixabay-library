<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Model\Response;

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Model\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model\Response
 */
class SearchImagesResponseTest extends AbstractTestCase {

    /**
     * Tests the addImageHit() method.
     *
     * @return void
     */
    public function testAddImageHit() {

        // Set an Image hit mock.
        $imageHit = new ImageHit();

        $obj = new SearchImagesResponse();

        $obj->addImageHit($imageHit);
        $this->assertCount(1, $obj->getImageHits());
        $this->assertSame($imageHit, $obj->getImageHits()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new SearchImagesResponse();

        $this->assertCount(0, $obj->getImageHits());
    }
}
