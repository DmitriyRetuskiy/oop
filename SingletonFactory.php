<?php
// -------------------синглтон-------------------------
class Phrase{
	
	private static ?Phrase $instance = null; 
	private static ?string $phraseString;
	private static ?int $numb1=null;
	private static ?int $numb2=null;
	
	public static function getInstance(?string $phraseString, 
									    ?int $numb1=null,
										?int $numb2=null):Phrase
	{
		if(self::$instance == null){
			self::$instance = new self();
			self::$phraseString = $phraseString;
			self::$numb1 = $numb1;
			self::$numb2 = $numb2;
		}
		
		return self::$instance;
	}
	
	public static function say()
	{
		echo self::$phraseString;
	}
	
	public static function summ()
	{
		return self::$numb1 + self::$numb2;
	}
	
}

$Phrase = Phrase::getInstance('asdf',5,6);
echo $Phrase::say();
echo $Phrase::summ();

//---------------------фабрика-------------------------

abstract class Product{public const TEST = 3;}

class BoookProduct extends Product{}
class NoteBookProduct extends Product{}

abstract class FactoryAbstract
{
	public function create($type)
	{
		if($type=='BoookProduct')return new BoookProduct;
		if($type=='NoteBookProduct') return new NoteBookProduct;
		return new BookProduct;
	}
}
class Factory extends FactoryAbstract{}

$factory = new Factory();
$NoteBookProduct = $factory->create('NoteBookProduct');
echo $NoteBookProduct::TEST;
var_dump($NoteBookProduct);


