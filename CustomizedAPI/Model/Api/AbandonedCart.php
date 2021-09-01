<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace DCKAP\CustomizedAPI\Model\Api;

/**
 * Class AbandonedCart
 * @package DCKAP\CustomizedAPI\Model\Api
 */
class AbandonedCart implements \DCKAP\CustomizedAPI\Api\AbandonedCartInterface
{
    protected $responseInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\QuoteResponseInterfaceFactory
     */
    protected $quoteResponseInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\QuoteDetailInterfaceFactory
     */
    protected $quoteDetailInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\QuoteItemInterfaceFactory
     */
    protected $quoteItemInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\QuoteCustomerInterfaceFactory
     */
    protected $quoteCustomerInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\QuoteAddressInterfaceFactory
     */
    protected $quoteAddressInterfaceFactory;
    /**
     * @var \Magento\Quote\Model\ResourceModel\Quote\Collection
     */
    protected $quoteCollection;
    /**
     * @var \Magento\Quote\Model\ResourceModel\Quote\Address\CollectionFactory
     */
    protected $quoteAddressCollection;
    /**
     * @var
     */
    protected $GuestCartRepository;
    /**
     * @var \Magento\Customer\Model\Customer
     */
    protected $customers;

    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;


    /**
     * AbandonedCart constructor.
     * @param \DCKAP\CustomizedAPI\Api\Data\QuoteResponseInterfaceFactory $quoteResponseInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\QuoteDetailInterfaceFactory $quoteDetailInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\QuoteItemInterfaceFactory $quoteItemInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\QuoteCustomerInterfaceFactory $quoteCustomerInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\QuoteAddressInterfaceFactory $quoteAddressInterfaceFactory
     * @param \Magento\Quote\Model\ResourceModel\Quote\CollectionFactory $quoteCollection
     * @param \Magento\Quote\Model\ResourceModel\Quote\Address\CollectionFactory $quoteAddressCollection
     * @param \Magento\Quote\Api\CartRepositoryInterfaceFactory $GuestCartRepository
     * @param \Magento\Customer\Model\Customer $customers
     * @param \Magento\Framework\App\Request\Http $request
     */
    public function __construct(
        \DCKAP\CustomizedAPI\Api\Data\ResponseInterfaceFactory $responseInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\QuoteResponseInterfaceFactory $quoteResponseInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\QuoteDetailInterfaceFactory $quoteDetailInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\QuoteItemInterfaceFactory $quoteItemInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\QuoteCustomerInterfaceFactory $quoteCustomerInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\QuoteAddressInterfaceFactory $quoteAddressInterfaceFactory,
        \Magento\Quote\Model\ResourceModel\Quote\CollectionFactory $quoteCollection,
        \Magento\Quote\Model\ResourceModel\Quote\Address\CollectionFactory $quoteAddressCollection,
        \Magento\Quote\Api\CartRepositoryInterfaceFactory $GuestCartRepository,
        \Magento\Customer\Model\Customer $customers,
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->responseInterfaceFactory = $responseInterfaceFactory;
        $this->quoteResponseInterfaceFactory = $quoteResponseInterfaceFactory;
        $this->quoteDetailInterfaceFactory = $quoteDetailInterfaceFactory;
        $this->quoteItemInterfaceFactory = $quoteItemInterfaceFactory;
        $this->quoteCustomerInterfaceFactory = $quoteCustomerInterfaceFactory;
        $this->quoteAddressInterfaceFactory = $quoteAddressInterfaceFactory;
        $this->quoteCollection = $quoteCollection;
        $this->quoteAddressCollection = $quoteAddressCollection;
        $this->_guestCartRepository = $GuestCartRepository;
        $this->customers = $customers;
        $this->request = $request;
    }


