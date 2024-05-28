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

namespace WBW\Library\Pixabay\Model;

use WBW\Library\Common\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Common\Traits\Integers\IntegerSizeTrait;
use WBW\Library\Common\Traits\Integers\IntegerWidthTrait;
use WBW\Library\Common\Traits\Strings\StringRawDataTrait;
use WBW\Library\Common\Traits\Strings\StringUrlTrait;

/**
 * Video.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Model
 */
class Video {

    use IntegerHeightTrait;
    use IntegerSizeTrait;
    use IntegerWidthTrait;
    use StringRawDataTrait;
    use StringUrlTrait;

    /**
     * Quality.
     *
     * @var string|null
     */
    private $quality;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the quality.
     *
     * @return string|null Returns the quality.
     */
    public function getQuality(): ?string {
        return $this->quality;
    }

    /**
     * Get the quality.
     *
     * @param string|null $quality Returns the quality.
     * @return Video Returns this video.
     */
    public function setQuality(?string $quality): Video {
        $this->quality = $quality;
        return $this;
    }
}
