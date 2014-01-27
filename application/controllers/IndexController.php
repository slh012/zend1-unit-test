<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $message = $this->getParam('m');
        if($message)
        {
            $this->view->message = $message;
        }else{
            $this->view->message = "default";
        }
    }

    public function aboutAction()
    {
        // action body
    }


}



