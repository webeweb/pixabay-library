<?php

/*
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * (c) 2019 All rights reserved.
 */

namespace WBW\Library\Pixabay\Model;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 * @abstract
 */
abstract class AbstractRequest {

    /**
     * Category.
     *
     * @var string
     */
    private $category;

    /**
     * Editor's choice.
     *
     * @var bool
     */
    private $editorsChoice;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Lang.
     *
     * @var string
     */
    private $lang;

    /**
     * Min height.
     *
     * @var int
     */
    private $minHeight;

    /**
     * Min width.
     *
     * @var int
     */
    private $minWidth;

    /**
     * Order.
     *
     * @var string
     */
    private $order;

    /**
     * Page.
     *
     * @var int
     */
    private $page;

    /**
     * Per page.
     *
     * @var int
     */
    private $perPage;

    /**
     * Pretty.
     *
     * @var bool
     */
    private $pretty;

    /**
     * Query.
     *
     * @var string
     */
    private $q;

    /**
     * Safe search
     *
     * @var bool
     */
    private $safeSearch;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the category.
     *
     * @return string Returns the category.
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Get the editor's choice.
     *
     * @return bool Returns the editor's choice.
     */
    public function getEditorsChoice() {
        return $this->editorsChoice;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the lang.
     *
     * @return string Returns the lang.
     */
    public function getLang() {
        return $this->lang;
    }

    /**
     * Get the min height.
     *
     * @return int Returns the min height.
     */
    public function getMinHeight() {
        return $this->minHeight;
    }

    /**
     * Get the min width.
     *
     * @return int Returns the min width.
     */
    public function getMinWidth() {
        return $this->minWidth;
    }

    /**
     * Get the order.
     *
     * @return string Returns the order.
     */
    public function getOrder() {
        return $this->order;
    }

    /**
     * Get the page.
     *
     * @return int Returns the page.
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Get the per page.
     *
     * @return int Returns the per page.
     */
    public function getPerPage() {
        return $this->perPage;
    }

    /**
     * Get the pretty.
     *
     * @return bool Returns the pretty.
     */
    public function getPretty() {
        return $this->pretty;
    }

    /**
     * Get the query.
     *
     * @return string Returns the query.
     */
    public function getQ() {
        return $this->q;
    }

    /**
     * Get the safe search.
     *
     * @return bool Returns the safe search.
     */
    public function getSafeSearch() {
        return $this->safeSearch;
    }

    /**
     * Set the category.
     *
     * @param string $category The category.
     * @return AbstractRequest Returns this request.
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Set the editor's choice.
     *
     * @param bool $editorsChoice The editor's choice.
     * @return AbstractRequest Returns this request.
     */
    public function setEditorsChoice($editorsChoice) {
        $this->editorsChoice = $editorsChoice;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return AbstractRequest Returns this request.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the lang.
     *
     * @param string $lang The lang.
     * @return AbstractRequest Returns this request.
     */
    public function setLang($lang) {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Set the min height.
     *
     * @param int $minHeight The min height.
     * @return AbstractRequest Returns this request.
     */
    public function setMinHeight($minHeight) {
        $this->minHeight = $minHeight;
        return $this;
    }

    /**
     * Set the min width.
     *
     * @param int $minWidth The min width.
     * @return AbstractRequest Returns this request.
     */
    public function setMinWidth($minWidth) {
        $this->minWidth = $minWidth;
        return $this;
    }

    /**
     * Set the order.
     *
     * @param string $order The order.
     * @return AbstractRequest Returns this request.
     */
    public function setOrder($order) {
        $this->order = $order;
        return $this;
    }

    /**
     * Set the page.
     *
     * @param int $page The page.
     * @return AbstractRequest Returns this request.
     */
    public function setPage($page) {
        $this->page = $page;
        return $this;
    }

    /**
     * Set the per page.
     *
     * @param int $perPage The per page.
     * @return AbstractRequest Returns this request.
     */
    public function setPerPage($perPage) {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * Set the pretty.
     *
     * @param bool $pretty The pretty.
     * @return AbstractRequest Returns this request.
     */
    public function setPretty($pretty) {
        $this->pretty = $pretty;
        return $this;
    }

    /**
     * Set the query.
     *
     * @param string $q The query.
     * @return AbstractRequest Returns this request.
     */
    public function setQ($q) {
        $this->q = $q;
        return $this;
    }

    /**
     * Set the safe search.
     *
     * @param bool $safeSearch The safe search.
     * @return AbstractRequest Returns this request.
     */
    public function setSafeSearch($safeSearch) {
        $this->safeSearch = $safeSearch;
        return $this;
    }
}
