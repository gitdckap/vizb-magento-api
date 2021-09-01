<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model;


/**
 * Class QuoteResponse
 * @package DCKAP\CustomizedAPI\Model
 */
class QuoteResponse implements \DCKAP\CustomizedAPI\Api\Data\QuoteResponseInterface
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
    public function getCartDetails()
    {
        return $this->response;
    }

    /**
     * @param array $response
     * @return $this
     */
    public function setCartDetails($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Get Total count of Active Cart.
     *
     * @return int
     */
    public function getOverallCount()
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
    public function setOverallCount($count)
    {
        $this->count = $count;
        return $this;
    }
}