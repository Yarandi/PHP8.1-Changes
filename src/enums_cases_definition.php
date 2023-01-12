<?php 

enum UserStatus
{
    case Active;
    case Banned;
    case Deleted;
}

$status = UserStatus::Active;

var_dump($status). PHP_EOL;

#Run the following command in your command line to check the result
#------------------------------------
# php /src/enums_cases_definition.php 
#------------------------------------

