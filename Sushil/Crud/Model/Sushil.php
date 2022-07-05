<?php

namespace Sushil\Crud\Model;

class Sushil extends \Magento\Framework\Model\AbstractModel{
    public function _construct(){
        $this->_init("Sushil\Crud\Model\ResourceModel\Sushil");
    }
}
