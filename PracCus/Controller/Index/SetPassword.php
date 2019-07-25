<?php
namespace ABC\PracCus\Controller\Index;
class SetPassword extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory;
    protected $customerRepository;
    protected $customerFactory;
    protected $resultRedirect;
    protected $encryptor;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Customer\Model\CustomerFactory $customerFactory,
        \Magento\Framework\Controller\ResultFactory $result,
        \Magento\Framework\Encryption\EncryptorInterface $encryptor
    )
    {
        $this->resultRedirect = $result;
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
        $this->_pageFactory = $pageFactory;
        $this->encryptor = $encryptor;
        return parent::__construct($context);
    }
    
    public function execute()
	{
        $password = $_POST['password'];
        $customer_id = $_POST['submitbtn'];
        $customer = $this->customerRepository->getById($customer_id);
        $this->customerRepository->save($customer, $this->encryptor->getHash($password, true));
        echo "Done";
		exit();
	}
}   
