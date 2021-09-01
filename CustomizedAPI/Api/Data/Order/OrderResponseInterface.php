<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api\Data\Order;

use DCKAP\CustomizedAPI\Model\Order\OrderResponse;

/**
 * Interface OrderResponseInterface
 * @package DCKAP\CustomizedAPI\Api\Data\Order
 */
interface OrderResponseInterface
{
    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\OrderDetailInterface[]
     */
    public function getOrderDetails();

    /**
     * @param array $response
     * @return $this
     */
    public function setOrderDetails($response);


    /**
     * Get Total count of Active Cart.
     *
     * @return int
     */
    public function getOverallOrdercount();

    /**
     * Set Total Count.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setOverallOrdercount($count);


}