<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model\Order;

use DCKAP\CustomizedAPI\Api\Data\Order\OrderDetailInterface;

/**
 * Class OrderDetail
 * @package DCKAP\CustomizedAPI\Model\Order
 */
class OrderDetail implements \DCKAP\CustomizedAPI\Api\Data\Order\OrderDetailInterface
{
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $createdAt;
    /**
     * @var
     */
    protected $updatedAt;
    /**
     * @var
     */
    protected $isVirtual;
    /**
     * @var
     */
    protected $incId;
    /**
     * @var
     */
    protected $status;
    /**
     * @var
     */
    protected $storeId;
    /**
     * @var
     */
    protected $quoteId;

    /**
     * @var
     */
    protected $shippingDes;
    /**
     * @var
     */
    protected $shippingAmt;
    /**
     * @var
     */
    protected $discountAmt;
    /**
     * @var
     */
    protected $discountInvoiced;
    /**
     * @var
     */
    protected $shippingMethod;
    /**
     * @var
     */
    protected $grandTotal;
    /**
     * @var
     */
    protected $baseCurrencyCode;
    /**
     * @var
     */
    protected $subtotalInclTax;
    /**
     * @var
     */
    protected $customerId;
    /**
     * @var
     */
    protected $items;
    /**
     * @var
     */
    protected $address;


    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
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
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get Increment Id.
     *
     * @return string
     */
    public function getIncrementId()
    {
        return $this->incId;
    }

    /**
     * Set Increment Id.
     *
     * @param string $incId
     *
     * @return $this
     */
    public function setIncrementId($incId)
    {
        $this->incId = $incId;
        return $this;
    }

    /**
     * Get Status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Status.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get Quote Id.
     *
     * @return int
     */
    public function getQuoteId()
    {
        return $this->quoteId;
    }

    /**
     * Set Quote Id.
     *
     * @param int $quoteId
     *
     * @return $this
     *
     */
    public function setQuoteId($quoteId)
    {
        $this->quoteId = $quoteId;
        return $this;
    }

    /**
     * Get Store Id.
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set Store Id.
     *
     * @param int $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }


    /**
     * @return boolean
     */
    public function getIsVirtual()
    {
        return $this->isVirtual;
    }

    /**
     * @param boolean $isVirtual
     * @return $this
     */
    public function setIsVirtual($isVirtual)
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }

    /**
     * Get Shipping Description.
     *
     * @return string
     */
    public function getShippingDescription()
    {
        return $this->shippingDes;
    }

    /**
     * Set Shipping Description.
     *
     * @param string $shippingDes
     *
     * @return $this
     */
    public function setShippingDescription($shippingDes)
    {
        $this->shippingDes = $shippingDes;
        return $this;
    }

    /**
     * Get Shipping amount.
     *
     * @return string
     */
    public function getShippingAmount()
    {
        return $this->shippingAmt;
    }

    /**
     * Set Shipping Amount.
     *
     * @param string $shippingAmt
     *
     * @return $this
     */
    public function setShippingAmount($shippingAmt)
    {
        $this->shippingAmt = $shippingAmt;
        return $this;
    }

    /**
     * Get Discount amount.
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->discountAmt;
    }

    /**
     * Set Discount Amount.
     *
     * @param string $discountAmt
     *
     * @return $this
     */
    public function setDiscountAmount($discountAmt)
    {
        $this->discountAmt = $discountAmt;
        return $this;
    }

    /**
     * Get Discount Invoiced.
     *
     * @return string
     */
    public function getDiscountInvoiced()
    {
        return $this->discountInvoiced;
    }

    /**
     * Set Discount Invoiced.
     *
     * @param string $discountInvoiced
     *
     * @return $this
     */
    public function setDiscountInvoiced($discountInvoiced)
    {
        $this->discountInvoiced = $discountInvoiced;
        return $this;
    }

    /**
     * Get Shipping Method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set Shipping Method.
     *
     * @param string $shippingMethod
     *
     * @return $this
     */
    public function setMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * Get Grand Total.
     *
     * @return string
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * Set Grand Total.
     *
     * @param string $grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;
        return $this;
    }

    /**
     * Get BaseCurrencyCode.
     *
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->baseCurrencyCode;
    }

    /**
     * Set BaseCurrencyCode.
     *
     * @param string $baseCurrencyCode
     *
     * @return $this
     */
    public function setBaseCurrencyCode($baseCurrencyCode)
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }

    /**
     * Get SubtotalInclTax.
     *
     * @return string
     */
    public function getSubtotalInclTax()
    {
        return $this->subtotalInclTax;
    }

    /**
     * Set SubtotalInclTax.
     *
     * @param string $subtotalInclTax
     *
     * @return $this
     */
    public function setSubtotalInclTax($subtotalInclTax)
    {
        $this->subtotalInclTax = $subtotalInclTax;
        return $this;
    }

    /**
     * Get Customer Id.
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set Customer Id.
     *
     * @param string $customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }


       /**
     * Get CustomerEmail.
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set Status.
     *
     * @param string $CustomerEmail
     *
     * @return $this
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }



    /**
     * Get TotalPaid.
     *
     * @return string
     */
    public function getTotalPaid()
    {
        return $this->totalPaid;
    }

    /**
     * Set TotalPaid.
     *
     * @param string $totalPaid
     *
     * @return $this
     */
    public function setTotalPaid($totalPaid)
    {
        $this->totalPaid = $totalPaid;
        return $this;
    }



      /**
     * Get TotalRefunded.
     *
     * @return string
     */
    public function getTotalRefunded()
    {
        return $this->totalRefunded;
    }

    /**
     * Set TotalRefunded.
     *
     * @param string $totalRefunded
     *
     * @return $this
     */
    public function setTotalRefunded($totalRefunded)
    {
        $this->totalRefunded = $totalRefunded;
        return $this;
    }


       /**
     * Get ShippingRefunded.
     *
     * @return string
     */
    public function getShippingRefunded()
    {
        return $this->shippingRefunded;
    }

    /**
     * Set ShippingRefunded.
     *
     * @param string $shippingRefunded
     *
     * @return $this
     */
    public function setShippingRefunded($shippingRefunded)
    {
        $this->shippingRefunded = $shippingRefunded;
        return $this;
    }
    
    /**
     * @return $this
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     *
     * @param array $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return $this
     */
    public function getShippingAddress()
    {
        return $this->address;
    }

    /**
     *
     * @param array $address
     *
     * @return $this
     */
    public function setShippingAddress($address)
    {
        $this->address = $address;
        return $this;
    }


/**
     *
     * @param array $statusHistory
     *
     * @return $this
     */
    public function getStatusHistories()
    {
        return $this->statusHistory;
    }

    /**
     *
     * @param array $statusHistory
     *
     * @return $this
     */
    public function setStatusHistories($statusHistory)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }

    
    /**
     * @param array $payment
     * @return $this
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     *
     * @param array $payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    

 
 
}