<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data;

use DCKAP\CustomizedAPI\Model\QuoteItem;

/**
 * Interface QuoteItemInterface
 * @package DCKAP\CustomizedAPI\Api\Data
 */
interface QuoteItemInterface
{
    /**
     * Get ID.
     *
     * @return int
     */
    public function getItemId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setItemId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getPrice();

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param string $quantity
     * @return $this
     */
    public function setQuantity($qty);


}