<?php

class metapoly_mystaticpagesgenericpageModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('module:MONPROJET_mystaticpages/views/templates/front/genericpage.tpl');
    }
}