<?php


class Person{

	private $name;
	private $age;

	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
	public function getName(){
		return $this->name;
	}
	public function getAge(){
		return $this->age;
	}
}

class GoSchool{
	private $person;
	public function __construct($person){
		$this->person=$person;
	}
	public function go(){
		echo "年龄为:".$this->person->getAge()."的".$this->person->getName()."要去上学了";
	}
}
$p=new Person('hanke',20);
$goSchool=new GoSchool($p);
$goSchool->go();