    /**
     * Get active cart details
     * @return array|\DCKAP\CustomizedAPI\Api\Data\ResponseInterface
     */
    public function getActiveCart()
    {
        $response = $this->responseInterfaceFactory->create();

        $quoteResponse = $this->quoteResponseInterfaceFactory->create();

        try {
            $page_no = ($this->request->getParam('page_no')?$this->request->getParam('page_no'):1);
            $page_size = ($this->request->getParam('page_size')?$this->request->getParam('page_size'):10);

            $totalQuoteCollection = $this->quoteCollection->create()
                ->addFieldToFilter(
                    'is_active',
                    ['eq' => 1]
                );

            $quoteCollection = $this->quoteCollection->create()
                ->addFieldToFilter(
                    'is_active',
                    ['eq' => 1]
                )
                ->setPageSize($page_size)
                ->setCurPage($page_no);

            foreach ($quoteCollection as $quoteItem) {

                $quoteDetails = $this->quoteDetailInterfaceFactory->create();
                $quoteDetails->setId($quoteItem->getId());
                $quoteDetails->setCreatedAt($quoteItem->getCreatedAt());
                $quoteDetails->setUpdatedAt($quoteItem->getUpdatedAt());
                $quoteDetails->setConvertedAt($quoteItem->getConvertedAt());
                $quoteDetails->setIsActive($quoteItem->getIsActive());
                $quoteDetails->setIsVirtual($quoteItem->getIsVirtual());
                $quoteDetails->setReservedOrderId($quoteItem->getReservedOrderId());
                $quoteDetails->setOrigOrderId($quoteItem->getOrigOrderId());

                $quoteItemCollection = $this->_guestCartRepository->create()->get($quoteItem->getId());


                $quoteItemDetailsArr = [];
                foreach ($quoteItemCollection->getAllVisibleItems() as $quoteItems) {
                    $quoteItemDetails = $this->quoteItemInterfaceFactory->create();

                    $quoteItemDetails->setItemId($quoteItems->getId());
                    $quoteItemDetails->setName($quoteItems->getName());
                    $quoteItemDetails->setSku($quoteItems->getSku());
                    $quoteItemDetails->setPrice(round($quoteItems->getPrice(),2));
                    $quoteItemDetails->setQuantity($quoteItems->getQty());
                    $quoteItemDetailsArr[] = $quoteItemDetails;
                }
                $quoteDetails->setItems($quoteItemDetailsArr);

                $quoteCustomer = $this->quoteCustomerInterfaceFactory->create();

                $customer = $this->customers->load($quoteItem->getCustomerId());
                $gender = $customer->getResource()->getAttribute('gender')->getSource()->getOptionText($customer->getData('gender'));

                $quoteCustomer->setCustomerId(($quoteItem->getCustomerId()) ? $customer->getId() : null);
                $quoteCustomer->setName(($quoteItem->getCustomerId()) ? $customer->getName() : null);
                $quoteCustomer->setEmail(($quoteItem->getCustomerId()) ? $customer->getEmail() : null);
                $quoteCustomer->setGender(($quoteItem->getCustomerId()) ? $gender : null);
                $quoteCustomerArr[] = $quoteCustomer;
                $quoteDetails->setCustomer($quoteCustomerArr);

                $quoteAddress = $this->quoteAddressInterfaceFactory->create();

                $quoteAddressCollection = $this->quoteAddressCollection->create()
                    ->addFieldToFilter(
                        'address_type',
                        ['eq' => 'billing']
                    )
                    ->addFieldToFilter(
                        'quote_id',
                        ['eq' => $quoteItem->getId()]
                    );

                $quoteAddress->setFirstname($quoteAddressCollection->getData()[0]['firstname']);
                $quoteAddress->setLastname($quoteAddressCollection->getData()[0]['lastname']);
                $quoteAddress->setStreet($quoteAddressCollection->getData()[0]['street']);
                $quoteAddress->setCity($quoteAddressCollection->getData()[0]['city']);
                $quoteAddress->setRegion($quoteAddressCollection->getData()[0]['region']);
                $quoteAddress->setRegionId($quoteAddressCollection->getData()[0]['region_id']);
                $quoteAddress->setPostcode($quoteAddressCollection->getData()[0]['postcode']);
                $quoteAddress->setCountryId($quoteAddressCollection->getData()[0]['country_id']);
                $quoteAddress->setTelephone($quoteAddressCollection->getData()[0]['telephone']);

                $quoteAddressArr[] = $quoteAddress;
                $quoteDetails->setBillingAddress($quoteAddressArr);

                $quoteShippingAddress = $this->quoteAddressInterfaceFactory->create();

                $quoteShippingAddressCollection = $this->quoteAddressCollection->create()
                    ->addFieldToFilter(
                        'address_type',
                        ['eq' => 'shipping']
                    )
                    ->addFieldToFilter(
                        'quote_id',
                        ['eq' => $quoteItem->getId()]
                    );

                $quoteShippingAddress->setFirstname($quoteShippingAddressCollection->getData()[0]['firstname']);
                $quoteShippingAddress->setLastname($quoteShippingAddressCollection->getData()[0]['lastname']);
                $quoteShippingAddress->setStreet($quoteShippingAddressCollection->getData()[0]['street']);
                $quoteShippingAddress->setCity($quoteShippingAddressCollection->getData()[0]['city']);
                $quoteShippingAddress->setRegion($quoteShippingAddressCollection->getData()[0]['region']);
                $quoteShippingAddress->setRegionId($quoteShippingAddressCollection->getData()[0]['region_id']);
                $quoteShippingAddress->setPostcode($quoteShippingAddressCollection->getData()[0]['postcode']);
                $quoteShippingAddress->setCountryId($quoteShippingAddressCollection->getData()[0]['country_id']);
                $quoteShippingAddress->setTelephone($quoteShippingAddressCollection->getData()[0]['telephone']);

                $quoteShippingAddressArr[] = $quoteShippingAddress;
                $quoteDetails->setShippingAddress($quoteShippingAddressArr);

                $quoteDetailsArr[] = $quoteDetails;

                $quoteCustomerArr = [];
                $quoteAddressArr = [];
                $quoteShippingAddressArr = [];
            }
            $quoteResponse->setCartDetails($quoteDetailsArr);
            $quoteResponse->setOverallCount(count($totalQuoteCollection));
            //$quoteResponses[] = $quoteResponse;

            $response->setStatus("true");
            $response->setResponse($quoteResponse);

            return $response;
            //return $quoteResponses;

        } catch (\Exception $e) {
            $response->setStatus("false");
            $response->setMessage($e->getMessage());
            return $response;
        }



    }
}
