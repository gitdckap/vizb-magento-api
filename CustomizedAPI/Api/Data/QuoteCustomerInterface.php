<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data;

use DCKAP\CustomizedAPI\Model\QuoteCustomer;

/**
 * Interface QuoteCustomerInterface
 * @package DCKAP\CustomizedAPI\Api\Data
 */
interface QuoteCustomerInterface
{

    /**
     * Get ID.
     *
     * @return int
     */
    public function getCustomerId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setCustomerId($id);

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
    public function getEmail();

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getGender();

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender($gender);


}