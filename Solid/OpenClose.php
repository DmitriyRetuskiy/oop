<?php
// Enter your code here, enjoy!
interface Sum{
	
	public function sum($a,$b):void;
	
}

class integerNumber implements Sum{
	
	public function sum($a,$b):void {
		echo $a+$b . ' whole(class integer)';
	}
	
}

class doubleNumber implements Sum {
	public function sum($a,$b):void {
		echo $a+$b . ' Decumal(class double)';
	}
}


class Number{
	
	public function sum($a,$b){
		$typeA = gettype($a);
		$className = $typeA.'Number';
		// without conditions like 'if'
		(new $className)->sum($a,$b);
		
	}
	
}

(new Number)->sum(3.4,5);