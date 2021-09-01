<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace DCKAP\CustomizedAPI\Model\Order;

/**
 * Class OrderAddress
 * @package DCKAP\CustomizedAPI\Model\Order
 */
class OrderAddress  implements \DCKAP\CustomizedAPI\Api\Data\Order\OrderAddressInterface
{
    /**
     * @var
     */
    protected $firstname;
    /**
     * @var
     */
    protected $lastname;
    /**
     * @var
     */
    protected $street;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $region;
    /**
     * @var
     */
    protected $regionId;
    /**
     * @var
     */
    protected $postCode;
    /**
     * @var
     */
    protected $countryId;
    /**
     * @var
     */
    protected $telephone;
    /**
     * @var
     */
    protected $parentId;
    /**
     * @var
     */
    protected $addressId;
    /**
     * @var
     */
    protected $email;
    /**
     * @var
     */
    protected $company;
    /**
     * @var
     */
    protected $regioncode;

    /**
     * @return string
     */
    public function getFirstname(){
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname){
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(){
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname){
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(){
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street){
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(){
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city){
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(){
        return $this->region;
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region){
        $this->region = $region;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegionId(){
        return $this->regionId;
    }

    /**
     * @param int $regionId
     * @return $this
     */
    public function setRegionId($regionId){
        $this->regionId = $regionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode(){
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     * @return $this
     */
    public function setRegionCode($regionCode){
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode(){
        return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return $this
     */
    public function setPostCode($postCode){
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryId(){
        return $this->countryId;
    }

    /**
     * @param string $countryId
     * @return $this
     */
    public function setCountryId($countryId){
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone(){
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return $this
     */
    public function setTelephone($telephone){
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId(){
       return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return $this
     */
    public function setParentId($parentId){
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerAddressId(){
       return $this->addressId;
    }

    /**
     * @param int $addressId
     * @return $this
     */
    public function setCustomerAddressId($addressId){
        $this->addressId = $addressId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }


    /**
     * @return string
     */
    public function getCompany(){
       return $this->company;
    }

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany($company){
        $this->company = $company;
        return $this;
    }


}