<?php
namespace IoVista\ProductLimit\Model;

class Config
{
    const XML_PATH_PRODUCT_LIMIT = 'custom_product_limit/limit_settings/product_limit';

    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getProductLimit()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_PRODUCT_LIMIT);
    }
}
