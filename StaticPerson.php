<?php

class StaticPerson{
	
	public static string $name;
	public static string $sername;
	public static string $phone;
	
	public function __construct($name,$sername,$phone){
		self::$name = $name;
		self::$sername = $sername;
		self::$phone = $phone;	
	}
	
	public static function echoName(){
		echo self::$name;
	}
	
}

// может быть вызван отдельный статический метод
// StaticPerson::echoName(); без объявления экземпляра класса;