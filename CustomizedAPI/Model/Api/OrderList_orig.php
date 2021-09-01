<?php
/*
 * @author     DCKAP
 * @package    DCKAP_CustomizedAPI
 * @copyright  Copyright (c) 2020 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\CustomizedAPI\Model\Api;

/**
 * Class OrderList
 * @package DCKAP\CustomizedAPI\Model\Api
 */
class OrderList implements \DCKAP\CustomizedAPI\Api\OrderListInterface
{
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterfaceFactory
     */
    protected $responseInterfaceFactory;

    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\Order\OrderResponseInterfaceFactory
     */
    protected $orderResponseInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\Order\OrderDetailInterfaceFactory
     */
    protected $orderDetailInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\Order\OrderItemInterfaceFactory
     */
    protected $orderItemInterfaceFactory;
    /**
     * @var \DCKAP\CustomizedAPI\Api\Data\Order\OrderAddressInterfaceFactory
     */
    protected $orderAddressInterfaceFactory;
    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\CollectionFactory
     */
    protected $orderCollectionFactory;
    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory
     */
    protected $orderItemCollectionFactory;
    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\Address\CollectionFactory
     */
    protected $orderAddressCollectionFactory;
    /**
     * @var \Magento\Directory\Model\ResourceModel\Region\CollectionFactory
     */
    protected $regionCollectionFactory;
    /**
     * @var \Magento\Sales\Model\OrderFactory
     */
    protected $orderFactory;
    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;
    
    /**
     * OrderList constructor.
     * @param \DCKAP\CustomizedAPI\Api\Data\Order\OrderResponseInterfaceFactory $orderResponseInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\Order\OrderDetailInterfaceFactory $orderDetailInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\Order\OrderItemInterfaceFactory $orderItemInterfaceFactory
     * @param \DCKAP\CustomizedAPI\Api\Data\Order\OrderAddressInterfaceFactory $orderAddressInterfaceFactory
     * @param \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory
     * @param \Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory $orderItemCollectionFactory
     * @param \Magento\Sales\Model\ResourceModel\Order\Address\CollectionFactory $orderAddressCollectionFactory
     * @param \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory
     * @param \Magento\Sales\Model\OrderFactory $orderFactory
     * @param \Magento\Framework\App\Request\Http $request
     */
    public function __construct(
        \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterfaceFactory $responseInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\Order\OrderResponseInterfaceFactory $orderResponseInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\Order\OrderDetailInterfaceFactory $orderDetailInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\Order\OrderItemInterfaceFactory $orderItemInterfaceFactory,
        \DCKAP\CustomizedAPI\Api\Data\Order\OrderAddressInterfaceFactory $orderAddressInterfaceFactory,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory,
        \Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory $orderItemCollectionFactory,
        \Magento\Sales\Model\ResourceModel\Order\Address\CollectionFactory $orderAddressCollectionFactory,
        \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        \Magento\Framework\App\Request\Http $request
    )
    {
        $this->responseInterfaceFactory = $responseInterfaceFactory;
        $this->orderResponseInterfaceFactory = $orderResponseInterfaceFactory;
        $this->orderDetailInterfaceFactory = $orderDetailInterfaceFactory;
        $this->orderItemInterfaceFactory = $orderItemInterfaceFactory;
        $this->orderAddressInterfaceFactory = $orderAddressInterfaceFactory;
        $this->orderCollectionFactory = $orderCollectionFactory;
        $this->orderItemCollectionFactory = $orderItemCollectionFactory;
        $this->orderAddressCollectionFactory = $orderAddressCollectionFactory;
        $this->regionCollectionFactory = $regionCollectionFactory;
        $this->orderFactory = $orderFactory;
        $this->request = $request;
    }


