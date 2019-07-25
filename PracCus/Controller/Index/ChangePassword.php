<?php
namespace ABC\PracCus\Controller\Index;
class ChangePassword extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory;
    protected $_registry;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\Registry $registry   
    )
    {
        $this->_registry = $registry;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    
    public function execute()
	{
        $customer_id = $this->getRequest()->getParam('id');
        $this->_registry->register('customer_id',$customer_id);
		return $this->_pageFactory->create();
	}
}   
