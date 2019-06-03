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

use UnexpectedValueException;
use WBW\Library\Pixabay\API\RequestInterface;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 * @abstract
 */
abstract class AbstractRequest implements RequestInterface {

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
     * Enumerates the lang.
     *
     * @return string[] Returns the lang enumeration.
     */
    public static function enumLang() {
        return [
            self::LANG_BG,
            self::LANG_CS,
            self::LANG_DA,
            self::LANG_DE,
            self::LANG_EL,
            self::LANG_EN,
            self::LANG_ES,
            self::LANG_FI,
            self::LANG_FR,
            self::LANG_HU,
            self::LANG_ID,
            self::LANG_IT,
            self::LANG_JA,
            self::LANG_KO,
            self::LANG_NL,
            self::LANG_NO,
            self::LANG_PL,
            self::LANG_PT,
            self::LANG_RO,
            self::LANG_RU,
            self::LANG_SK,
            self::LANG_SV,
            self::LANG_TH,
            self::LANG_TR,
            self::LANG_VI,
            self::LANG_ZH,
        ];
    }

    /**
     * Enumerates the order.
     *
     * @return string[] Returns the order enumeration.
     */
    public static function enumOrder() {
        return [
            self::ORDER_LATEST,
            self::ORDER_POPULAR,
        ];
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
     * @throws UnexpectedValueException Throws an unexpected value exception if the lang is invalid.
     */
    public function setLang($lang) {
        if (false === in_array($lang, static::enumLang())) {
            throw new UnexpectedValueException(sprintf("The lang \"%s\" is invalid", $lang));
        }
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
     * @throws UnexpectedValueException Throws an unexpected value exception if the order is invalid.
     */
    public function setOrder($order) {
        if (false === in_array($order, static::enumOrder())) {
            throw new UnexpectedValueException(sprintf("The order \"%s\" is invalid", $order));
        }
        $this->order = $order;
        return $this;
    }

    /**
     * Set the page.
     *
     * @param int $page The page.
     * @return AbstractRequest Returns this request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the page is less or equal than zero.
     */
    public function setPage($page) {
        if ($page <= 0) {
            throw new UnexpectedValueException("The page must be greater than 0");
        }
        $this->page = $page;
        return $this;
    }

    /**
     * Set the per page.
     *
     * @param int $perPage The per page.
     * @return AbstractRequest Returns this request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the per page is invalid.
     */
    public function setPerPage($perPage) {
        if ($perPage < self::PER_PAGE_MIN || self::PER_PAGE_MAX < $perPage) {
            throw new UnexpectedValueException(sprintf("The per page must be between %d and %d", self::PER_PAGE_MIN, self::PER_PAGE_MAX));
        }
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
