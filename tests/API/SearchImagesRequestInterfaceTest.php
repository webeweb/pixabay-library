<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\API;

use WBW\Library\Pixabay\API\SearchImagesRequestInterface;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Search images request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\API
 */
class SearchImagesRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals("animals", SearchImagesRequestInterface::CATEGORY_ANIMALS);
        $this->assertEquals("backgrounds", SearchImagesRequestInterface::CATEGORY_BACKGROUNDS);
        $this->assertEquals("business", SearchImagesRequestInterface::CATEGORY_BUSINESS);
        $this->assertEquals("buildings", SearchImagesRequestInterface::CATEGORY_BUILDINGS);
        $this->assertEquals("computer", SearchImagesRequestInterface::CATEGORY_COMPUTER);
        $this->assertEquals("education", SearchImagesRequestInterface::CATEGORY_EDUCATION);
        $this->assertEquals("fashion", SearchImagesRequestInterface::CATEGORY_FASHION);
        $this->assertEquals("feelings", SearchImagesRequestInterface::CATEGORY_FEELINGS);
        $this->assertEquals("food", SearchImagesRequestInterface::CATEGORY_FOOD);
        $this->assertEquals("health", SearchImagesRequestInterface::CATEGORY_HEALTH);
        $this->assertEquals("industry", SearchImagesRequestInterface::CATEGORY_INDUSTRY);
        $this->assertEquals("music", SearchImagesRequestInterface::CATEGORY_MUSIC);
        $this->assertEquals("nature", SearchImagesRequestInterface::CATEGORY_NATURE);
        $this->assertEquals("people", SearchImagesRequestInterface::CATEGORY_PEOPLE);
        $this->assertEquals("places", SearchImagesRequestInterface::CATEGORY_PLACES);
        $this->assertEquals("religion", SearchImagesRequestInterface::CATEGORY_RELIGION);
        $this->assertEquals("science", SearchImagesRequestInterface::CATEGORY_SCIENCE);
        $this->assertEquals("sports", SearchImagesRequestInterface::CATEGORY_SPORTS);
        $this->assertEquals("transportation", SearchImagesRequestInterface::CATEGORY_TRANSPORTATION);
        $this->assertEquals("travel", SearchImagesRequestInterface::CATEGORY_TRAVEL);

        $this->assertEquals("black", SearchImagesRequestInterface::COLOR_BLACK);
        $this->assertEquals("blue", SearchImagesRequestInterface::COLOR_BLUE);
        $this->assertEquals("brown", SearchImagesRequestInterface::COLOR_BROWN);
        $this->assertEquals("gray", SearchImagesRequestInterface::COLOR_GRAY);
        $this->assertEquals("grayscale", SearchImagesRequestInterface::COLOR_GRAYSCALE);
        $this->assertEquals("green", SearchImagesRequestInterface::COLOR_GREEN);
        $this->assertEquals("lilac", SearchImagesRequestInterface::COLOR_LILAC);
        $this->assertEquals("orange", SearchImagesRequestInterface::COLOR_ORANGE);
        $this->assertEquals("pink", SearchImagesRequestInterface::COLOR_PINK);
        $this->assertEquals("red", SearchImagesRequestInterface::COLOR_RED);
        $this->assertEquals("transparent", SearchImagesRequestInterface::COLOR_TRANSPARENT);
        $this->assertEquals("turquoise", SearchImagesRequestInterface::COLOR_TURQUOISE);
        $this->assertEquals("yellow", SearchImagesRequestInterface::COLOR_YELLOW);
        $this->assertEquals("white", SearchImagesRequestInterface::COLOR_WHITE);

        $this->assertEquals("all", SearchImagesRequestInterface::IMAGE_TYPE_ALL);
        $this->assertEquals("illustration", SearchImagesRequestInterface::IMAGE_TYPE_ILLUSTRATION);
        $this->assertEquals("photo", SearchImagesRequestInterface::IMAGE_TYPE_PHOTO);
        $this->assertEquals("vector", SearchImagesRequestInterface::IMAGE_TYPE_VECTOR);
    }
}
