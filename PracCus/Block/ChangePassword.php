<?php
namespace ABC\PracCus\Block;
class ChangePassword extends \Magento\Framework\View\Element\Template
{
    protected $registry;
    protected $customerFactory;
    protected $customerRepository;
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Framework\Registry $registry,
    \Magento\Customer\Model\CustomerFactory $customerFactory,
    \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
    )
    {
        $this->registry = $registry;
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
        return parent::__construct($context);
    }
   
    public function getCustomerId(){
        $customerId = $this->registry->registry('customer_id');
        return $customerId;
    }
     public function getCustomer(){
        $customer = $customerRepository->getById($this->getCustomerId());
        return $customer;
    }
}
