<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data;

/**
 * Interface QuoteAddressInterface
 * @package DCKAP\CustomizedAPI\Api\Data
 */
interface QuoteAddressInterface
{
    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getRegion();

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region);

    /**
     * @return int
     */
    public function getRegionId();

    /**
     * @param int $regionId
     * @return $this
     */
    public function setRegionId($regionId);

    /**
     * @return int
     */
    public function getPostCode();

    /**
     * @param int $postCode
     * @return $this
     */
    public function setPostCode($postCode);

    /**
     * @return string
     */
    public function getCountryId();

    /**
     * @param string $countryId
     * @return $this
     */
    public function setCountryId($countryId);


    /**
     * @return string
     */
    public function getTelephone();

    /**
     * @param string $telephone
     * @return $this
     */
    public function setTelephone($telephone);


}