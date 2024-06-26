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

namespace WBW\Library\Pixabay\Tests\Response;

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Response\AbstractResponse;
use WBW\Library\Pixabay\Response\SearchImagesResponse;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Response
 */
class SearchImagesResponseTest extends AbstractTestCase {

    /**
     * Test addImageHit()
     *
     * @return void
     */
    public function testAddImageHit(): void {

        // Set an Image hit mock.
        $imageHit = new ImageHit();

        $obj = new SearchImagesResponse();

        $obj->addImageHit($imageHit);
        $this->assertCount(1, $obj->getImageHits());
        $this->assertSame($imageHit, $obj->getImageHits()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SearchImagesResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertCount(0, $obj->getImageHits());
    }
}
