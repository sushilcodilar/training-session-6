<?php
/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sushil\Crud\Controller\Data;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Sushil\Crud\Model\ResourceModel\Sushil\CollectionFactory;
use Sushil\Crud\Model\SushilFactory;

/**
 * Class Data
 * @package Sushil\Crud\Controller\Data
 */
class Data extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $_pageFactory;
    protected CollectionFactory $_CollectionFactory;
    protected SushilFactory $_SushilFactory;
    protected JsonFactory $resultJsonFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param JsonFactory $resultJsonFactory
     * @param CollectionFactory $CollectionFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        SushilFactory $SushilFactory,
        JsonFactory $resultJsonFactory,
        CollectionFactory $CollectionFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_CollectionFactory = $CollectionFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->_SushilFactory = $SushilFactory;
        return parent::__construct($context);
    }


    public function execute()
    {
        $data = $this->_CollectionFactory->create()->addFieldToFilter('id_column', 2);
        $resultJson = $this->resultJsonFactory->create();
        $Data = $data->getData();
        return $resultJson->setData($Data);



//        $add = $this->_SushilFactory->create();
//        $add->setData('firstname', 'mohan');
//        $add->setData('lastname', 'kumar');
//        $add->setData('address', 'Bangalore');
//        $add->setData('class_id', 20);
//        $add->save();


//        $edit = $this->_SushilFactory->create()->load(0, 'id_column');
//        $edit->setData('firstname', 'my');
//        $edit->save();

//        $delete = $this->_SushilFactory->create()->load(0, 'id_column');
//        $delete->delete();



    }
}
