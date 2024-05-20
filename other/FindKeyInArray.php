<?php
$arr = [
		'name'  => 'data',
		'home' => 'opera',
		'colors' => [
				'green' => 'зеленый',
				'black' => 'черыный',
				'yellow' => ['data' => 'time',
							 'numb' => 'join'
							]
			],
		'days' => 'asdf'
	];
	

	
function getValForKey($arrWord,$arr)
{
 $res = null;

	foreach($arr as $key => $val){
		
		// var_dump($key);
		
		if($key == $arrWord) {
			return $val;
		}
		
		if(is_array($val))
		{
			$res = getValForKey($arrWord,$val);
			if($res == $arrWord) return $res;
		}
	}
	
	return $res;
}	

$val = getValForKey('numb',$arr);

echo $val;

///////////////////////////////////////////////////////////////////////////
//----------------------Second release-----------------------------------//
///////////////////////////////////////////////////////////////////////////

$arr = [
		'name' => 'Александр',
		'sername' => 'Македонский',
		'colors' => ['one' => 'green', 'tow' => 'red',  'free' => 'blue'],
		'bestf' => 'ffff',
		'foorest' => 'asdfds',
		'best' => 'iii',
		'names' => ['gor'=>'Иван','set' => 'Сергей', 'some' => ['ak' => 'gool','dp' => 'oum'],'col'=> 'Федор']
	];
	
$param = 'dp';

function findType($arr,$param)
{
	$res = '';
	
	foreach($arr as $key => $val)
	{
		
	
		if($key == $param) {
			$res = $val;
			break;
		}
		
		if(is_array($val)) {
		   $res = findType($val,$param);
		}
	
	}
	
return $res;
	
}
	
$a = findType($arr,$param);
echo $a;