    /**
     * Get order list.
     * @param int $page
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterface
     */
    public function getOrderList()
    {

        $page_no = ($this->request->getParam('page_no') ? $this->request->getParam('page_no') : 1);
        $page_size = ($this->request->getParam('page_size') ? $this->request->getParam('page_size') : 10);

        $totalOrderCollection = $this->orderCollectionFactory->create()
        ->setPageSize($page_size)
            ->setCurPage($page_no);
        $orderCollection = $this->orderCollectionFactory->create()
            ->setPageSize($page_size)
            ->setCurPage($page_no);
        try {
            return $this->getOrderData($totalOrderCollection, $orderCollection);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Get order list data
     * @param $totalOrderCollection
     * @param $orderCollection
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterface
     */
    public function getOrderData($totalOrderCollection, $orderCollection)
    {
        $response = $this->responseInterfaceFactory->create();
        $orderResponse = $this->orderResponseInterfaceFactory->create();

        try {
            foreach ($orderCollection as $order) {

                $orderDetails = $this->orderDetailInterfaceFactory->create();
                $orderDetails->setId($order->getEntityId());
                $orderDetails->setStatus($order->getStatus());
                $orderDetails->setCreatedAt($order->getCreatedAt());
                $orderDetails->setUpdatedAt($order->getUpdatedAt());
                $orderDetails->setIsVirtual($order->getIsVirtual());
                $orderDetails->setIncrementId($order->getIncrementId());
                $orderDetails->setStoreId($order->getStoreId());
                $orderDetails->setQuoteId($order->getQuoteId());
                $orderDetails->setShippingDescription($order->getShippingDescription());
                $orderDetails->setMethod($order->getShippingMethod());
                $orderDetails->setShippingAmount(round($order->getShippingAmount(), 2));
                $orderDetails->setDiscountAmount(round($order->getDiscountAmount(), 2));
                $orderDetails->setDiscountInvoiced(round($order->getDiscountInvoiced(), 2));
                $orderDetails->setGrandTotal(round($order->getGrandTotal(), 2));
                $orderDetails->setBaseCurrencyCode($order->getBaseCurrencyCode());
                $orderDetails->setCustomerId($order->getCustomerId());
                $orderDetails->setSubtotalInclTax(round($order->getSubtotalInclTax(), 2));

                // get ordered item details
                $items = $this->orderItemCollectionFactory->create()
                    ->addFieldToFilter(
                        'order_id',
                        ['eq' => $order->getEntityId()]
                    );
                $itemsArr = [];
                foreach ($items as $item) {
                    $options = $item->getProductOptions();
                    $i=0;
                    $productOptions=[];
                    if (isset($options['options']) && !empty($options['options'])) {        
                    foreach ($options['options'] as $option) {
                       $optionId = $option['option_id'];
                       $optionValueName = $option['value'];
                       $optionLabel = $option['label'];
                       $optionValue = $option['option_value'];

                       $productOptions[$i]['option_id'] = $optionId;
                       $productOptions[$i]['option_id_name'] = $optionLabel;
                       $productOptions[$i]['option_value'] = $optionValue;
                       $productOptions[$i]['option_value_name'] = $optionValueName;
                       $i++;  
                    }
                }

                    $orderItem = $this->orderItemInterfaceFactory->create();
                    $orderItem->setProductOptions($productOptions);                  
                    $orderItem->setName($item->getName());
                    $orderItem->setSku($item->getSku());
                    $orderItem->setItemId($item->getItemId());
                    $orderItem->setPrice(round($item->getPrice(), 2));
                    $orderItem->setQuantityOrdered($item->getQtyOrdered());
                    $orderItem->setQtyShipped($item->getQtyShipped());
                    $orderItem->setOriginalPrice(round($item->getOriginalPrice(), 2));
                    $orderItem->setOrderId($item->getOrderId());
                    $orderItem->setQuoteItemId($item->getQuoteItemId());
                    $orderItem->setNoDiscount($item->getNoDiscount());
                    $orderItem->setFreeShipping($item->getFreeShipping());
                    $orderItem->setIsQtyDecimal($item->getIsQtyDecimal());
                    $orderItem->setWeight(round($item->getWeight(), 2));
                    $orderItem->setProductType($item->getProductType());
                    $orderItem->setProductId($item->getProductId());


                    $itemsArr[] = $orderItem; 
                }
                $orderDetails->setItems($itemsArr);
                // get shipping address details
                $address = $this->orderAddressCollectionFactory->create()
                    ->addFieldToFilter(
                        'parent_id',
                        ['eq' => $order->getEntityId()]
                    )
                    ->addFieldToFilter(
                        'address_type',
                        ['eq' => 'shipping']
                    );

                $addressArr = [];
                foreach ($address as $address) {
                    $orderAddress = $this->orderAddressInterfaceFactory->create();
                    $orderAddress->setFirstname($address->getFirstname());
                    $orderAddress->setLastname($address->getLastname());
                    $orderAddress->setemail($address->getEmail());
                    $orderAddress->setCompany($address->getCompany());
                    $orderAddress->setRegion($address->getRegion());
                    $orderAddress->setRegionId($address->getRegionId());
                    $orderAddress->setCity($address->getcity());
                    $orderAddress->setCountryId($address->getCountryId());
                    $orderAddress->setCustomerAddressId($address->getCustomerAddressId());
                    $orderAddress->setPostCode($address->getPostCode());
                    $orderAddress->setParentId($address->getParentId());
                    $orderAddress->setStreet($address->getStreet());
                    $orderAddress->setTelephone($address->getTelephone());

                    $regionCode = $this->regionCollectionFactory->create()
                        ->addRegionNameFilter($address->getRegion())
                        ->getFirstItem();
                    $orderAddress->setRegionCode($regionCode->getCode());

                    $addressArr[] = $orderAddress;
                }

                $orderDetails->setShippingAddress($addressArr);


                $orderDetailsArr[] = $orderDetails;

            }
        
            $orderResponse->setOrderDetails($orderDetailsArr);

            $orderResponse->setOverallOrdercount(count($totalOrderCollection));

            $response->setStatus("true");
            $response->setResponse($orderResponse);

            return $response;
        } catch (\Exception $e) {
            $response->setStatus("false");
            $response->setMessage($e->getMessage());
            return $response;
        }
    }

    /**
     * Get recent order list.
     * @param int $id
     * @return \DCKAP\CustomizedAPI\Api\Data\Order\ResponseInterface
     */
    public function getRecentOrderList($id)
    {
        $page_no = ($this->request->getParam('page_no') ? $this->request->getParam('page_no') : 1);
        $page_size = ($this->request->getParam('page_size') ? $this->request->getParam('page_size') : 10);

        $totalOrderCollection = $this->orderCollectionFactory->create()
            ->addFieldToFilter(
                'entity_id',
                ['gt' => $id]
            );
        $orderCollection = $this->orderCollectionFactory->create()
            ->addFieldToFilter(
                'entity_id',
                ['gt' => $id]
            )
            ->setPageSize($page_size)
            ->setCurPage($page_no);
        try {
            return $this->getOrderData($totalOrderCollection, $orderCollection);
        }
        catch (\Exception $e) {
            echo $e->getMessage();

        }
    }
}