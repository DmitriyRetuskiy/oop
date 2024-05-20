<?php


$handlers = [
	'A' => [
		
		function () {
			echo 'maya Ha ' . "\n";
		},
		function () {
			echo 'maya Ho ' . "\n";
		}
	
		
		],
	'B' => [
			function(){
				echo 'Baraban' . "\n";
			}	
		
		]
	
	];
	
	/*
	$events = ['B', 'A', 'A', 'B'];
	$i=0;
	$handler = '';
	*/
	
	$input = fopen('php://stdin','r');
	
	while(true)
	{
		$line = trim(fgets($input));
		if(empty($line)){
			continue;
		}
		
		foreach($handlers[$line] as $hendler)
		{
			$hendler();
		}

	}
	

/*
	
	while($i<10){
		sleep(1);
		
		$event = array_shift($events);
			
		var_dump($event);	
		
		if(null !== $event)
		{
			foreach($handlers[$event] as $handler) {
				$handler();
			}
		}
		
		$i++;
	}
	
	*/