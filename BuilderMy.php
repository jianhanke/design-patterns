<?php 



class Director
{	
	public function build($build){
		$build->createVehicle();
		$build->setDoor();
		$build->setWhell();
		$build->setEnginer();

		return $build->getVehicle();
	}
}

class Engineer{

}
class Whell{

}
class Door{

}

Interface Builder
{
	public function createVehicle();
	public function setDoor();
	public function setWhell();
	public function setEnginer();
	public function getVehicle();
}

class CarBuild implements Builder{
	private $car;
	public function createVehicle(){
		$this->car=new Car();
		echo "安装了一个汽车车架<br />";
	}
	public function setDoor(){
		$this->car->setPart('door1',new Door());
		$this->car->setPart('door2',new Door());
		$this->car->setPart('door3',new Door());
		$this->car->setPart('door4',new Door());
		echo "汽车安装了四个窗户<br />";
	}
	public function setWhell(){
		$this->car->setPart('whell1',new Whell());
		$this->car->setPart('whell2',new Whell());
		$this->car->setPart('whell3',new Whell());
		$this->car->setPart('whell4',new Whell());
		echo "汽车安装了四个轮子<br />";
	}
	public function setEnginer(){
		$this->car->setPart('engineer1',new Engineer());
		echo "汽车安装了一个超级引擎<br />";
	}
	public function getVehicle(){
		return $this->car;
	}

}
abstract class Vehicle
{
	private $data=array();
	public function setPart($key,$part)
	{
		$this->data[$key]=$part;
	}
	abstract public function startRun();
}
class Car extends Vehicle
{
	public function startRun(){
		echo "汽车开始运行<br />";
	}
}

class BikeBuilder implements Builder
{
	private $bike;
	public function createVehicle(){
		$this->bike=new Bike();
		echo "自行车放了一个车架<br />";
	}
	public function setDoor()
	{
		
	}
	public function setWhell(){
		$this->bike->setPart('whell1',new Whell());
		$this->bike->setPart('whell2',new Whell());
		echo "自行车安装了连个车轱辘<br />";
	}
	public function setEnginer(){
		$this->bike->setPart('engineer1',new Engineer());
		echo "自行车引擎<br />";
	}
	public function getVehicle(){
		return $this->bike;
	}
}

class Bike extends Vehicle{
	public function startRun(){
		echo "自行车运行起来了<br />";
	}
}

$carBuild=new CarBuild();
$car=(new Director())->build($carBuild);
$car->startRun();

echo "------------------------<br />";

$bikeBuild=new BikeBuilder();
$bike=(new Director())->build($bikeBuild);
$bike->startRun();




