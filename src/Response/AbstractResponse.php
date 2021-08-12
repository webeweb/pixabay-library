<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Response;

use WBW\Library\Pixabay\Model\AbstractHit;
use WBW\Library\Provider\Response\AbstractResponse as BaseResponse;
use WBW\Library\Traits\Compounds\CompoundRateLimitTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Response
 * @abstract
 */
abstract class AbstractResponse extends BaseResponse {

    use CompoundRateLimitTrait;

    /**
     * Hits.
     *
     * @var AbstractHit[]
     */
    private $hits;

    /**
     * Total.
     *
     * @var int|null
     */
    private $total;

    /**
     * Total hits.
     *
     * @var int|null
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
    protected function addHit(AbstractHit $hit): AbstractResponse {
        $this->hits[] = $hit;
        return $this;
    }

    /**
     * Get the hits.
     *
     * @return AbstractHit[] Returns the hits.
     */
    protected function getHits(): array {
        return $this->hits;
    }

    /**
     * Get the total.
     *
     * @return int|null Returns the total.
     */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Get the total hits.
     *
     * @return int|null Returns the total hits.
     */
    public function getTotalHits(): ?int {
        return $this->totalHits;
    }

    /**
     * Set the hits.
     *
     * @param AbstractHit[] $hits The hits.
     * @return AbstractResponse Returns this response.
     */
    protected function setHits(array $hits): AbstractResponse {
        $this->hits = $hits;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param int|null $total The total.
     * @return AbstractResponse Returns this response.
     */
    public function setTotal(?int $total): AbstractResponse {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the total hits.
     *
     * @param int|null $totalHits The total hits.
     * @return AbstractResponse Returns this response.
     */
    public function setTotalHits(?int $totalHits): AbstractResponse {
        $this->totalHits = $totalHits;
        return $this;
    }

}
