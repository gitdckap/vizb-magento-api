<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace DCKAP\CustomizedAPI\Api\Data\Order;

use DCKAP\CustomizedAPI\Model\Order\OrderItem;


/**
 * Interface OrderItemInterface
 * @package DCKAP\CustomizedAPI\Api\Data\Order
 */
interface OrderItemInterface
{


      /*
     * Quantity returned.
     */
    const QTY_RETURNED = 'qty_returned';
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
    public function getQuantityOrdered();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantityOrdered($qty);

    /**
     * @return int
     */
    public function getQtyShipped();

    /**
     * @param int $qtyShipped
     * @return $this
     */
    public function setQtyShipped($qtyShipped);

    /**
     * @return string
     */
    public function getOriginalPrice();

    /**
     * @param string $originalPrice
     * @return $this
     */
    public function setOriginalPrice($originalPrice);

    /**
     * @return int
     */
    public function getOrderId();

    /**
     * @param int $orderId
     * @return $this
     */
    public function setOrderId($orderId);

    /**
     * @return int
     */
    public function getQuoeItemId();

    /**
     * @param int $quoteItemId
     * @return $this
     */
    public function setQuoteItemId($quoteItemId);

    /**
     * @return int
     */
    public function getProductId();

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId);

    /**
     * @return int
     */
    public function getNoDiscount();

    /**
     * @param int $noDiscount
     * @return $this
     */
    public function setNoDiscount($noDiscount);

    /**
     * @return int
     */
    public function getFreeShipping();

    /**
     * @param int $freeShipping
     * @return $this
     */
    public function setFreeShipping($freeShipping);

    /**
     * @return int
     */
    public function getIsQtyDecimal();

    /**
     * @param int isQtyDecimal
     * @return $this
     */
    public function setIsQtyDecimal($isQtyDecimal);

    /**
     * @return string
     */
    public function getProductType();

    /**
     * @param string $productType
     * @return $this
     */
    public function setProductType($productType);

    /**
     * @return string
     */
    public function getWeight();

    /**
     * @param string $weight
     * @return $this
     */
    public function setWeight($weight);

    /**
     * @return string
     */
    public function getProductOptions();

    /**
     * @param string $productOptions
     * @return $this
     */
    public function setProductOptions($productOptions);


         /**
     * Get QtyRefunded.
     *
     * @return string
     */
    public function getQtyRefunded();

    /**
     * Set QtyRefunded.
     *
     * @param string $qtyRefunded
     *
     * @return $this
     */
    public function setQtyRefunded($qtyRefunded);
    

         /**
     * Get QtyReturned.
     *
     * @return string
     */
    public function getQtyReturned();

    /**
     * Set QtyReturned.
     *
     * @param string $QtyReturned
     *
     * @return $this
     */
    public function setQtyReturned($QtyReturned);
    

    
    

}