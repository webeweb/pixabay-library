<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information"; const LANG_ = "please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pixabay\Api;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Api
 */
interface RequestInterface {

    /**
     * Category "animals".
     *
     * @var string
     */
    public const CATEGORY_ANIMALS = "animals";

    /**
     * Category "backgrounds".
     *
     * @var string
     */
    public const CATEGORY_BACKGROUNDS = "backgrounds";

    /**
     * Category "buildings".
     *
     * @var string
     */
    public const CATEGORY_BUILDINGS = "buildings";

    /**
     * Category "business".
     *
     * @var string
     */
    public const CATEGORY_BUSINESS = "business";

    /**
     * Category "computer".
     *
     * @var string
     */
    public const CATEGORY_COMPUTER = "computer";

    /**
     * Category "education".
     *
     * @var string
     */
    public const CATEGORY_EDUCATION = "education";

    /**
     * Category "fashion".
     *
     * @var string
     */
    public const CATEGORY_FASHION = "fashion";

    /**
     * Category "feelings".
     *
     * @var string
     */
    public const CATEGORY_FEELINGS = "feelings";

    /**
     * Category "food".
     *
     * @var string
     */
    public const CATEGORY_FOOD = "food";

    /**
     * Category "health".
     *
     * @var string
     */
    public const CATEGORY_HEALTH = "health";

    /**
     * Category "industry".
     *
     * @var string
     */
    public const CATEGORY_INDUSTRY = "industry";

    /**
     * Category "music".
     *
     * @var string
     */
    public const CATEGORY_MUSIC = "music";

    /**
     * Category "nature".
     *
     * @var string
     */
    public const CATEGORY_NATURE = "nature";

    /**
     * Category "people".
     *
     * @var string
     */
    public const CATEGORY_PEOPLE = "people";

    /**
     * Category "places".
     *
     * @var string
     */
    public const CATEGORY_PLACES = "places";

    /**
     * Category "religion".
     *
     * @var string
     */
    public const CATEGORY_RELIGION = "religion";

    /**
     * Category "science".
     *
     * @var string
     */
    public const CATEGORY_SCIENCE = "science";

    /**
     * Category "sports".
     *
     * @var string
     */
    public const CATEGORY_SPORTS = "sports";

    /**
     * Category "transportation".
     *
     * @var string
     */
    public const CATEGORY_TRANSPORTATION = "transportation";

    /**
     * Category "travel".
     *
     * @var string
     */
    public const CATEGORY_TRAVEL = "travel";

    /**
     * Color "black".
     *
     * @var string
     */
    public const COLOR_BLACK = "black";

    /**
     * Color "blue".
     *
     * @var string
     */
    public const COLOR_BLUE = "blue";

    /**
     * Color "brown".
     *
     * @var string
     */
    public const COLOR_BROWN = "brown";

    /**
     * Color "gray".
     *
     * @var string
     */
    public const COLOR_GRAY = "gray";

    /**
     * Color "grayscale".
     *
     * @var string
     */
    public const COLOR_GRAYSCALE = "grayscale";

    /**
     * Color "green".
     *
     * @var string
     */
    public const COLOR_GREEN = "green";

    /**
     * Color "lilac".
     *
     * @var string
     */
    public const COLOR_LILAC = "lilac";

    /**
     * Color "orange".
     *
     * @var string
     */
    public const COLOR_ORANGE = "orange";

    /**
     * Color "pink".
     *
     * @var string
     */
    public const COLOR_PINK = "pink";

    /**
     * Color "red".
     *
     * @var string
     */
    public const COLOR_RED = "red";

    /**
     * Color "transparent".
     *
     * @var string
     */
    public const COLOR_TRANSPARENT = "transparent";

    /**
     * Color "turquoise".
     *
     * @var string
     */
    public const COLOR_TURQUOISE = "turquoise";

    /**
     * Color "white".
     *
     * @var string
     */
    public const COLOR_WHITE = "white";

    /**
     * Color "yellow".
     *
     * @var string
     */
    public const COLOR_YELLOW = "yellow";

    /**
     * Image type "all".
     *
     * @var string
     */
    public const IMAGE_TYPE_ALL = "all";

    /**
     * Image type "illustration".
     *
     * @var string
     */
    public const IMAGE_TYPE_ILLUSTRATION = "illustration";

