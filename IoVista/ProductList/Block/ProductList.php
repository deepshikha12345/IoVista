<?php
namespace IoVista\ProductList\Block;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use IoVista\ProductLimit\Model\Config as Config;

class ProductList extends Template
{
    protected $customerSession;
    protected $productCollectionFactory;
    protected $config;

    public function __construct(
        Template\Context $context,
        CustomerSession $customerSession,
        ProductCollectionFactory $productCollectionFactory,
        Config $config,
        array $data = []
    ) {
        $this->customerSession = $customerSession;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->config = $config;
        parent::__construct($context, $data);
    }

    public function getProducts()
    {
        $customer = $this->customerSession->getCustomer();
        $customerId = $customer->getId();
        $product_limit = $this->config->getProductLimit();
        $productCollection = $this->productCollectionFactory->create();
        $productCollection->addAttributeToSelect('*');
        $productCollection->addAttributeToFilter('handle_display','1');
        $productCollection->setPageSize($product_limit);
        $productCollection->setCurPage(1);
        return $productCollection;
    }
}
