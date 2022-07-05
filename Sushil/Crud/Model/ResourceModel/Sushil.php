<?php
namespace Sushil\Crud\Model\ResourceModel;

class Sushil extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('sushil_table', 'id_column');
    }

}
