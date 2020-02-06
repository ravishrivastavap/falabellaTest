<?php

/**
 * Created by Notepad++
 * User: Ravi P. Shrivastava
 * Date: 06/02/2020
 * Time: 17:22
 */

class Test
{
	public $remainder3;
    public $remainder5;
    public $remainder35;
    public $number;
	
	public function  checkcondition($result)
    {
        switch ($result) {
            case ($result->remainder35 == 0 ):
                echo sprintf("%s\n","Linianos");
                break;
            case ($result->remainder5 == 0):
                echo sprintf("%s\n","IT");
                break;
            case ($result->remainder3==0):
                echo sprintf("%s\n","Linio");
                break;
            default:
                echo sprintf("%s\n",$result->number);
        }
    }
	
	public function calcRemainder($number,$param )
    {
        return $number % $param;

    }


    public function addRemainder($number3,$number5)
    {
        return $number3 +  $number5;
    }
	
    public  function checkData(){

        for($i =1; $i <=100;$i++)
        {
           
            $this-> number = $i;
            $this -> remainder3  = $this->calcRemainder($i,3);
            $this -> remainder5  = $this->calcRemainder($i,5);
            $this -> remainder35 = $this->addRemainder($this->remainder3,$this->remainder5);
            $this->checkcondition($this);
			echo "<br/>";
        }
    }

}

$obj=new Test();
echo $obj->checkData();

?>