<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model;


/**
 * Class QuoteItem
 * @package DCKAP\CustomizedAPI\Model
 */
class QuoteItem implements \DCKAP\CustomizedAPI\Api\Data\QuoteItemInterface
{
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $name;

    /**
     * Get ID.
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->id;
    }

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return QuoteItem
     */
    public function setItemId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return QuoteItem
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->qty;
    }

    /**
     * @param string $qty
     * @return $this
     */
    public function setQuantity($qty)
    {
        $this->qty = $qty;
        return $this;
    }

}