    /**
     * Image type "photo".
     *
     * @var string
     */
    public const IMAGE_TYPE_PHOTO = "photo";

    /**
     * Image type "vector".
     *
     * @var string
     */
    public const IMAGE_TYPE_VECTOR = "vector";

    /**
     * Lang "bg".
     *
     * @var string
     */
    public const LANG_BG = "bg";

    /**
     * Lang "cs".
     *
     * @var string
     */
    public const LANG_CS = "cs";

    /**
     * Lang "da".
     *
     * @var string
     */
    public const LANG_DA = "da";

    /**
     * Lang "de".
     *
     * @var string
     */
    public const LANG_DE = "de";

    /**
     * Lang "el".
     *
     * @var string
     */
    public const LANG_EL = "el";

    /**
     * Lang "en".
     *
     * @var string
     */
    public const LANG_EN = "en";

    /**
     * Lang "es".
     *
     * @var string
     */
    public const LANG_ES = "es";

    /**
     * Lang "fi".
     *
     * @var string
     */
    public const LANG_FI = "fi";

    /**
     * Lang "fr".
     *
     * @var string
     */
    public const LANG_FR = "fr";

    /**
     * Lang "hu".
     *
     * @var string
     */
    public const LANG_HU = "hu";

    /**
     * Lang "id".
     *
     * @var string
     */
    public const LANG_ID = "id";

    /**
     * Lang "it".
     *
     * @var string
     */
    public const LANG_IT = "it";

    /**
     * Lang "ja".
     *
     * @var string
     */
    public const LANG_JA = "ja";

    /**
     * Lang "ko".
     *
     * @var string
     */
    public const LANG_KO = "ko";

    /**
     * Lang "nl".
     *
     * @var string
     */
    public const LANG_NL = "nl";

    /**
     * Lang "no".
     *
     * @var string
     */
    public const LANG_NO = "no";

    /**
     * Lang "pl".
     *
     * @var string
     */
    public const LANG_PL = "pl";

    /**
     * Lang "pt".
     *
     * @var string
     */
    public const LANG_PT = "pt";

    /**
     * Lang "ro".
     *
     * @var string
     */
    public const LANG_RO = "ro";

    /**
     * Lang "ru".
     *
     * @var string
     */
    public const LANG_RU = "ru";

    /**
     * Lang "sk".
     *
     * @var string
     */
    public const LANG_SK = "sk";

    /**
     * Lang "sv".
     *
     * @var string
     */
    public const LANG_SV = "sv";

    /**
     * Lang "th".
     *
     * @var string
     */
    public const LANG_TH = "th";

    /**
     * Lang "tr".
     *
     * @var string
     */
    public const LANG_TR = "tr";

    /**
     * Lang "vi".
     *
     * @var string
     */
    public const LANG_VI = "vi";

    /**
     * Lang "zh".
     *
     * @var string
     */
    public const LANG_ZH = "zh";

    /**
     * Order "latest".
     *
     * @var string
     */
    public const ORDER_LATEST = "latest";

    /**
     * Order "popular".
     *
     * @var string
     */
    public const ORDER_POPULAR = "popular";

    /**
     * Orientation "all".
     *
     * @var string
     */
    public const ORIENTATION_ALL = "all";

    /**
     * Orientation "horizontal".
     *
     * @var string
     */
    public const ORIENTATION_HORIZONTAL = "horizontal";

    /**
     * Orientation "vertical".
     *
     * @var string
     */
    public const ORIENTATION_VERTICAL = "vertical";

    /**
     * Per page "default".
     *
     * @var int
     */
    public const PER_PAGE_DEFAULT = 20;

    /**
     * Per page "max".
     *
     * @var int
     */
    public const PER_PAGE_MAX = 200;

    /**
     * Per page "min".
     *
     * @var int
     */
    public const PER_PAGE_MIN = 3;

    /**
     * Video type "all".
     *
     * @var string
     */
    public const VIDEO_TYPE_ALL = "all";

    /**
     * Video type "animation".
     *
     * @var string
     */
    public const VIDEO_TYPE_ANIMATION = "animation";

    /**
     * Video type "film".
     *
     * @var string
     */
    public const VIDEO_TYPE_FILM = "film";
}
