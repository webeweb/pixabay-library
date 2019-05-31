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
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 * @abstract
 */
abstract class AbstractResponse {

    /**
     * Medias.
     *
     * @var AbstractMedia[]
     */
    private $medias;

    /**
     * Total.
     *
     * @var int
     */
    private $total;

    /**
     * Total hits.
     *
     * @var int
     */
    private $totalHits;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setMedias([]);
    }

    /**
     * Add a media.
     *
     * @param AbstractMedia $media The media.
     * @return AbstractResponse Returns this response.
     */
    protected function addMedia(AbstractMedia $media) {
        $this->medias[] = $media;
        return $this;
    }

    /**
     * Get the medias.
     *
     * @return AbstractMedia[] Returns the medias.
     */
    protected function getMedias() {
        return $this->medias;
    }

    /**
     * Get the total.
     *
     * @return int Returns the total.
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Get the total hits.
     *
     * @return int Returns the total hits.
     */
    public function getTotalHits() {
        return $this->totalHits;
    }

    /**
     * Set the medias.
     *
     * @param AbstractMedia[] $medias The medias.
     * @return AbstractResponse Returns this response.
     */
    protected function setMedias(array $medias) {
        $this->medias = $medias;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param int $total The total.
     * @return AbstractResponse Returns this response.
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the total hits.
     *
     * @param int $totalHits The total hits.
     * @return AbstractResponse Returns this response.
     */
    public function setTotalHits($totalHits) {
        $this->totalHits = $totalHits;
        return $this;
    }

}
