<?php

namespace Sushil\Crud\Model\ResourceModel\Sushil;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sushil\Crud\Model\Sushil', 'Sushil\Crud\Model\ResourceModel\Sushil');
    }
}
