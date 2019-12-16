<?php 

class Student{

	public $name=null;
	public $socre="99";

	public function __construct($name){
		$this->name=$name;
	}
	public function getScore(){
		echo $this->name."的分数是:".$this->socre."<br />";
	}
}
	$stu=new Student("jianhanke");
	$stu->getScore();

	$stu2=clone $stu;
	$stu2->getScore();
