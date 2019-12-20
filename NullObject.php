<?php 

class NullObject{
	public function __call($method,$arg){
		echo 'this is null';
	}
}
$obj=new NullObject();
var_dump($obj);
$obj->testFunction();