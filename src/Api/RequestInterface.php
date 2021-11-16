<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information"; const LANG_ = "please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Api;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Api
 */
interface RequestInterface {

    /**
     * Lang "bg".
     *
     * @var string
     */
    const LANG_BG = "bg";

    /**
     * Lang "cs".
     *
     * @var string
     */
    const LANG_CS = "cs";

    /**
     * Lang "da".
     *
     * @var string
     */
    const LANG_DA = "da";

    /**
     * Lang "de".
     *
     * @var string
     */
    const LANG_DE = "de";

    /**
     * Lang "el".
     *
     * @var string
     */
    const LANG_EL = "el";

    /**
     * Lang "en".
     *
     * @var string
     */
    const LANG_EN = "en";

    /**
     * Lang "es".
     *
     * @var string
     */
    const LANG_ES = "es";

    /**
     * Lang "fi".
     *
     * @var string
     */
    const LANG_FI = "fi";

    /**
     * Lang "fr".
     *
     * @var string
     */
    const LANG_FR = "fr";

    /**
     * Lang "hu".
     *
     * @var string
     */
    const LANG_HU = "hu";

    /**
     * Lang "id".
     *
     * @var string
     */
    const LANG_ID = "id";

    /**
     * Lang "it".
     *
     * @var string
     */
    const LANG_IT = "it";

    /**
     * Lang "ja".
     *
     * @var string
     */
    const LANG_JA = "ja";

    /**
     * Lang "ko".
     *
     * @var string
     */
    const LANG_KO = "ko";

    /**
     * Lang "nl".
     *
     * @var string
     */
    const LANG_NL = "nl";

    /**
     * Lang "no".
     *
     * @var string
     */
    const LANG_NO = "no";

    /**
     * Lang "pl".
     *
     * @var string
     */
    const LANG_PL = "pl";

    /**
     * Lang "pt".
     *
     * @var string
     */
    const LANG_PT = "pt";

    /**
     * Lang "ro".
     *
     * @var string
     */
    const LANG_RO = "ro";

    /**
     * Lang "ru".
     *
     * @var string
     */
    const LANG_RU = "ru";

    /**
     * Lang "sk".
     *
     * @var string
     */
    const LANG_SK = "sk";

    /**
     * Lang "sv".
     *
     * @var string
     */
    const LANG_SV = "sv";

    /**
     * Lang "th".
     *
     * @var string
     */
    const LANG_TH = "th";

    /**
     * Lang "tr".
     *
     * @var string
     */
    const LANG_TR = "tr";

    /**
     * Lang "vi".
     *
     * @var string
     */
    const LANG_VI = "vi";

    /**
     * Lang "zh".
     *
     * @var string
     */
    const LANG_ZH = "zh";

    /**
     * Order "latest".
     *
     * @var string
     */
    const ORDER_LATEST = "latest";

    /**
     * Order "popular".
     *
     * @var string
     */
    const ORDER_POPULAR = "popular";

    /**
     * Per page "default".
     *
     * @var int
     */
    const PER_PAGE_DEFAULT = 20;

    /**
     * Per page "max".
     *
     * @var int
     */
    const PER_PAGE_MAX = 200;

    /**
     * Per page "min".
     *
     * @var int
     */
    const PER_PAGE_MIN = 3;
}
