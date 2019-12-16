<?php 

class Student {

	private $decorations=array();
	public function addDecoration($decoration){
		$this->decorations[]=$decoration;
	}

	public function startClass(){
		foreach ($this->decorations as $decoration) {
			$decoration->newAction();
		}
		echo "学生:我要上课学习了<br />";
	}
}
interface decoration{
	public function newAction();
}

class StandUP implements decoration{
	public function newAction(){
		echo "起立<br />";
	}
}
class SayHello implements decoration{
	public function newAction(){
		echo "老师好<br />";
	}
}

$stu=new Student();
$stu->addDecoration(new StandUP());
$stu->addDecoration(new SayHello());
$stu->startClass();

