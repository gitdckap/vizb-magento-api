<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api;

/**
 * Interface OrderListInterface
 * @package DCKAP\CustomizedAPI\Api
 */
interface OrderListInterface
{

    /**
     * get Order List.
     *
     * @api
     *
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterface
     */
    public function getOrderList();


    /**
     * get Order List.
     *
     * @api
     * @param int $id.
     *
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterface
     */
    public function getRecentOrderList($id);
}