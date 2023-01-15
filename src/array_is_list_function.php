<?php

#------------------------------
#     List is array which has keys start from 0 up to lentght-1 
#------------------------------
$numbers = [1,2,3,4,5,6,7,8,9,0];
var_dump(array_is_list($numbers)); # according to the list meaning it will return true



$numbers = [1,2,3,4,5,6,7,8,9,0,'name' => 'hamed'];
var_dump(array_is_list($numbers)); # according to the list meaning its not a list so it will return false

