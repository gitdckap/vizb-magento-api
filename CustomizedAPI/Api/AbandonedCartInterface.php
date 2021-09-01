<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Api;

/**
 * Interface AbandonedCartInterface
 * @package DCKAP\CustomizedAPI\Api
 */
interface AbandonedCartInterface
{

    /**
     * get active cart data.
     *
     * @return \DCKAP\CustomizedAPI\Api\Data\ResponseInterface
     * @api
     */
    public function getActiveCart();
}