<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model;


/**
 * Class QuoteDetail
 * @package DCKAP\CustomizedAPI\Model
 */
class QuoteDetail implements \DCKAP\CustomizedAPI\Api\Data\QuoteDetailInterface
{
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $items;
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
    protected $convertedAt;
    /**
     * @var
     */
    protected $isActive;
    /**
     * @var
     */
    protected $isVirtual;
    /**
     * @var
     */
    protected $reservedOrderId;
    /**
     * @var
     */
    protected $origOrderId;
    /**
     * @var
     */
    protected $customer;
    /**
     * @var
     */
    protected $address;
   /**
     * @var
     */
    protected $shippingAddress;

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
     * @return string
     */
    public function getConvertedAt()
    {
        return $this->convertedAt;
    }

    /**
     * @param string $convertedAt
     * @return $this
     */
    public function setConvertedAt($convertedAt)
    {
        $this->convertedAt = $convertedAt;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
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
     * @return string
     */
    public function getReservedOrderId()
    {
        return $this->reservedOrderId;
    }

    /**
     * @param string $reservedOrderId
     * @return $this
     */
    public function setReservedOrderId($reservedOrderId)
    {
        $this->reservedOrderId = $reservedOrderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrigOrderId()
    {
        return $this->origOrderId;
    }

    /**
     * @param int $origOrderId
     * @return $this
     */
    public function setOrigOrderId($origOrderId)
    {
        $this->origOrderId = $origOrderId;
        return $this;
    }

    /**
     *
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
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     *
     * @param array $customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return $this
     */
    public function getBillingAddress()
    {
        return $this->address;
    }

    /**
     *
     * @param array $address
     *
     * @return $this
     */
    public function setBillingAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * @return $this
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     *
     * @param array $address
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

}
