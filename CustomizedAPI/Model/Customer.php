<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model;


/**
 * Class Customer
 * @package DCKAP\CustomizedAPI\Model
 */
class Customer implements \DCKAP\CustomizedAPI\Api\CustomerInterface
{
    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    protected $_customerRepositoryInterface;
    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * Customer constructor.
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface
     * @param \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
     * @param \Magento\Framework\App\Request\Http $request
     */
    public function __construct(
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->_customerRepositoryInterface = $customerRepositoryInterface;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->request = $request;
    }

    /**
     * Get customer list
     * @return \Magento\Customer\Api\Data\CustomerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getCustomers()
    {
        $page_no = ($this->request->getParam('page_no')?$this->request->getParam('page_no'):1);
        $page_size = ($this->request->getParam('page_size')?$this->request->getParam('page_size'):10);

        $searchCriteria = $this->searchCriteriaBuilder
            ->setCurrentPage($page_no)
            ->setPageSize($page_size)
            ->create();
        $customers = $this->_customerRepositoryInterface->getList($searchCriteria);

        return $customers;
    }

    /**
     * Get recent customer list
     * @param int $id
     * @return \Magento\Customer\Api\Data\CustomerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getRecentCustomers($id)
    {
        $page_no = ($this->request->getParam('page_no')?$this->request->getParam('page_no'):1);
        $page_size = ($this->request->getParam('page_size')?$this->request->getParam('page_size'):10);

        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter(
                'entity_id',
                $id,
                'gt'
            )
            ->setCurrentPage($page_no)
            ->setPageSize($page_size)
            ->create();
        $customers = $this->_customerRepositoryInterface->getList($searchCriteria);

        return $customers;
    }

}