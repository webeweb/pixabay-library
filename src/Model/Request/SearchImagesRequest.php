<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Model\Request;

use WBW\Library\Pixabay\API\SearchImagesRequestInterface;
use WBW\Library\Pixabay\Model\AbstractRequest;

/**
 * Search images request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model\Request
 */
class SearchImagesRequest extends AbstractRequest implements SearchImagesRequestInterface {

    /**
     * Colors.
     *
     * @var string
     */
    private $colors;

    /**
     * Image type.
     *
     * @var string
     */
    private $imageType;

    /**
     * Orientation.
     *
     * @var string
     */
    private $orientation;

    /**
     * Enumerate image type.
     *
     * @return string[] Returns the image type enumeration.
     */
    public static function enumImageType() {
        return [
            self::IMAGE_TYPE_ALL,
            self::IMAGE_TYPE_ILLUSTRATION,
            self::IMAGE_TYPE_PHOTO,
            self::IMAGE_TYPE_VECTOR,
        ];
    }

    /**
     * Get the colors.
     *
     * @return string Returns the colors.
     */
    public function getColors() {
        return $this->colors;
    }

    /**
     * Get the image type.
     *
     * @return string Returns the image type.
     */
    public function getImageType() {
        return $this->imageType;
    }

    /**
     * Get the orientation.
     *
     * @return string Returns the orientation.
     */
    public function getOrientation() {
        return $this->orientation;
    }

    /**
     * Set the colors.
     *
     * @param string $colors The colors.
     * @return SearchImagesRequest Returns this search images request.
     */
    public function setColors($colors) {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the image type.
     *
     * @param string $imageType The image type.
     * @return SearchImagesRequest Returns this search images request.
     */
    public function setImageType($imageType) {
        $this->imageType = $imageType;
        return $this;
    }

    /**
     * Set the orientation.
     *
     * @param string $orientation The orientation.
     * @return SearchImagesRequest Returns this search images request.
     */
    public function setOrientation($orientation) {
        $this->orientation = $orientation;
        return $this;
    }
}
