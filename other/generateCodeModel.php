
<?php
// Генерирует код request для для модели
$columns = ['name','surname','phone'];


function generate($columns,$model)
{
	$code = "\$" . "$model = new $model();  \n";
	foreach($columns as $column)
	{
		$code .= "\$$model->$column = \$request->$column;  \n"; 
	}
	$code .= "\$$model" ."->save();";
	return $code;
}

echo generate($columns,'Car');