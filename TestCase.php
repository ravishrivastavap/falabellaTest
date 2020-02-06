<?php
/**
 * Created by Notepad++.
 * User: Ravi P. Shrivastava 
 * Date: 06/02/2020
 * Time: 17:10
 */


use PHPUnit\Framework\TestCase;


class WriterTest extends TestCase
{
    private $_writer;
    private $_result;
	private $_calcForm;

    public function prepare($remainder35,$remainder5,$remainder3,$number){
        $this->_writer = new \stdClass();
        $this->_result = new \stdClass();
        $this->_result = new Result();
        $this->_writer = new Writer();
        $this->_result->remainder35 = $remainder35;
        $this->_result->remainder5 = $remainder5;
        $this->_result->remainder3 = $remainder3;
        $this->_result->number = $number;
    }


    public function testWriterRemainder35(){
        $this->prepare(0,0,0,15);
        $this->expectOutputString("Linianos\n");
        $this->_writer->writeAnswer($this->_result);

    }

    public function testWriterRemainder5(){
        $this->prepare(1,0,1,50);
        $this->expectOutputString("IT\n");
        $this->_writer->writeAnswer($this->_result);

    }

    public function testWriterRemainder3(){
        $this->prepare(1,1,0,9);
        $this->expectOutputString("Linio\n");
        $this->_writer->writeAnswer($this->_result);
    }

    public function testNone(){
        $this->prepare(1,1,1,17);
        $this->expectOutputString("17\n");
        $this->_writer->writeAnswer($this->_result);
    }
	
	public function setUp(){

        $this ->_calcForm = new CalcForm();
    }

    public function  testThree(){

        $this->assertEquals(0,$this->_calcForm->calcRemainder(3,3));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(12,3));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(27,3));
    }

    public function  testFive(){

        $this->assertEquals(0,$this->_calcForm->calcRemainder(5,5));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(50,5));
        $this->assertEquals(0,$this->_calcForm->calcRemainder(50,5));
    }

    public function  testThreeAndFive(){

        $this->assertEquals(0,$this->_calcForm->addRemainder(0,0));
        $this->assertEquals(0,$this->_calcForm->addRemainder(($this->_calcForm->calcRemainder(15,5)),($this->_calcForm->calcRemainder(15,3))));


    }

    public function testNone(){

        $this->assertNotEquals(0,$this->_calcForm->calcRemainder(4,3));
        $this->assertNotEquals(0,$this->_calcForm->calcRemainder(7,5));
        $this->assertNotEquals(0,$this->_calcForm->addRemainder(1,0));
        $this->assertNotEquals(0,$this->_calcForm->addRemainder(($this->_calcForm->calcRemainder(17,5)),($this->_calcForm->calcRemainder(17,3))));
    }
}

?>