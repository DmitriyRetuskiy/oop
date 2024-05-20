<?php
// Enter your code here, enjoy!
$arr = '[{"name":"Ivan","surname":"Kotov","phone":"34234324"},
		 {"name":"Aleksandr","surname":"Makedonsky","phone":"5454"}
		 ]';

$persons = json_decode($arr);

class Person{
	
	public static ?Person $Instance;
	
	public ?string $name;
	public ?string $surname;
	public ?string $phone;

	private function __construct(){
		
	}
	
	public static function obj($name,$surname,$phone)
	{
		if(!isset(self::$Instance)) {
			$obj = new self();
			$obj->name = $name;
			$obj->surname = $surname;
			$obj->phone = $phone;
			self::$Instance = $obj;
		} 
		
	    	return self::$Instance;
		
	}
}

// Внимание объект только одни поэтому изменятся обе записи

$person = Person::obj('Александр','Меньшиков','234324');

$persons[] = $person;

$person->name = 'Сергей';
$person->surname = 'Акимов';
$person->phone = '234324';

$persons[] = $person;

// Проверка что в коллекции лежит один и тот же объект
 //var_dump($persons);

foreach($persons as $person)
{
	echo $person->name . " " . $person->surname . " " . $person->phone . "\n";
}