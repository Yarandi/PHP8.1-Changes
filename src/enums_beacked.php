<?php 

enum UserStatus : int
{
    case Active = 1;
    case Banned = 2;
    case Deleted = 3;
}

$status = UserStatus::Active;

#----------------
#getting the enum
#----------------
print_r($status);

#----------------------------
#we can access name and value
#----------------------------
var_dump($status->name).PHP_EOL;
var_dump($status->value).PHP_EOL;
#-----------
# from
#-----------
$enumStatus = UserStatus::from(3); 
var_dump($enumStatus); //will return Deleted status

#--------------------------------------------
#from with none exist integer value get error
#-------------------------------------------- 
//$enumStatusFrom = UserStatus::from(0); 
//var_dump($enumStatusFrom); //will return Fatal error: Uncaught ValueError: 0 is not a valid backing value for enum UserStatus

#------------------------------------------------------------------------
#tryFrom will return null instead of error if the integer value not exist
#------------------------------------------------------------------------
$enumStatusTryFrom = UserStatus::tryFrom(0); 
var_dump($enumStatusTryFrom); //will return NULL

#------------------------------------------------
#we can also return default value instead of null
#------------------------------------------------ 
$enumStatusDefault = UserStatus::tryFrom(0) ?? UserStatus::Active;  
var_dump($enumStatusDefault); //will return Active for example as a default value



#Run the following command in your command line to check the result
#------------------------------------
# php /src/enums_beaacked.php 
#------------------------------------

