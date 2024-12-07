// we must clone object for change parameters
$myObj = (object)['name' => 'Ivan'];
$Julia = $myObj; // clone(myObj);
$myObj->name = 'Olga';
echo $myObj->name . "\n";
echo $Julia->name . "\n";
var_dump($myObj);
