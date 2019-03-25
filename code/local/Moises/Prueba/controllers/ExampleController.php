<?php

class Moises_Prueba_ExampleController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
    	// "Fetch" display
        $this->loadLayout();
        
        // "Inject" into display
        // THe below example will not actualy show anything since the core/template is empty
        //$this->_addContent($this->getLayout()->createBlock('core/template'));
        $this->_addContent(
                $this->getLayout()
                     ->createBlock('moises_prueba/adminhtml_example')
                     ->setTemplate('prueba/adminblock.phtml')
            );
        
        // echo "Hello developer...";
                
        // "Output" display
        $this->renderLayout();
    }	
}