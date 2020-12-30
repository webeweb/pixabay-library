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

use InvalidArgumentException;
use WBW\Library\Core\Model\Attribute\IntegerPageTrait;
use WBW\Library\Core\Model\Attribute\StringIdTrait;
use WBW\Library\Core\Model\Attribute\StringLangTrait;
use WBW\Library\Pixabay\API\RequestInterface;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Model
 * @abstract
 */
abstract class AbstractRequest implements RequestInterface {

    use IntegerPageTrait;
    use StringIdTrait;
    use StringLangTrait;

    /**
     * Category.
     *
     * @var string|null
     */
    private $category;

    /**
     * Editor's choice.
     *
     * @var bool|null
     */
    private $editorsChoice;

    /**
     * Min height.
     *
     * @var int|null
     */
    private $minHeight;

    /**
     * Min width.
     *
     * @var int|null
     */
    private $minWidth;

    /**
     * Order.
     *
     * @var string|null
     */
    private $order;

    /**
     * Per page.
     *
     * @var int|null
     */
    private $perPage;

    /**
     * Pretty.
     *
     * @var bool|null
     */
    private $pretty;

    /**
     * Query.
     *
     * @var string|null
     */
    private $q;

    /**
     * Safe search
     *
     * @var bool|null
     */
    private $safeSearch;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setEditorsChoice(false);
        $this->setLang(self::LANG_EN);
        $this->setMinHeight(0);
        $this->setMinWidth(0);
        $this->setOrder(self::ORDER_POPULAR);
        $this->setPage(1);
        $this->setPerPage(self::PER_PAGE_DEFAULT);
        $this->setPretty(false);
        $this->setSafeSearch(false);
    }

    /**
     * Enumerates the lang.
     *
     * @return string[] Returns the lang enumeration.
     */
    public static function enumLang(): array {
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
    public static function enumOrder(): array {
        return [
            self::ORDER_LATEST,
            self::ORDER_POPULAR,
        ];
    }

    /**
     * Get the category.
     *
     * @return string|null Returns the category.
     */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Get the editor's choice.
     *
     * @return bool|null Returns the editor's choice.
     */
    public function getEditorsChoice(): ?bool {
        return $this->editorsChoice;
    }

    /**
     * Get the min height.
     *
     * @return int|null Returns the min height.
     */
    public function getMinHeight(): ?int {
        return $this->minHeight;
    }

    /**
     * Get the min width.
     *
     * @return int|null Returns the min width.
     */
    public function getMinWidth(): ?int {
        return $this->minWidth;
    }

    /**
     * Get the order.
     *
     * @return string|null Returns the order.
     */
    public function getOrder(): ?string {
        return $this->order;
    }

    /**
     * Get the per page.
     *
     * @return int|null Returns the per page.
     */
    public function getPerPage(): ?int {
        return $this->perPage;
    }

    /**
     * Get the pretty.
     *
     * @return bool|null Returns the pretty.
     */
    public function getPretty(): ?bool {
        return $this->pretty;
    }

    /**
     * Get the query.
     *
     * @return string|null Returns the query.
     */
    public function getQ(): ?string {
        return $this->q;
    }

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    abstract public function getResourcePath(): string;

    /**
     * Get the safe search.
     *
     * @return bool|null Returns the safe search.
     */
    public function getSafeSearch(): ?bool {
        return $this->safeSearch;
    }

    /**
     * Set the category.
     *
     * @param string|null $category The category.
     * @return AbstractRequest Returns this request.
     */
    public function setCategory(?string $category): AbstractRequest {
        $this->category = $category;
        return $this;
    }

    /**
     * Set the editor's choice.
     *
     * @param bool|null $editorsChoice The editor's choice.
     * @return AbstractRequest Returns this request.
     */
    public function setEditorsChoice(?bool $editorsChoice): AbstractRequest {
        $this->editorsChoice = $editorsChoice;
        return $this;
    }

    /**
     * Set the lang.
     *
     * @param string|null $lang The lang.
     * @return AbstractRequest Returns this request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the lang is invalid.
     */
    public function setLang(?string $lang): AbstractRequest {
        if (false === in_array($lang, static::enumLang())) {
            throw new InvalidArgumentException(sprintf('The lang "%s" is invalid', $lang));
        }
        $this->lang = $lang;
        return $this;
    }

    /**
     * Set the min height.
     *
     * @param int|null $minHeight The min height.
     * @return AbstractRequest Returns this request.
     */
    public function setMinHeight(?int $minHeight): AbstractRequest {
        $this->minHeight = $minHeight;
        return $this;
    }

    /**
     * Set the min width.
     *
     * @param int|null $minWidth The min width.
     * @return AbstractRequest Returns this request.
     */
    public function setMinWidth(?int $minWidth): AbstractRequest {
        $this->minWidth = $minWidth;
        return $this;
    }

    /**
     * Set the order.
     *
     * @param string|null $order The order.
     * @return AbstractRequest Returns this request.
     * @throws InvalidArgumentException Throws an unexpected value exception if the order is invalid.
     */
    public function setOrder(?string $order): AbstractRequest {
        if (false === in_array($order, static::enumOrder())) {
            throw new InvalidArgumentException(sprintf('The order "%s" is invalid', $order));
        }
        $this->order = $order;
        return $this;
    }

    /**
     * Set the page.
     *
     * @param int|null $page The page.
     * @return AbstractRequest Returns this request.
     * @throws InvalidArgumentException Throws an unexpected value exception if the page is less or equal than zero.
     */
    public function setPage(?int $page): AbstractRequest {
        if ($page <= 0) {
            throw new InvalidArgumentException("The page must be greater than 0");
        }
        $this->page = $page;
        return $this;
    }

    /**
     * Set the per page.
     *
     * @param int|null $perPage The per page.
     * @return AbstractRequest Returns this request.
     * @throws InvalidArgumentException Throws an unexpected value exception if the per page is invalid.
     */
    public function setPerPage(?int $perPage): AbstractRequest {
        if ($perPage < self::PER_PAGE_MIN || self::PER_PAGE_MAX < $perPage) {
            throw new InvalidArgumentException(sprintf("The per page must be between %d and %d", self::PER_PAGE_MIN, self::PER_PAGE_MAX));
        }
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * Set the pretty.
     *
     * @param bool|null $pretty The pretty.
     * @return AbstractRequest Returns this request.
     */
    public function setPretty(?bool $pretty): AbstractRequest {
        $this->pretty = $pretty;
        return $this;
    }

    /**
     * Set the query.
     *
     * @param string|null $q The query.
     * @return AbstractRequest Returns this request.
     */
    public function setQ(?string $q): AbstractRequest {
        $this->q = $q;
        return $this;
    }

    /**
     * Set the safe search.
     *
     * @param bool|null $safeSearch The safe search.
     * @return AbstractRequest Returns this request.
     */
    public function setSafeSearch(?bool $safeSearch): AbstractRequest {
        $this->safeSearch = $safeSearch;
        return $this;
    }
}
