<?php

$redis =  new Redis();

$redis->connect('127.0.0.1',6379);

$redis->set('Name','Hupper');

$redis->set('number',0);

$redis->incr('number');

echo $redis->incr('number') . "<br />";

$redis->rpush('Users', 'Иван');

$redis->rpush('Users' , 'Лева');

$ArrUsers = $redis->lrange('Users',0,1);

print('<pre>');
print_r($ArrUsers);
print('</pre>');

//var_dump($redis->get('Name'));