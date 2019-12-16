<?php 

abstract class Animal{

	public function  shout(){
		echo "所有动物都要吃饭";
	}

	abstract  public function eat();


}


class Dog extends Animal{

	public function eat(){
		echo "小狗要吃饭";
	}	


}

$dog=new Dog();
 $dog->shout();
 $dog->eat();
