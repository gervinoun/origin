<?php
$test = 'yolo';
$test = 'yolo' . 'life';
$test = $test . 'thug';
$test .= 'life';
$name = 'Kaspar';
$age = 44;
$test = $name . ' is ' . $age . ' years old and awesome!';
$test = "$name is $age years old!";
$test = '$name is $age years old!';
$test = 'don\'t';
$test = "lol\nlol\n";
$test = <<<END
    $age $name
      a
     b
    c
\n
END;
var_dump($test);