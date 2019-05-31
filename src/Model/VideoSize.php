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
 * Video size.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 */
class VideoSize {

    /**
     * Height.
     *
     * @var int
     */
    private $height;

    /**
     * Quality.
     *
     * @var string
     */
    private $quality;

    /**
     * Size.
     *
     * @var int
     */
    private $size;

    /**
     * URL.
     *
     * @var string
     */
    private $url;

    /**
     * Width.
     *
     * @var int
     */
    private $width;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the height.
     *
     * @return int Returns the height.
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Get the quality.
     *
     * @return string Returns the quality.
     */
    public function getQuality() {
        return $this->quality;
    }

    /**
     * Get the size.
     *
     * @return int Returns the size.
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Get the URL.
     *
     * @return string Returns the URL.
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Get the width.
     *
     * @return int Returns the width.
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set the height.
     *
     * @param int $height The height.
     * @return VideoSize Returns this video size.
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    /**
     * Get the quality.
     *
     * @param string $quality Returns the quality.
     * @return VideoSize Returns this video size.
     */
    public function setQuality($quality) {
        $this->quality = $quality;
        return $this;
    }

    /**
     * Set the size.
     *
     * @param int $size The size.
     * @return VideoSize Returns this video size.
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * Set the URL.
     *
     * @param string $url The URL.
     * @return VideoSize Returns this video size.
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param int $width The width.
     * @return VideoSize Returns this video size.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }
}
