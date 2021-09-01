<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model\Order;


/**
 * Class OrderItem
 * @package DCKAP\CustomizedAPI\Model\Order
 */
class OrderItem implements \DCKAP\CustomizedAPI\Api\Data\Order\OrderItemInterface
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
     * @var
     */
    protected $sku;
    /**
     * @var
     */
    protected $price;
    /**
     * @var
     */
    protected $qty;
    /**
     * @var
     */
    protected $qtyShipped;
    /**
     * @var
     */
    protected $originalPrice;
    /**
     * @var
     */
    protected $orderId;
    /**
     * @var
     */
    protected $quoteItemId;
    /**
     * @var
     */
    protected $productId;
    /**
     * @var
     */
    protected $noDiscount;
    /**
     * @var
     */
    protected $freeShipping;
    /**
     * @var
     */
    protected $isQtyDecimal;
    /**
     * @var
     */
    protected $productType;
    /**
     * @var
     */
    protected $weight;
    /**
     * @var
     */
    protected $productOptions;
    
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
     * @return $this
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
     * @return $this
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
    public function getQuantityOrdered()
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     * @return $this
     */
    public function setQuantityOrdered($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getQtyShipped()
    {
        return $this->qtyShipped;
    }

    /**
     * @param in $qtytShipped
     * @return $this
     */
    public function setQtyShipped($qtyShipped)
    {
        $this->qtyShipped = $qtyShipped;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * @param string $originalPrice
     * @return $this
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuoeItemId()
    {
        return $this->quoteItemId;
    }

    /**
     * @param int $quoteItemId
     * @return $this
     */
    public function setQuoteItemId($quoteItemId)
    {
        $this->quoteItemId = $quoteItemId;
        return $this;
    }


    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getNoDiscount()
    {
        return $this->noDiscount;
    }

    /**
     * @param int $noDiscount
     * @return $this
     */
    public function setNoDiscount($noDiscount)
    {
        $this->noDiscount = $noDiscount;
        return $this;
    }

    /**
     * @return int
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * @param int $freeShipping
     * @return $this
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsQtyDecimal()
    {
        return $this->isQtyDecimal;
    }

    /**
     * @param int $isQtyDecimal
     * @return $this
     */
    public function setIsQtyDecimal($isQtyDecimal)
    {
        $this->isQtyDecimal = $isQtyDecimal;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductOptions()
    {
        return $this->productOptions;        
    }

    /**
     * @param string $productOptions
     * @return $this
     */
    public function setProductOptions($productOptions)
    {
        $this->productOptions = $productOptions;

        return $this;
    }  

       /**
     * Get QtyRefunded.
     *
     * @return string
     */
    public function getQtyRefunded()
    {
        return $this->qtyRefunded;
    }

    /**
     * Set QtyRefunded.
     *
     * @param string $qtyRefunded
     *
     * @return $this
     */
    public function setQtyRefunded($qtyRefunded)
    {
        $this->qtyRefunded = $qtyRefunded;
        return $this;
    }

         /**
     * Get qtyReturned.
     *
     * @return string
     */
    public function getQtyReturned()
    {
        return $this->qtyReturned;
    }

    /**
     * Set qtyReturned.
     *
     * @param string $qtyReturned
     *
     * @return $this
     */
    public function setQtyReturned($QtyReturned)
    {
        $this->qtyReturned = $QtyReturned;
        return $this;
    }
    

}