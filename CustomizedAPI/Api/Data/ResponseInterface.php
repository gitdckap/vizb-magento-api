<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace DCKAP\CustomizedAPI\Api\Data;


/**
 * Interface ResponseInterface
 * @package DCKAP\CustomizedAPI\Api\Data
 */
interface ResponseInterface
{

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status);

    /**
     * @return string|null
     */
    public function getMessage();

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message);

    /**
     * @return \DCKAP\CustomizedAPI\Api\Data\QuoteResponseInterface
     */
    public function getResponse();

    /**
     * @param $responseDetail
     *
     * @return $this
     */
    public function setResponse($responseDetail);


}