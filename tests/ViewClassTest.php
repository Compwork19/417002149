<?php
use PhpUnit\Framework\Testcase;


class ViewTest extends Testcase{
    public function testViewObject():void{
        $view = new View();
        $this->assertTrue($view,"is a view");
    }
    public function testSetTemplates()
    {

    }

    public function testDisplay(){

    }

    public function testAddVar(){
        $this->store->addVar("frank burk","1234");
        $user = $this->store->getVar("1234");
        $this->assertEquals($user['name'],"frank burk");
        $this->assertEquals($user['value'],"1234");
    }
}
?>