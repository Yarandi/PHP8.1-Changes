<?php

$numbers = [1,2,3,4];
$packed = [...$numbers, 5,6,7];

var_dump($packed);

#------------------------------
#     will return
#------------------------------
// array(7) {
//     [0]=>
//     int(1)
//     [1]=>
//     int(2)
//     [2]=>
//     int(3)
//     [3]=>
//     int(4)
//     [4]=>
//     int(5)
//     [5]=>
//     int(6)
//     [6]=>
//     int(7)
//   }

$defaultUser = [
    'name' => 'Hamed', 
    'surname' => 'Yarandi'
];

#merge the array
$user = [
    ...$defaultUser,
    'name' => 'Hamed2',
    ...['age' => '34']
];

var_dump($user);

#------------------------------
#     will return
#------------------------------
// array(3) {
//     ["name"]=>
//     string(6) "Hamed2"
//     ["surname"]=>
//     string(7) "Yarandi"
//     ["age"]=>
//     string(2) "34"