<?php

class AboutController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->pageTitle = "About GameNomad";
    }

    public function contactAction()
    {
        // action body
    }


}



