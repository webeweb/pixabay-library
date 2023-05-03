<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information", please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Api;

use WBW\Library\Pixabay\Api\RequestInterface;
use WBW\Library\Pixabay\Tests\AbstractTestCase;

/**
 * Request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Api
 */
class RequestInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("cs", RequestInterface::LANG_CS);
        $this->assertEquals("da", RequestInterface::LANG_DA);
        $this->assertEquals("de", RequestInterface::LANG_DE);
        $this->assertEquals("en", RequestInterface::LANG_EN);
        $this->assertEquals("es", RequestInterface::LANG_ES);
        $this->assertEquals("fr", RequestInterface::LANG_FR);
        $this->assertEquals("id", RequestInterface::LANG_ID);
        $this->assertEquals("it", RequestInterface::LANG_IT);
        $this->assertEquals("hu", RequestInterface::LANG_HU);
        $this->assertEquals("nl", RequestInterface::LANG_NL);
        $this->assertEquals("no", RequestInterface::LANG_NO);
        $this->assertEquals("pl", RequestInterface::LANG_PL);
        $this->assertEquals("pt", RequestInterface::LANG_PT);
        $this->assertEquals("ro", RequestInterface::LANG_RO);
        $this->assertEquals("sk", RequestInterface::LANG_SK);
        $this->assertEquals("fi", RequestInterface::LANG_FI);
        $this->assertEquals("sv", RequestInterface::LANG_SV);
        $this->assertEquals("tr", RequestInterface::LANG_TR);
        $this->assertEquals("vi", RequestInterface::LANG_VI);
        $this->assertEquals("th", RequestInterface::LANG_TH);
        $this->assertEquals("bg", RequestInterface::LANG_BG);
        $this->assertEquals("ru", RequestInterface::LANG_RU);
        $this->assertEquals("el", RequestInterface::LANG_EL);
        $this->assertEquals("ja", RequestInterface::LANG_JA);
        $this->assertEquals("ko", RequestInterface::LANG_KO);
        $this->assertEquals("zh", RequestInterface::LANG_ZH);

        $this->assertEquals("all", RequestInterface::IMAGE_TYPE_ALL);
        $this->assertEquals("illustration", RequestInterface::IMAGE_TYPE_ILLUSTRATION);
        $this->assertEquals("photo", RequestInterface::IMAGE_TYPE_PHOTO);
        $this->assertEquals("vector", RequestInterface::IMAGE_TYPE_VECTOR);

        $this->assertEquals("all", RequestInterface::VIDEO_TYPE_ALL);
        $this->assertEquals("animation", RequestInterface::VIDEO_TYPE_ANIMATION);
        $this->assertEquals("film", RequestInterface::VIDEO_TYPE_FILM);

        $this->assertEquals("horizontal", RequestInterface::ORIENTATION_HORIZONTAL);
        $this->assertEquals("vertical", RequestInterface::ORIENTATION_VERTICAL);
        $this->assertEquals("all", RequestInterface::ORIENTATION_ALL);

        $this->assertEquals("backgrounds", RequestInterface::CATEGORY_BACKGROUNDS);
        $this->assertEquals("fashion", RequestInterface::CATEGORY_FASHION);
        $this->assertEquals("nature", RequestInterface::CATEGORY_NATURE);
        $this->assertEquals("science", RequestInterface::CATEGORY_SCIENCE);
        $this->assertEquals("education", RequestInterface::CATEGORY_EDUCATION);
        $this->assertEquals("feelings", RequestInterface::CATEGORY_FEELINGS);
        $this->assertEquals("health", RequestInterface::CATEGORY_HEALTH);
        $this->assertEquals("people", RequestInterface::CATEGORY_PEOPLE);
        $this->assertEquals("religion", RequestInterface::CATEGORY_RELIGION);
        $this->assertEquals("places", RequestInterface::CATEGORY_PLACES);
        $this->assertEquals("animals", RequestInterface::CATEGORY_ANIMALS);
        $this->assertEquals("industry", RequestInterface::CATEGORY_INDUSTRY);
        $this->assertEquals("computer", RequestInterface::CATEGORY_COMPUTER);
        $this->assertEquals("food", RequestInterface::CATEGORY_FOOD);
        $this->assertEquals("sports", RequestInterface::CATEGORY_SPORTS);
        $this->assertEquals("transportation", RequestInterface::CATEGORY_TRANSPORTATION);
        $this->assertEquals("travel", RequestInterface::CATEGORY_TRAVEL);
        $this->assertEquals("buildings", RequestInterface::CATEGORY_BUILDINGS);
        $this->assertEquals("business", RequestInterface::CATEGORY_BUSINESS);
        $this->assertEquals("music", RequestInterface::CATEGORY_MUSIC);

        $this->assertEquals("black", RequestInterface::COLOR_BLACK);
        $this->assertEquals("blue", RequestInterface::COLOR_BLUE);
        $this->assertEquals("brown", RequestInterface::COLOR_BROWN);
        $this->assertEquals("gray", RequestInterface::COLOR_GRAY);
        $this->assertEquals("grayscale", RequestInterface::COLOR_GRAYSCALE);
        $this->assertEquals("green", RequestInterface::COLOR_GREEN);
        $this->assertEquals("lilac", RequestInterface::COLOR_LILAC);
        $this->assertEquals("orange", RequestInterface::COLOR_ORANGE);
        $this->assertEquals("pink", RequestInterface::COLOR_PINK);
        $this->assertEquals("red", RequestInterface::COLOR_RED);
        $this->assertEquals("transparent", RequestInterface::COLOR_TRANSPARENT);
        $this->assertEquals("turquoise", RequestInterface::COLOR_TURQUOISE);
        $this->assertEquals("yellow", RequestInterface::COLOR_YELLOW);
        $this->assertEquals("white", RequestInterface::COLOR_WHITE);

        $this->assertEquals("latest", RequestInterface::ORDER_LATEST);
        $this->assertEquals("popular", RequestInterface::ORDER_POPULAR);

        $this->assertEquals(20, RequestInterface::PER_PAGE_DEFAULT);
        $this->assertEquals(200, RequestInterface::PER_PAGE_MAX);
        $this->assertEquals(3, RequestInterface::PER_PAGE_MIN);
    }

}
