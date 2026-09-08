<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = [1 , 'asdas', true, [1, 2, 3]];
$test =  [
    1,
    'name' => 'Poeg Nutu_emoji',
    'age' => 12,
    3,
    'saues',
    true,
    100 => 'lol',
    'troll',
];
//var_dump($test[3][1]);
var_dump($test['name']);
array_push($test, 'added', 'zzaxszx<zxa', 3);
$test[] = 'wallahi tauri' ;
$test['name'] = 'Jõgeva';
$test[1] = 99999; 
unset($test[3]);
var_dump($test);