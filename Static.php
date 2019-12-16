<?php 

class Person{

	static $name="peisheng";

	public static function initialize(){
		echo "初始化";
	}

	public static function test01(){
		echo "jianhanke";
		echo self::name;
	}

}
