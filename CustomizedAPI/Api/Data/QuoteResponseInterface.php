<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data;

use DCKAP\CustomizedAPI\Model\QuoteResponse;

/**
 * Interface QuoteResponseInterface
 * @package DCKAP\CustomizedAPI\Api\Data
 */
interface QuoteResponseInterface
{
    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\QuoteDetailInterface[]|null
     */
    public function getCartDetails();

    /**
     * @param array $response
     * @return $this
     */
    public function setCartDetails($response);


    /**
     * Get Total count of Active Cart.
     *
     * @return int
     */
    public function getOverallCount();

    /**
     * Set Total Count.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setOverallCount($count);

}