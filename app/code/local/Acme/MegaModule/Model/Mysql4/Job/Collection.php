<?php

class Acme_MegaModule_Model_Mysql4_Job_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init("megamodule/job");
    }
}