<?php

/**
 * Description of IndexControllerTest
 *
 * @author Sean
 */
class IndexControllerTest
    extends ControllerTestCase
{
    
    public function testCanGetDefaultIndexPage()
    {
        $this->dispatch("/");
        $this->assertController("index");
        $this->assertAction("index");
        $this->assertResponseCode(200);
        
        //echo $this->getResponse()->getBody(); 
        
        $this->assertQuery('#message', "default");
        //$this->assertXpathContentContains('id("message")', "default");//doesnt work
    }
    
    public function testCanSetMessageIndexPage()
    {
        $this->getRequest()->setMethod("GET")->setParam('m', 'test message');
        $this->dispatch("/");
        $this->assertController("index");
        $this->assertAction("index");
        $this->assertResponseCode(200);
        
        //echo $this->getResponse()->getBody(); 
        
        //$this->assertQuery('#message', "default");
        $this->assertQuery('#message', "test message");
        //$this->assertXpathContentContains('id("message")', "default");//doesnt work
    }
    
    public function testCanGetToAboutPage()
    {
        $this->dispatch("/index/about/");
        
        //$this->getResponse()->getBody(); 
        
        $this->assertController("index");
        $this->assertAction("about");
        $this->assertResponseCode(200);
                
    }        
}
