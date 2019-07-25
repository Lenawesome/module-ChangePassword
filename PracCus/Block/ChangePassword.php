<?php
namespace ABC\PracCus\Block;
class ChangePassword extends \Magento\Framework\View\Element\Template
{
    protected $registry;
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Framework\Registry $registry
    )
    {
        $this->registry = $registry;
        parent::__construct($context);
    }
    public function getCustomerId(){
        $customerId = $this->registry->registry('customer_id');
        return $customerId;
    }
}
