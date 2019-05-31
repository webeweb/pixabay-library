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
 * Abstract media.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 * @abstract
 */
abstract class AbstractMedia {

    /**
     * Comments.
     *
     * @var int
     */
    private $comments;

    /**
     * Downloads.
     *
     * @var int
     */
    private $downloads;

    /**
     * Favorites.
     *
     * @var int
     */
    private $favorites;

    /**
     * Id.
     *
     * @var int
     */
    private $id;

    /**
     * Likes.
     *
     * @var int
     */
    private $likes;

    /**
     * Page URL.
     *
     * @var string
     */
    private $pageURL;

    /**
     * Tags.
     *
     * @var string
     */
    private $tags;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * User.
     *
     * @var string
     */
    private $user;

    /**
     * User id.
     *
     * @var int
     */
    private $userId;

    /**
     * User image URL.
     *
     * @var string
     */
    private $userImageURL;

    /**
     * Views.
     *
     * @var int
     */
    private $views;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the comments.
     *
     * @return int Returns the comments.
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * Get the downloads.
     *
     * @return int Returns the downloads.
     */
    public function getDownloads() {
        return $this->downloads;
    }

    /**
     * Get the favorites.
     *
     * @return int Returns the favorites.
     */
    public function getFavorites() {
        return $this->favorites;
    }

    /**
     * Get the id.
     *
     * @return int Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the likes.
     *
     * @return int Returns the likes.
     */
    public function getLikes() {
        return $this->likes;
    }

    /**
     * Get the page URL.
     *
     * @return string Returns the page URL.
     */
    public function getPageURL() {
        return $this->pageURL;
    }

    /**
     * Get the tags.
     *
     * @return string Returns the tags.
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the user.
     *
     * @return string Returns the user.
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Get the user id.
     *
     * @return int Returns the user id.
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Get the user image URL.
     *
     * @return string Returns the user image URL.
     */
    public function getUserImageURL() {
        return $this->userImageURL;
    }

    /**
     * Get the views.
     *
     * @return int Returns the views.
     */
    public function getViews() {
        return $this->views;
    }

    /**
     * Set the comments.
     *
     * @param int $comments The comments.
     * @return AbstractMedia Returns this media.
     */
    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Set the downloads.
     *
     * @param int $downloads The downloads.
     * @return AbstractMedia Returns this media.
     */
    public function setDownloads($downloads) {
        $this->downloads = $downloads;
        return $this;
    }

    /**
     * Set the favorites.
     *
     * @param int $favorites The favorites.
     * @return AbstractMedia Returns this media.
     */
    public function setFavorites($favorites) {
        $this->favorites = $favorites;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param int $id The id.
     * @return AbstractMedia Returns this media.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the likes.
     *
     * @param int $likes The likes.
     * @return AbstractMedia Returns this media.
     */
    public function setLikes($likes) {
        $this->likes = $likes;
        return $this;
    }

    /**
     * Set the page URL.
     *
     * @param string $pageURL The page URL.
     * @return AbstractMedia Returns this media.
     */
    public function setPageURL($pageURL) {
        $this->pageURL = $pageURL;
        return $this;
    }

    /**
     * Set the tags.
     *
     * @param string $tags The tags.
     * @return AbstractMedia Returns this media.
     */
    public function setTags($tags) {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return AbstractMedia Returns this media.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the user.
     *
     * @param string $user The user.
     * @return AbstractMedia Returns this media.
     */
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }

    /**
     * Set the user id.
     *
     * @param int $userId The user id.
     * @return AbstractMedia Returns this media.
     */
    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Set the user image URL.
     *
     * @param string $userImageURL The user image URL.
     * @return AbstractMedia Returns this media.
     */
    public function setUserImageURL($userImageURL) {
        $this->userImageURL = $userImageURL;
        return $this;
    }

    /**
     * Set the views.
     *
     * @param int $views Set the views.
     * @return AbstractMedia Returns this media.
     */
    public function setViews($views) {
        $this->views = $views;
        return $this;
    }
}
