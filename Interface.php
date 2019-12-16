<?php 

Interface Person{

	const score="99";
	public function getSocre();
	public function getName();

}
class Student implements Person{

	public function getSocre(){
		echo self::score;
	}
	public function getName(){
		echo "这是我的名字";
	}
}

$stu=new Student();
$stu->getSocre();
$stu->getName();