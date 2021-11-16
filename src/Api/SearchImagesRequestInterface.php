<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Api;

/**
 * Search images request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Api
 */
interface SearchImagesRequestInterface extends RequestInterface {

    /**
     * Category "animals".
     *
     * @var string
     */
    const CATEGORY_ANIMALS = "animals";

    /**
     * Category "backgrounds".
     *
     * @var string
     */
    const CATEGORY_BACKGROUNDS = "backgrounds";

    /**
     * Category "buildings".
     *
     * @var string
     */
    const CATEGORY_BUILDINGS = "buildings";

    /**
     * Category "business".
     *
     * @var string
     */
    const CATEGORY_BUSINESS = "business";

    /**
     * Category "computer".
     *
     * @var string
     */
    const CATEGORY_COMPUTER = "computer";

    /**
     * Category "education".
     *
     * @var string
     */
    const CATEGORY_EDUCATION = "education";

    /**
     * Category "fashion".
     *
     * @var string
     */
    const CATEGORY_FASHION = "fashion";

    /**
     * Category "feelings".
     *
     * @var string
     */
    const CATEGORY_FEELINGS = "feelings";

    /**
     * Category "food".
     *
     * @var string
     */
    const CATEGORY_FOOD = "food";

    /**
     * Category "health".
     *
     * @var string
     */
    const CATEGORY_HEALTH = "health";

    /**
     * Category "industry".
     *
     * @var string
     */
    const CATEGORY_INDUSTRY = "industry";

    /**
     * Category "music".
     *
     * @var string
     */
    const CATEGORY_MUSIC = "music";

    /**
     * Category "nature".
     *
     * @var string
     */
    const CATEGORY_NATURE = "nature";

    /**
     * Category "people".
     *
     * @var string
     */
    const CATEGORY_PEOPLE = "people";

    /**
     * Category "places".
     *
     * @var string
     */
    const CATEGORY_PLACES = "places";

    /**
     * Category "religion".
     *
     * @var string
     */
    const CATEGORY_RELIGION = "religion";

    /**
     * Category "science".
     *
     * @var string
     */
    const CATEGORY_SCIENCE = "science";

    /**
     * Category "sports".
     *
     * @var string
     */
    const CATEGORY_SPORTS = "sports";

    /**
     * Category "transportation".
     *
     * @var string
     */
    const CATEGORY_TRANSPORTATION = "transportation";

    /**
     * Category "travel".
     *
     * @var string
     */
    const CATEGORY_TRAVEL = "travel";

    /**
     * Color "black".
     *
     * @var string
     */
    const COLOR_BLACK = "black";

    /**
     * Color "blue".
     *
     * @var string
     */
    const COLOR_BLUE = "blue";

    /**
     * Color "brown".
     *
     * @var string
     */
    const COLOR_BROWN = "brown";

    /**
     * Color "gray".
     *
     * @var string
     */
    const COLOR_GRAY = "gray";

    /**
     * Color "grayscale".
     *
     * @var string
     */
    const COLOR_GRAYSCALE = "grayscale";

    /**
     * Color "green".
     *
     * @var string
     */
    const COLOR_GREEN = "green";

    /**
     * Color "lilac".
     *
     * @var string
     */
    const COLOR_LILAC = "lilac";

    /**
     * Color "orange".
     *
     * @var string
     */
    const COLOR_ORANGE = "orange";

    /**
     * Color "pink".
     *
     * @var string
     */
    const COLOR_PINK = "pink";

    /**
     * Color "red".
     *
     * @var string
     */
    const COLOR_RED = "red";

    /**
     * Color "transparent".
     *
     * @var string
     */
    const COLOR_TRANSPARENT = "transparent";

    /**
     * Color "turquoise".
     *
     * @var string
     */
    const COLOR_TURQUOISE = "turquoise";

    /**
     * Color "white".
     *
     * @var string
     */
    const COLOR_WHITE = "white";

    /**
     * Color "yellow".
     *
     * @var string
     */
    const COLOR_YELLOW = "yellow";

    /**
     * Image type "all".
     *
     * @var string
     */
    const IMAGE_TYPE_ALL = "all";

    /**
     * Image type "illustration".
     *
     * @var string
     */
    const IMAGE_TYPE_ILLUSTRATION = "illustration";

    /**
     * Image type "photo".
     *
     * @var string
     */
    const IMAGE_TYPE_PHOTO = "photo";

    /**
     * Image type "vector".
     *
     * @var string
     */
    const IMAGE_TYPE_VECTOR = "vector";

    /**
     * Orientation "all".
     *
     * @var string
     */
    const ORIENTATION_ALL = "all";

    /**
     * Orientation "horizontal".
     *
     * @var string
     */
    const ORIENTATION_HORIZONTAL = "horizontal";

    /**
     * Orientation "vertical".
     *
     * @var string
     */
    const ORIENTATION_VERTICAL = "vertical";
}
