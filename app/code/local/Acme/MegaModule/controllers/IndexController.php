<?php

class Acme_MegaModule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function IndexAction()
    {
        $this->loadLayout();   
        $this->getLayout()->getBlock("head")->setTitle($this->__("Customer Page"));
        $this->renderLayout(); 
    }
}