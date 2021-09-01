<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data\Order;

/**
 * Interface OrderDetailInterface
 * @package DCKAP\CustomizedAPI\Api\Data\Order
 */
interface OrderDetailInterface
{
  

    /**
     * Get ID.
     *
     * @return int
     */
    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id);

    /**
     * Get Increment Id.
     *
     * @return string
     */
    public function getIncrementId();

    /**
     * Set Increment Id.
     *
     * @param string $incId
     *
     * @return $this
     */
    public function setIncrementId($incId);

    /**
     * Get Status.
     *
     * @return string
     */
    public function getStatus();

    /**
     * Set Status.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status);

    /**
     * Get Quote Id.
     *
     * @return int
     */
    public function getQuoteId();

    /**
     * Set Quote Id.
     *
     * @param int $quoteId
     *
     * @return $this
     *
     */
    public function setQuoteId($quoteId);

    /**
     * Set Store Id.
     *
     * @param int $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId);

    /**
     * Get Store Id.
     *
     * @return int
     */
    public function getStoreId();


    /**
     * @return string
     */
    public function getCreatedAt();


    /**
     * @param $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);


    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);


    /**
     * @return boolean
     */
    public function getIsVirtual();

    /**
     * @param boolean $isVirtual
     * @return $this
     */
    public function setIsVirtual($isVirtual);

    /**
     * Get Shipping Description.
     *
     * @return string
     */
    public function getShippingDescription();

    /**
     * Set Shipping Description.
     *
     * @param string $shippingDes
     *
     * @return $this
     */
    public function setShippingDescription($shippingDes);

    /**
     * Get Shipping amount.
     *
     * @return string
     */
    public function getShippingAmount();

    /**
     * Set Shipping Amount.
     *
     * @param string $shippingAmt
     *
     * @return $this
     */
    public function setShippingAmount($shippingAmt);

    /**
     * Get Discount amount.
     *
     * @return string
     */
    public function getDiscountAmount();

    /**
     * Set Discount Amount.
     *
     * @param string $discountAmt
     *
     * @return $this
     */
    public function setDiscountAmount($discountAmt);

    /**
     * Get Discount Invoiced.
     *
     * @return string
     */
    public function getDiscountInvoiced();

    /**
     * Set Discount Invoiced.
     *
     * @param string $discountInvoiced
     *
     * @return $this
     */
    public function setDiscountInvoiced($discountInvoiced);

    /**
     * Get Shipping Method.
     *
     * @return string
     */
    public function getMethod();

    /**
     * Set Shipping Method.
     *
     * @param string $shippingMethod
     *
     * @return $this
     */
    public function setMethod($shippingMethod);

    /**
     * Get Grand Total.
     *
     * @return string
     */
    public function getGrandTotal();

    /**
     * Set Grand Total.
     *
     * @param string $grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal);

    /**
     * Get BaseCurrencyCode.
     *
     * @return string
     */
    public function getBaseCurrencyCode();

    /**
     * Set BaseCurrencyCode.
     *
     * @param string $baseCurrencyCode
     *
     * @return $this
     */
    public function setBaseCurrencyCode($baseCurrencyCode);

    /**
     * Get SubtotalInclTax.
     *
     * @return string
     */
    public function getSubtotalInclTax();

    /**
     * Set SubtotalInclTax.
     *
     * @param string $subtotalInclTax
     *
     * @return $this
     */
    public function setSubtotalInclTax($subtotalInclTax);

    /**
     * Get Customer Id.
     *
     * @return string
     */
    public function getCustomerId();

    /**
     * Set Customer Id.
     *
     * @param string $customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId);




     /**
     * Get CustomerEmail.
     *
     * @return string
     */
    public function getCustomerEmail();

    /**
     * Set Status.
     *
     * @param string $CustomerEmail
     *
     * @return $this
     */
    public function setCustomerEmail($customerEmail);


      /**
     * Get TotalPaid.
     *
     * @return string
     */
    public function getTotalPaid();

    /**
     * Set TotalPaid.
     *
     * @param string $totalPaid
     *
     * @return $this
     */
    public function setTotalPaid($totalPaid);

       /**
     * Get TotalRefunded.
     *
     * @return string
     */
    public function getTotalRefunded();

    /**
     * Set TotalRefunded.
     *
     * @param string $totalRefunded
     *
     * @return $this
     */
    public function setTotalRefunded($totalRefunded);


         /**
     * Get shippingRefunded.
     *
     * @return string
     */
    public function getShippingRefunded();

    /**
     * Set shippingRefunded.
     *
     * @param string $shippingRefunded
     *
     * @return $this
     */
    public function setShippingRefunded($shippingRefunded);



    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\OrderItemInterface[]
     */
    public function getItems();

    /**
     *
     * @param array $items
     *
     * @return $this
     */
    public function setItems($items);

    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\OrderAddressInterface[]
     */
    public function getShippingAddress();

    /**
     *
     * @param array $address
     *
     * @return $this
     */
    public function setShippingAddress($address);


  /**
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterface[]
     */
    public function getStatusHistories();
    

    /**
     *  @param array $statusHistory
     * @return $this
     * 
     */
    public function setStatusHistories($statusHistory);

      /**
     * Gets order payment
     *
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface|null
     */
    public function getPayment();

      /**
     * Sets order payment
     *
     * @param \Magento\Sales\Api\Data\OrderPaymentInterface|null $payment
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface
     */
    public function setPayment($payment);
   


    

}