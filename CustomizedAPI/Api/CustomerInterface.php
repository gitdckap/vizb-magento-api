<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api;


/**
 * Interface CustomerInterface
 * @package DCKAP\CustomizedAPI\Api
 */
interface CustomerInterface
{

    /**
     * get customer list.
     *
     * @return \Magento\Customer\Api\Data\CustomerSearchResultsInterface
     * @api
     */
    public function getCustomers();

    /**
     * get recent customer list.
     *
     * @param int $id .
     * @return \Magento\Customer\Api\Data\CustomerSearchResultsInterface
     * @api
     */
    public function getRecentCustomers($id);
}