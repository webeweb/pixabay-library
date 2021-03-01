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

use InvalidArgumentException;
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
     * Search images resource path.
     *
     * @var string
     */
    const SEARCH_IMAGES_RESOURCE_PATH = "/";

    /**
     * Colors.
     *
     * @var string[]
     */
    private $colors;

    /**
     * Image type.
     *
     * @var string|null
     */
    private $imageType;

    /**
     * Orientation.
     *
     * @var string|null
     */
    private $orientation;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setColors([]);
        $this->setImageType(self::IMAGE_TYPE_ALL);
        $this->setOrientation(self::ORIENTATION_ALL);
    }

    /**
     * Add a color.
     *
     * @param string $color The color.
     * @return SearchImagesRequest Returns this search images request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the color is invalid.
     */
    public function addColor(string $color): SearchImagesRequest {
        if (false === in_array($color, static::enumColor())) {
            throw new InvalidArgumentException(sprintf('The color "%s" is invalid', $color));
        }
        $this->colors[] = $color;
        return $this;
    }

    /**
     * Enumerate category.
     *
     * @return string[] Returns the category enumeration.
     */
    public static function enumCategory(): array {
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
    public static function enumColor(): array {
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
    public static function enumImageType(): array {
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
    public static function enumOrientation(): array {
        return [
            self::ORIENTATION_ALL,
            self::ORIENTATION_HORIZONTAL,
            self::ORIENTATION_VERTICAL,
        ];
    }

    /**
     * Get the colors.
     *
     * @return string[] Returns the colors.
     */
    public function getColors(): array {
        return $this->colors;
    }

    /**
     * Get the image type.
     *
     * @return string|null Returns the image type.
     */
    public function getImageType(): ?string {
        return $this->imageType;
    }

    /**
     * Get the orientation.
     *
     * @return string|null Returns the orientation.
     */
    public function getOrientation(): ?string {
        return $this->orientation;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::SEARCH_IMAGES_RESOURCE_PATH;
    }

    /**
     * Remove a color.
     *
     * @param string $color The color.
     * @return SearchImagesRequest Returns this search images request.
     */
    public function removeColor(string $color): SearchImagesRequest {
        $pos = array_search($color, $this->colors);
        if (false !== $pos) {
            unset($this->colors[$pos]);
        }
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param string[] $colors The colors.
     * @return SearchImagesRequest Returns this search images request.
     */
    protected function setColors(array $colors): SearchImagesRequest {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the image type.
     *
     * @param string|null $imageType The image type.
     * @return SearchImagesRequest Returns this search images request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the image type is invalid.
     */
    public function setImageType(?string $imageType): SearchImagesRequest {
        if (false === in_array($imageType, static::enumImageType())) {
            throw new InvalidArgumentException(sprintf('The image type "%s" is invalid', $imageType));
        }
        $this->imageType = $imageType;
        return $this;
    }

    /**
     * Set the orientation.
     *
     * @param string|null $orientation The orientation.
     * @return SearchImagesRequest Returns this search images request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the orientation is invalid.
     */
    public function setOrientation(?string $orientation): SearchImagesRequest {
        if (false === in_array($orientation, static::enumOrientation())) {
            throw new InvalidArgumentException(sprintf('The orientation "%s" is invalid', $orientation));
        }
        $this->orientation = $orientation;
        return $this;
    }
}
