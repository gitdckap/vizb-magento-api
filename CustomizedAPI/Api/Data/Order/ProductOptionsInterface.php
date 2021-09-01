<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace DCKAP\CustomizedAPI\Api\Data\Order;

/**
 * Interface ProductOptionsInterface
 * @package DCKAP\CustomizedAPI\Api\Data\Order
 */
interface ProductOptionsInterface
{

	 /**
     *
     * @return string
     */
	public function getOptionId();

    /**
     * @param string $optionId
     * @return $this
     */
    public function setOptionId($optionId);


}