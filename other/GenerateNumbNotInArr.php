<?php

$arr = [1,2,5];
$numb = false;
	
	
function checkInArr($arr,$numb) {
	foreach($arr as $val) {
		if($val==$numb) return true;
	}
	return false;
}

while(!$numb) {
    $numb = rand(0,6);
    $numb = checkInArr($arr,$numb)?false:$numb;
}



echo  "  число:" . $numb;