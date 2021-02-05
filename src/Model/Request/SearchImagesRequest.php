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
        $this->setImageType(static::IMAGE_TYPE_ALL);
        $this->setOrientation(static::ORIENTATION_ALL);
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
            static::CATEGORY_ANIMALS,
            static::CATEGORY_BACKGROUNDS,
            static::CATEGORY_BUILDINGS,
            static::CATEGORY_BUSINESS,
            static::CATEGORY_COMPUTER,
            static::CATEGORY_EDUCATION,
            static::CATEGORY_FASHION,
            static::CATEGORY_FEELINGS,
            static::CATEGORY_FOOD,
            static::CATEGORY_HEALTH,
            static::CATEGORY_INDUSTRY,
            static::CATEGORY_MUSIC,
            static::CATEGORY_NATURE,
            static::CATEGORY_PEOPLE,
            static::CATEGORY_PLACES,
            static::CATEGORY_RELIGION,
            static::CATEGORY_SCIENCE,
            static::CATEGORY_SPORTS,
            static::CATEGORY_TRANSPORTATION,
            static::CATEGORY_TRAVEL,
        ];
    }

    /**
     * Enumerate color.
     *
     * @return string[] Returns the color enumeration.
     */
    public static function enumColor(): array {
        return [
            static::COLOR_BLACK,
            static::COLOR_BLUE,
            static::COLOR_BROWN,
            static::COLOR_GRAY,
            static::COLOR_GRAYSCALE,
            static::COLOR_GREEN,
            static::COLOR_LILAC,
            static::COLOR_ORANGE,
            static::COLOR_PINK,
            static::COLOR_RED,
            static::COLOR_TRANSPARENT,
            static::COLOR_TURQUOISE,
            static::COLOR_YELLOW,
            static::COLOR_WHITE,
        ];
    }

    /**
     * Enumerate image type.
     *
     * @return string[] Returns the image type enumeration.
     */
    public static function enumImageType(): array {
        return [
            static::IMAGE_TYPE_ALL,
            static::IMAGE_TYPE_ILLUSTRATION,
            static::IMAGE_TYPE_PHOTO,
            static::IMAGE_TYPE_VECTOR,
        ];
    }

    /**
     * Enumerate orientation.
     *
     * @return string[] Returns the orientation enumeration.
     */
    public static function enumOrientation(): array {
        return [
            static::ORIENTATION_ALL,
            static::ORIENTATION_HORIZONTAL,
            static::ORIENTATION_VERTICAL,
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
        return static::SEARCH_IMAGES_RESOURCE_PATH;
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
