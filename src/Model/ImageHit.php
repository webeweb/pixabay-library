<?php

declare(strict_types = 1);

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Model;

use WBW\Library\Common\Traits\Strings\StringRawDataTrait;

/**
 * Image hit.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Model
 */
class ImageHit extends AbstractHit {

    use StringRawDataTrait;

    /**
     * Full HD URL.
     *
     * @var string|null
     */
    private $fullHdUrl;

    /**
     * Image height.
     *
     * @var int|null
     */
    private $imageHeight;

    /**
     * Image size.
     *
     * @var int|null
     */
    private $imageSize;

    /**
     * Image URL.
     *
     * @var string|null
     */
    private $imageUrl;

    /**
     * Image width.
     *
     * @var int|null
     */
    private $imageWidth;

    /**
     * Large image URL.
     *
     * @var string|null
     */
    private $largeImageUrl;

    /**
     * Preview height.
     *
     * @var int|null
     */
    private $previewHeight;

    /**
     * Preview URL.
     *
     * @var string|null
     */
    private $previewUrl;

    /**
     * Preview width.
     *
     * @var int|null
     */
    private $previewWidth;

    /**
     * Web format height.
     *
     * @var int|null
     */
    private $webFormatHeight;

    /**
     * Web format URL.
     *
     * @var string|null
     */
    private $webFormatUrl;

    /**
     * Web format width.
     *
     * @var int|null
     */
    private $webFormatWidth;

    /**
     * Get the full HD URL.
     *
     * @return string|null Returns the full HD URL.
     */
    public function getFullHdUrl(): ?string {
        return $this->fullHdUrl;
    }

    /**
     * Get the image height.
     *
     * @return int|null Returns the image height.
     */
    public function getImageHeight(): ?int {
        return $this->imageHeight;
    }

    /**
     * Get the image size.
     *
     * @return int|null Returns the image size.
     */
    public function getImageSize(): ?int {
        return $this->imageSize;
    }

    /**
     * Get the image URL.
     *
     * @return string|null Returns the image URL.
     */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Get the image width.
     *
     * @return int|null Returns the image width.
     */
    public function getImageWidth(): ?int {
        return $this->imageWidth;
    }

    /**
     * Get the large image URL.
     *
     * @return string|null Returns the large format URL.
     */
    public function getLargeImageUrl(): ?string {
        return $this->largeImageUrl;
    }

    /**
     * Get the preview height.
     *
     * @return int|null Returns the preview height.
     */
    public function getPreviewHeight(): ?int {
        return $this->previewHeight;
    }

    /**
     * Get the preview URL.
     *
     * @return string|null Returns the preview.
     */
    public function getPreviewUrl(): ?string {
        return $this->previewUrl;
    }

    /**
     * Get the preview width.
     *
     * @return int|null Returns the preview width.
     */
    public function getPreviewWidth(): ?int {
        return $this->previewWidth;
    }

    /**
     * Get the web format height.
     *
     * @return int|null Returns the web format height.
     */
    public function getWebFormatHeight(): ?int {
        return $this->webFormatHeight;
    }

    /**
     * Get the web format URL.
     *
     * @return string|null Returns the web format URL.
     */
    public function getWebFormatUrl(): ?string {
        return $this->webFormatUrl;
    }

    /**
     * Get the wbe format width.
     *
     * @return int|null Returns the web format width.
     */
    public function getWebFormatWidth(): ?int {
        return $this->webFormatWidth;
    }

    /**
     * Set the full HD URL.
     *
     * @param string|null $fullHdUrl The full HD URL.
     * @return ImageHit Returns this image hit.
     */
    public function setFullHdUrl(?string $fullHdUrl): ImageHit {
        $this->fullHdUrl = $fullHdUrl;
        return $this;
    }

    /**
     * Set the image height.
     *
     * @param int|null $imageHeight The image height.
     * @return ImageHit Returns this image hit.
     */
    public function setImageHeight(?int $imageHeight): ImageHit {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Set the image size.
     *
     * @param int|null $imageSize The image size.
     * @return ImageHit Returns this image hit.
     */
    public function setImageSize(?int $imageSize): ImageHit {
        $this->imageSize = $imageSize;
        return $this;
    }

    /**
     * Set the image URL.
     *
     * @param string|null $imageUrl The image URL.
     * @return ImageHit Returns this image hit.
     */
    public function setImageUrl(?string $imageUrl): ImageHit {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * Set the image width.
     *
     * @param int|null $imageWidth The image width.
     * @return ImageHit Returns this image hit.
     */
    public function setImageWidth(?int $imageWidth): ImageHit {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Set the large image URL.
     *
     * @param string|null $largeImageUrl The large image URL.
     * @return ImageHit Returns this image hit.
     */
    public function setLargeImageUrl(?string $largeImageUrl): ImageHit {
        $this->largeImageUrl = $largeImageUrl;
        return $this;
    }

    /**
     * Set the preview height.
     *
     * @param int|null $previewHeight The preview height.
     * @return ImageHit Returns this image hit.
     */
    public function setPreviewHeight(?int $previewHeight): ImageHit {
        $this->previewHeight = $previewHeight;
        return $this;
    }

    /**
     * Set the preview URL.
     *
     * @param string|null $previewUrl The preview URL.
     * @return ImageHit Returns this image hit.
     */
    public function setPreviewUrl(?string $previewUrl): ImageHit {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * Set the preview width.
     *
     * @param int|null $previewWidth The preview width.
     * @return ImageHit Returns this image hit.
     */
    public function setPreviewWidth(?int $previewWidth): ImageHit {
        $this->previewWidth = $previewWidth;
        return $this;
    }

    /**
     * Set the web format height.
     *
     * @param int|null $webFormatHeight The web format height.
     * @return ImageHit Returns this image hit.
     */
    public function setWebFormatHeight(?int $webFormatHeight): ImageHit {
        $this->webFormatHeight = $webFormatHeight;
        return $this;
    }

    /**
     * Set the web format URL.
     *
     * @param string|null $webFormatUrl The web format URL.
     * @return ImageHit Returns this image hit.
     */
    public function setWebFormatUrl(?string $webFormatUrl): ImageHit {
        $this->webFormatUrl = $webFormatUrl;
        return $this;
    }

    /**
     * Set the web format width.
     *
     * @param int|null $webFormatWidth The web format width.
     * @return ImageHit Returns this image hit.
     */
    public function setWebFormatWidth(?int $webFormatWidth): ImageHit {
        $this->webFormatWidth = $webFormatWidth;
        return $this;
    }
}
