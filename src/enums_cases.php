<?php 

enum UserStatus: int { 

    case Active = 1;
    case Banned = 2;
    case Deleted = 3;

}

#------------------------------------------------------
#we can return cases as array for drop down for example
#------------------------------------------------------
var_dump(UserStatus::cases());

#--------------
#result will be 
#--------------
// array(3) {
//     [0]=>
//     enum(UserStatus::Active)
//     [1]=>
//     enum(UserStatus::Banned)
//     [2]=>
//     enum(UserStatus::Deleted)
//   }