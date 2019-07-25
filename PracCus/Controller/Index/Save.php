<?php
namespace ABC\PracCus\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;



	protected $resultRedirect;

	protected $_customerFactory;
	protected $_storeManager;

	public function __construct(
	\Magento\Framework\App\Action\Context $context,
	\Magento\Framework\View\Result\PageFactory $pageFactory,
	\Magento\Framework\Controller\ResultFactory $result,
	\Magento\Customer\Model\CustomerFactory $customerFactory,
	\Magento\Store\Model\StoreManagerInterface $storeManager
	)
	{
	$this->_pageFactory = $pageFactory;
	$this->_storeManager = $storeManager;
	$this->resultRedirect = $result;
	$this->_customerFactory = $customerFactory;
	return parent::__construct($context);
	}

	public function execute()
	{
	$websiteId = $this->_storeManager->getWebsite()->getWebsiteId();

	// Instantiate object (this is the most important part)
	$customer = $this->_customerFactory->create();
	$customer->setWebsiteId($websiteId);

	// Preparing data for new customer
	$customer->setEmail("email@domain.com");
	$customer->setFirstname("First Name");
	$customer->setLastname("abcLast name");
	$customer->setPassword("ngocanh123");

	// Save data
	$customer->save();
	// $post = $this->_postFactory->create();
	// if (isset($_POST['editbtn'])) {
	// $post->setId($_POST['editbtn']);
	// $post->setName($_POST['name']);
	// $post->setUrlKey($_POST['url']);
	// $post->setContent($_POST['content']);
	// $post->setStatus($_POST['status']);
	// $post->setUpdatedAt(date('Y-m-d H:i:s'));
	// }
	// elseif (isset($_POST['createbtn'])) {
	// $post->setName($_POST['name']);
	// $post->setUrlKey($_POST['url']);
	// $post->setContent($_POST['content']);
	// $post->setStatus($_POST['status']);
	// $post->setCreatedAt(date('Y-m-d H:i:s'));
	// $post->setUpdatedAt(date('Y-m-d H:i:s'));
	// }

	// $this->_postRepository->save($post);


	$resultRedirect = $this->resultRedirectFactory->create();
	$resultRedirect->setPath('praccus/index/index');
	return $resultRedirect;
	}
}
