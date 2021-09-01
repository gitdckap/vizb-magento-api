<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace DCKAP\CustomizedAPI\Model;


/**
 * Class Response
 * @package DCKAP\CustomizedAPI\Model
 */
class Response implements \DCKAP\CustomizedAPI\Api\Data\ResponseInterface
{

    /**
     * @var
     */
    protected $responseDetail;
    /**
     * @var
     */
    protected $message;
    /**
     * @var
     */
    protected $status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return $this
     */
    public function getResponse()
    {
        return $this->responseDetail;
    }

    /**
     * @param $responseDetail
     *
     * @return $this
     */
    public function setResponse($responseDetail)
    {
        $this->responseDetail = $responseDetail;
        return $this;
    }


}