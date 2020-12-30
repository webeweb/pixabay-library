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

use WBW\Library\Core\Model\Attribute\IntegerIdTrait;
use WBW\Library\Core\Model\Attribute\StringTypeTrait;

/**
 * Abstract hit.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 * @abstract
 */
abstract class AbstractHit {

    use IntegerIdTrait {
        setId as public;
    }
    use StringTypeTrait;

    /**
     * Comments.
     *
     * @var int|null
     */
    private $comments;

    /**
     * Downloads.
     *
     * @var int|null
     */
    private $downloads;

    /**
     * Favorites.
     *
     * @var int|null
     */
    private $favorites;

    /**
     * Likes.
     *
     * @var int|null
     */
    private $likes;

    /**
     * Page URL.
     *
     * @var string|null
     */
    private $pageURL;

    /**
     * Tags.
     *
     * @var string|null
     */
    private $tags;

    /**
     * User.
     *
     * @var string|null
     */
    private $user;

    /**
     * User id.
     *
     * @var int|null
     */
    private $userId;

    /**
     * User image URL.
     *
     * @var string|null
     */
    private $userImageURL;

    /**
     * Views.
     *
     * @var int|null
     */
    private $views;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the comments.
     *
     * @return int|null Returns the comments.
     */
    public function getComments(): ?int {
        return $this->comments;
    }

    /**
     * Get the downloads.
     *
     * @return int|null Returns the downloads.
     */
    public function getDownloads(): ?int {
        return $this->downloads;
    }

    /**
     * Get the favorites.
     *
     * @return int|null Returns the favorites.
     */
    public function getFavorites(): ?int {
        return $this->favorites;
    }

    /**
     * Get the likes.
     *
     * @return int|null Returns the likes.
     */
    public function getLikes(): ?int {
        return $this->likes;
    }

    /**
     * Get the page URL.
     *
     * @return string|null Returns the page URL.
     */
    public function getPageURL(): ?string {
        return $this->pageURL;
    }

    /**
     * Get the tags.
     *
     * @return string|null Returns the tags.
     */
    public function getTags(): ?string {
        return $this->tags;
    }

    /**
     * Get the user.
     *
     * @return string|null Returns the user.
     */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Get the user id.
     *
     * @return int|null Returns the user id.
     */
    public function getUserId(): ?int {
        return $this->userId;
    }

    /**
     * Get the user image URL.
     *
     * @return string|null Returns the user image URL.
     */
    public function getUserImageURL(): ?string {
        return $this->userImageURL;
    }

    /**
     * Get the views.
     *
     * @return int|null Returns the views.
     */
    public function getViews(): ?int {
        return $this->views;
    }

    /**
     * Set the comments.
     *
     * @param int|null $comments The comments.
     * @return AbstractHit Returns this hit.
     */
    public function setComments(?int $comments): AbstractHit {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Set the downloads.
     *
     * @param int|null $downloads The downloads.
     * @return AbstractHit Returns this hit.
     */
    public function setDownloads(?int $downloads): AbstractHit {
        $this->downloads = $downloads;
        return $this;
    }

    /**
     * Set the favorites.
     *
     * @param int|null $favorites The favorites.
     * @return AbstractHit Returns this hit.
     */
    public function setFavorites(?int $favorites): AbstractHit {
        $this->favorites = $favorites;
        return $this;
    }

    /**
     * Set the likes.
     *
     * @param int|null $likes The likes.
     * @return AbstractHit Returns this hit.
     */
    public function setLikes(?int $likes): AbstractHit {
        $this->likes = $likes;
        return $this;
    }

    /**
     * Set the page URL.
     *
     * @param string|null $pageURL The page URL.
     * @return AbstractHit Returns this hit.
     */
    public function setPageURL(?string $pageURL): AbstractHit {
        $this->pageURL = $pageURL;
        return $this;
    }

    /**
     * Set the tags.
     *
     * @param string|null $tags The tags.
     * @return AbstractHit Returns this hit.
     */
    public function setTags(?string $tags): AbstractHit {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Set the user.
     *
     * @param string|null $user The user.
     * @return AbstractHit Returns this hit.
     */
    public function setUser(?string $user): AbstractHit {
        $this->user = $user;
        return $this;
    }

    /**
     * Set the user id.
     *
     * @param int|null $userId The user id.
     * @return AbstractHit Returns this hit.
     */
    public function setUserId(?int $userId): AbstractHit {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Set the user image URL.
     *
     * @param string|null $userImageURL The user image URL.
     * @return AbstractHit Returns this hit.
     */
    public function setUserImageURL(?string $userImageURL): AbstractHit {
        $this->userImageURL = $userImageURL;
        return $this;
    }

    /**
     * Set the views.
     *
     * @param int|null $views Set the views.
     * @return AbstractHit Returns this hit.
     */
    public function setViews(?int $views): AbstractHit {
        $this->views = $views;
        return $this;
    }
}
