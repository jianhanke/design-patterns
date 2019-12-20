<?php 

	class DirectorTest {

	    public function testCanBuildTruck()
	    {
	        $truckBuilder = new TruckBuilder();
	        $newVehicle = (new Director())->build($truckBuilder);

	        
	    }

	    public function testCanBuildCar()
	    {
	        $carBuilder = new CarBuilder();
	        $newVehicle = (new Director())->build($carBuilder);

	        
	    }
}

// class WorkerPool implements Countable{

// }

class Person{
	public function test01(){

	}
}

$flag=new Person();
$flag=null;

var_dump(is_null($flag));
if($flag){
	echo "捡来了";
}else{
	echo "下面的";
}
