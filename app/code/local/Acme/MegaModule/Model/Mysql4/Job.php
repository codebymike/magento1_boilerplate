<?php

class Acme_MegaModule_Model_Mysql4_Job extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("megamodule/job", "job_id");
        //code...
    }
}