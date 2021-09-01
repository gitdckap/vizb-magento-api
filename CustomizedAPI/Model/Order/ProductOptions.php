<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model\Order;


/**
 * Class ProductOptions
 * @package DCKAP\CustomizedAPI\Model\Order
 */
class ProductOptions implements \DCKAP\CustomizedAPI\Api\Data\Order\ProductOptionsInterface
{
    /**
     * @var
     */
    protected $optionId;   


    /**
     * Get ID.
     *
     * @return string
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set ID.
     *
     * @param string $optionId
     *
     * @return $this
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
        return $this;
    }    

}