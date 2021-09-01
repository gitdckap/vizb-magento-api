<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data;

/**
 * Interface QuoteDetailInterface
 * @package DCKAP\CustomizedAPI\Api\Data
 */
interface QuoteDetailInterface
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
     * @return string
     */
    public function getConvertedAt();

    /**
     * @param string $convertedAt
     * @return $this
     */
    public function setConvertedAt($convertedAt);

    /**
     * @return boolean
     */
    public function getIsActive();

    /**
     * @param boolean $isActive
     * @return $this
     */
    public function setIsActive($isActive);

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
     * @return string
     */
    public function getReservedOrderId();


    /**
     * @param string $reservedOrderId
     * @return $this
     */
    public function setReservedOrderId($reservedOrderId);

    /**
     * @return int
     */
    public function getOrigOrderId();


    /**
     * @param int $origOrderId
     * @return $this
     */
    public function setOrigOrderId($origOrderId);

    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\QuoteItemInterface[]
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
     * @return \DCKAP\CustomizedAPI\Api\Data\QuoteCustomerInterface[]
     */
    public function getCustomer();

    /**
     *
     * @param array $customer
     *
     * @return $this
     */
    public function setCustomer($customer);

    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\QuoteAddressInterface[]
     */
    public function getBillingAddress();

    /**
     *
     * @param array $address
     *
     * @return $this
     */
    public function setBillingAddress($address);

    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\QuoteAddressInterface[]
     */
    public function getShippingAddress();

    /**
     *
     * @param array $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress);


}
