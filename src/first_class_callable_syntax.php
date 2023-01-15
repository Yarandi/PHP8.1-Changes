<?php 


#-------------------------------------------------------------------------------------
#     before php version 8.1 we had possibility to create closures fromcallable
#-------------------------------------------------------------------------------------
$closure = Closure::fromCallable('ucwords');
var_dump($closure("hello world")); //will return Hello World

#-------------------------------------------------------------------------------------
#     in php version 8.1 we had possibility to create closures much easy as before
#-------------------------------------------------------------------------------------
$closure = ucwords(...);
var_dump($closure("hello world")); //will return Hello World 





