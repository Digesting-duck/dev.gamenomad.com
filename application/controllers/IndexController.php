<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
		$layout = $this->_helper->layout();
		$layout->setLayout('alternative_layout');
    }

    public function indexAction()
    {
		//$this->_helper->layout()->disableLayout();
    }
}

