<?php
namespace ABC\PracCus\Block;
class ShowAllCustomer extends \Magento\Framework\View\Element\Template
{
    private $_collectionFactory;
    private $_encryptor;
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Framework\Encryption\EncryptorInterface $encryptor,
    \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $collectionFactory)
    {
        $this->_encryptor = $encryptor;
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context);
    }
    
    public function getCustomer(){
        $listCustomer = $this->_collectionFactory->create();
        $listCustomer->addAttributeToSelect('*');
        return $listCustomer;
    }
    public function decrypt($hash){
        $hash = $this->_encryptor->decrypt($hash);
        return $hash;
    }
}
