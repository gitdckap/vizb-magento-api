<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model;


/**
 * Class QuoteCustomer
 * @package DCKAP\CustomizedAPI\Model
 */
class QuoteCustomer implements \DCKAP\CustomizedAPI\Api\Data\QuoteCustomerInterface
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
    protected $email;
    /**
     * @var
     */
    protected $gender;

    /**
     * Get ID.
     *
     * @return int
     */
    public function getCustomerId()
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
    public function setCustomerId($id)
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

}