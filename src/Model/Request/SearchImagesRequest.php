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

use UnexpectedValueException;
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
     * Enumerate category.
     *
     * @return string[] Returns the category enumeration.
     */
    public static function enumCategory() {
        return [
            self::CATEGORY_ANIMALS,
            self::CATEGORY_BACKGROUNDS,
            self::CATEGORY_BUILDINGS,
            self::CATEGORY_BUSINESS,
            self::CATEGORY_COMPUTER,
            self::CATEGORY_EDUCATION,
            self::CATEGORY_FASHION,
            self::CATEGORY_FEELINGS,
            self::CATEGORY_FOOD,
            self::CATEGORY_HEALTH,
            self::CATEGORY_INDUSTRY,
            self::CATEGORY_MUSIC,
            self::CATEGORY_NATURE,
            self::CATEGORY_PEOPLE,
            self::CATEGORY_PLACES,
            self::CATEGORY_RELIGION,
            self::CATEGORY_SCIENCE,
            self::CATEGORY_SPORTS,
            self::CATEGORY_TRANSPORTATION,
            self::CATEGORY_TRAVEL,
        ];
    }

    /**
     * Enumerate color.
     *
     * @return string[] Returns the color enumeration.
     */
    public static function enumColor() {
        return [
            self::COLOR_BLACK,
            self::COLOR_BLUE,
            self::COLOR_BROWN,
            self::COLOR_GRAY,
            self::COLOR_GRAYSCALE,
            self::COLOR_GREEN,
            self::COLOR_LILAC,
            self::COLOR_ORANGE,
            self::COLOR_PINK,
            self::COLOR_RED,
            self::COLOR_TRANSPARENT,
            self::COLOR_TURQUOISE,
            self::COLOR_YELLOW,
            self::COLOR_WHITE,
        ];
    }

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
     * Enumerate orientation.
     *
     * @return string[] Returns the orientation enumeration.
     */
    public static function enumOrientation() {
        return [
            self::ORIENTATION_ALL,
            self::ORIENTATION_HORIZONTAL,
            self::ORIENTATION_VERTICAL,
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
     * @throws UnexpectedValueException Throws an unexpected value exception if the image type is invalid.
     */
    public function setImageType($imageType) {
        if (false === in_array($imageType, static::enumImageType())) {
            throw new UnexpectedValueException(sprintf("The image type \"%s\" is invalid", $imageType));
        }
        $this->imageType = $imageType;
        return $this;
    }

    /**
     * Set the orientation.
     *
     * @param string $orientation The orientation.
     * @return SearchImagesRequest Returns this search images request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the orientation is invalid.
     */
    public function setOrientation($orientation) {
        if (false === in_array($orientation, static::enumOrientation())) {
            throw new UnexpectedValueException(sprintf("The orientation \"%s\" is invalid", $orientation));
        }
        $this->orientation = $orientation;
        return $this;
    }
}
