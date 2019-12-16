<?php


abstract class Operation{

	abstract public function getValue($num1,$num2);
}


class OperationAdd extends Operation{

	public function getValue($num1,$num2){
		return $num1+$num2;
	}
}

class OperationSub extends Operation{

	public function getValue($num1,$num2){
		return $num1-$num2;
	}

}

class Factory{

	public static function createObj($operate){
		echo "$operate";
		switch ($operate) {
			case '+':
				return new OperationAdd();
				break;
			case '-':
				return new OperationSub();
				break;
			default :
				return null;
		}
	}
}

$instance=Factory::createObj("*");
var_dump($instance);
$res=$instance->getValue(1,2);
echo $res;