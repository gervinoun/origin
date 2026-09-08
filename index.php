<?php

for ($i = 0; $i < 10; $i++) {
    var_dump($i);
} 

for($i = 9; $i > 0; $i--) {
    var_dump($i);
}

for ($i = 2; $i<1_000_000; $i*=2) {
    var_dump($i);
}
$time = time();
while(time() < $time + 1) {
    var_dump($i++);
}

while(false) {
    var_dump('while');
}

do {
    var_dump('do');
} while(false);

//while(true)  {

//}

$fruits = ['Apple', 'Banana', 'Cherry'];
foreach($fruits as $fruit) {
    var_dump($fruit);
}

foreach($fruits as $key => $fruit) {
    var_dump($key, $fruit);
    $fruit = 'LAagri';
}

var_dump($fruits);
