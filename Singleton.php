<?php 


class Person{

	private static $instance=null;

	private  function __clone(){

	}

	private  function  __construct(){
		echo '我被实例化了<br /> ';
	}

	public static function getInstance(){
		if(self::$instance==null){
			self::$instance=new self();
		}
			return self::$instance;
	}

	public function test01(){
		echo __CLASS__;
	}

}

$person=Person::getInstance();
$person2=Person::getInstance();
var_dump($person);
echo "<br />";
var_dump($person2);

$person2->test01();
