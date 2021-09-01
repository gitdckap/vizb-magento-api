<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model\Order;


/**
 * Class OrderResponse
 * @package DCKAP\CustomizedAPI\Model\Order
 */
class OrderResponse implements \DCKAP\CustomizedAPI\Api\Data\Order\OrderResponseInterface
{

    /**
     * @var
     */
    protected $response;
    /**
     * @var
     */
    protected $count;

    /**
     * @return $this
     */
    public function getOrderDetails()
    {
        return $this->response;
    }

    /**
     * @param array $response
     * @return $this
     */
    public function setOrderDetails($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Get Total count of Active Cart.
     *
     * @return int
     */
    public function getOverallOrdercount()
    {
        return $this->count;
    }

    /**
     * Set Total Count.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setOverallOrdercount($count)
    {
        $this->count = $count;
        return $this;
    }
}