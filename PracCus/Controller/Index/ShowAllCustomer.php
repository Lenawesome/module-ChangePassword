<?php
namespace ABC\PracCus\Controller\Index;
class ShowAllCustomer extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    
    public function execute()
	{
		// $post = $this->_postFactory->create();
		// $collection = $post->getCollection();
		// foreach($collection as $item){
		// 	echo "<pre>";
		// 	print_r($item->getData());
		// 	echo "</pre>";
		// }
		// exit();
		return $this->_pageFactory->create();
	}
}   
