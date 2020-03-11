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

    use RateLimitTrait;

    /**
     * Hits.
     *
     * @var AbstractHit[]
     */
    private $hits;

    /**
     * Raw response.
     *
     * @var string
     */
    private $rawResponse;

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
        $this->setHits([]);
    }

    /**
     * Add an hit.
     *
     * @param AbstractHit $hit The hit.
     * @return AbstractResponse Returns this response.
     */
    protected function addHit(AbstractHit $hit) {
        $this->hits[] = $hit;
        return $this;
    }

    /**
     * Get the hits.
     *
     * @return AbstractHit[] Returns the hits.
     */
    protected function getHits() {
        return $this->hits;
    }

    /**
     * Get the raw response.
     *
     * @return string Returns the raw response.
     */
    public function getRawResponse() {
        return $this->rawResponse;
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
     * Set the hits.
     *
     * @param AbstractHit[] $hits The hits.
     * @return AbstractResponse Returns this response.
     */
    protected function setHits(array $hits) {
        $this->hits = $hits;
        return $this;
    }

    /**
     * Set the raw response.
     *
     * @param string $rawResponse The raw response.
     * @return AbstractResponse Returns this response.
     */
    public function setRawResponse($rawResponse) {
        $this->rawResponse = $rawResponse;
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
