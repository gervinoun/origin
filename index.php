<?php
$num = 10;
if($num > 10) {
    var_dump('Tauri the goat');
}

$num = 10;
if($num > 10) {
    var_dump('Tauri the goat');
} else {
    var_dump('Tauri is not the goat');
}

$num = 10;
if($num > 10) {
    var_dump('Tauri the goat');
} else if($num == 10) {
    var_dump('Im unsure 0.3seconds');
} else {
    var_dump('Tauri is not the goat');
}


$day = (int) date('w');
$day = intval(date('w'));
if ($day == 0) {
    var_dump('Sunday');
} else if ($day == 1) {
    var_dump('Monday');
} else if ($day == 2) {
    var_dump('Tuesday');
} else if ($day == 3) {
    var_dump('Wednesday');
} else if ($day == 4) {
    var_dump('Thursday');
} else if ($day == 5) {
    var_dump('Friday');
} else if ($day == 6) {
    var_dump('Saturday');
} else {
    var_dump('Why bebe');
}

switch($day) {
    case 0:
        var_dump('Sunday');
        break;
    case 1:
        var_dump('Monday');
        break;
    case 2:
        var_dump('Tuesday');
        break;
    case 3:
        var_dump('Wednesday');
        break;
    case 4:
        var_dump('Thursday');
        break;
    case 5:
    case 6:
        var_dump('Partyday');
        break;
    default:
        var_dump('Why bebe');
        break;
}



var_dump($day);