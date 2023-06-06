<?php
namespace IoVista\ProductList\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Customer\Model\Url as CustomerUrl;


class Index extends Action
{
    protected $resultPageFactory;
    protected $customerSession;
    protected $customerUrl;

    public function __construct(Context $context, PageFactory $resultPageFactory,
     CustomerSession $customerSession,
        CustomerUrl $customerUrl
    )
    {
        $this->resultPageFactory = $resultPageFactory;
          $this->customerSession = $customerSession;
        $this->customerUrl = $customerUrl;
        parent::__construct($context);
    }

    public function execute()
    {
         if (!$this->customerSession->isLoggedIn()) {
            $this->customerSession->setAfterAuthUrl($this->customerUrl->getLoginUrl());
            $this->customerSession->authenticate();
            return;
        }

        $mode = $this->getRequest()->getParam('mode');
        if ($mode == 'slider') {
        
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('New Product List'));
        return $resultPage;
        } else {
        
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('New Product List'));
        return $resultPage;
        }
    }
}
