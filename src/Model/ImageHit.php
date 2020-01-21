<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Model;

/**
 * Image hit.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 */
class ImageHit extends AbstractHit {

    /**
     * Full HD URL.
     *
     * @var string
     */
    private $fullHDURL;

    /**
     * Image height.
     *
     * @var int
     */
    private $imageHeight;

    /**
     * Image size.
     *
     * @var int
     */
    private $imageSize;

    /**
     * Image URL.
     *
     * @var string
     */
    private $imageURL;

    /**
     * Image width.
     *
     * @var int
     */
    private $imageWidth;

    /**
     * Large image URL.
     *
     * @var string
     */
    private $largeImageURL;

    /**
     * Preview height.
     *
     * @var int
     */
    private $previewHeight;

    /**
     * Preview URL.
     *
     * @var string
     */
    private $previewURL;

    /**
     * Preview width.
     *
     * @var int
     */
    private $previewWidth;

    /**
     * Web format height.
     *
     * @var int
     */
    private $webFormatHeight;

    /**
     * Web format URL.
     *
     * @var string
     */
    private $webFormatURL;

    /**
     * Web format width.
     *
     * @var int
     */
    private $webFormatWidth;

    /**
     * Get the full HD URL.
     *
     * @return string Returns the full HD URL.
     */
    public function getFullHDURL() {
        return $this->fullHDURL;
    }

    /**
     * Get the image height.
     *
     * @return int Returns the image height.
     */
    public function getImageHeight() {
        return $this->imageHeight;
    }

    /**
     * Get the image size.
     *
     * @return int Returns the image size.
     */
    public function getImageSize() {
        return $this->imageSize;
    }

    /**
     * Get the image URL.
     *
     * @return string Returns the image URL.
     */
    public function getImageURL() {
        return $this->imageURL;
    }

    /**
     * Get the image width.
     *
     * @return int Returns the image width.
     */
    public function getImageWidth() {
        return $this->imageWidth;
    }

    /**
     * Get the large image URL.
     *
     * @return string Returns the large format URL.
     */
    public function getLargeImageURL() {
        return $this->largeImageURL;
    }

    /**
     * Get the preview height.
     *
     * @return int Returns the preview height.
     */
    public function getPreviewHeight() {
        return $this->previewHeight;
    }

    /**
     * Get the preview URL.
     *
     * @return string Returns the preview.
     */
    public function getPreviewURL() {
        return $this->previewURL;
    }

    /**
     * Get the preview width.
     *
     * @return int Returns the preview width.
     */
    public function getPreviewWidth() {
        return $this->previewWidth;
    }

    /**
     * Get the web format height.
     *
     * @return int Returns the web format height.
     */
    public function getWebFormatHeight() {
        return $this->webFormatHeight;
    }

    /**
     * Get the web format URL.
     *
     * @return string Returns the web format URL.
     */
    public function getWebFormatURL() {
        return $this->webFormatURL;
    }

    /**
     * Get the wbe format width.
     *
     * @return int Returns the web format width.
     */
    public function getWebFormatWidth() {
        return $this->webFormatWidth;
    }

    /**
     * Set the full HD URL.
     *
     * @param string $fullHDURL The full HD URL.
     * @return ImageHit Returns this image hit.
     */
    public function setFullHDURL($fullHDURL) {
        $this->fullHDURL = $fullHDURL;
        return $this;
    }

    /**
     * Set the image height.
     *
     * @param int $imageHeight The image height.
     * @return ImageHit Returns this image hit.
     */
    public function setImageHeight($imageHeight) {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Set the image size.
     *
     * @param int $imageSize The image size.
     * @return ImageHit Returns this image hit.
     */
    public function setImageSize($imageSize) {
        $this->imageSize = $imageSize;
        return $this;
    }

    /**
     * Set the image URL.
     *
     * @param string $imageURL The image URL.
     * @return ImageHit Returns this image hit.
     */
    public function setImageURL($imageURL) {
        $this->imageURL = $imageURL;
        return $this;
    }

    /**
     * Set the image width.
     *
     * @param int $imageWidth The image width.
     * @return ImageHit Returns this image hit.
     */
    public function setImageWidth($imageWidth) {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Set the large image URL.
     *
     * @param string $largeImageURL The large image URL.
     * @return ImageHit Returns this image hit.
     */
    public function setLargeImageURL($largeImageURL) {
        $this->largeImageURL = $largeImageURL;
        return $this;
    }

    /**
     * Set the preview height.
     *
     * @param int $previewHeight The preview height.
     * @return ImageHit Returns this image hit.
     */
    public function setPreviewHeight($previewHeight) {
        $this->previewHeight = $previewHeight;
        return $this;
    }

    /**
     * Set the preview URL.
     *
     * @param string $previewURL The preview URL.
     * @return ImageHit Returns this image hit.
     */
    public function setPreviewURL($previewURL) {
        $this->previewURL = $previewURL;
        return $this;
    }

    /**
     * Set the preview width.
     *
     * @param int $previewWidth The preview width.
     * @return ImageHit Returns this image hit.
     */
    public function setPreviewWidth($previewWidth) {
        $this->previewWidth = $previewWidth;
        return $this;
    }

    /**
     * Set the web format height.
     *
     * @param int $webFormatHeight The web format height.
     * @return ImageHit Returns this image hit.
     */
    public function setWebFormatHeight($webFormatHeight) {
        $this->webFormatHeight = $webFormatHeight;
        return $this;
    }

    /**
     * Set the web format URL.
     *
     * @param string $webFormatURL The web format URL.
     * @return ImageHit Returns this image hit.
     */
    public function setWebFormatURL($webFormatURL) {
        $this->webFormatURL = $webFormatURL;
        return $this;
    }

    /**
     * Set the web format width.
     *
     * @param int $webFormatWidth The web format width.
     * @return ImageHit Returns this image hit.
     */
    public function setWebFormatWidth($webFormatWidth) {
        $this->webFormatWidth = $webFormatWidth;
        return $this;
    }
}
