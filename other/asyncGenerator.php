<?php

// конкурентная многозадачность 
/*
function task1()
{
	$i = 1;
	while($i <= 5)
	{
		yield $i;
		$i++;
	}
}

function task2()
{
	$i = 5;
	while($i >= 1)
	{
		yield $i;
		$i--;
	}
}

$task1 = task1();
$task2 = task2();

while(true) {
	sleep(1);
	echo $task1->current();
	$task1->next();
	
	sleep(1);
	echo $task2->current();
	$task2->next();
	
	if($task1->current() == '') break;
	
}
*/

//------------------------------------------
// Файбез заворачивает функцию в себя и можно выполнять конкурентно 

/*
$task1  = function()
{
	$i = 1;
	while($i <= 5)
	{
		Fiber::suspend($i);
		$i++;
	}
};

$task2 = function()
{
	$i = 5;
	while($i >= 1)
	{
		Fiber::suspend($i);
		$i--;
	}
};

$fiber1 = new Fiber($task1);
$fiber1->start();
$fiber2 = new Fiber($task2);
$fiber2->start();

while(true){
	sleep(1);
	echo $fiber1->resume();
	echo $fiber2->resume();
}
*/

// Варианты реально асинхронного выполнения кода 
// ---- 1 запуск процессов
// $ php ./myapp.php
// Запуск копии процесса fork

$task1 = function()
{
	$i = 1;
	while($i <= 5)
	{
		echo $i . "\n";
		sleep(1);
		$i++;
	}
};

$task2 = function()
{
	$i = 5;
	while($i >= 1)
	{
		echo $i . "\n";
		sleep(1);
		$i--;
	}
};

$tasks = [$task1,$task2];

foreach($tasks as $task)
{
	$pid = pcntl_fork();
	if( 0 == $pid)
	{
		$task();
	}
}
