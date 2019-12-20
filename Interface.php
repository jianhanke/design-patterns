<?php 

Interface Person{

	const score="99";
	public function getSocre($name);
	public function getName();

}
class Student implements Person{

	private const Age=20;

	public function getSocre($name){
		echo "fds";	
	}
	public function getName(){
		echo "这是我的名字";
	}
	public function supFunction(){
		echo "ceshi";
	}
}

$stu=new Student();
$stu->getSocre("fds");
$stu->getName();
$stu->supFunction();
echo $stu::Age;