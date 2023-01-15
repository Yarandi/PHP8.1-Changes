<?php 

#----------------
#trait definition
#----------------
trait myTrait {

    public function message(string $value) {
        echo $value;
      }

    }

enum UserStatus: int { 

    #------------------
    #use trait in enums
    #------------------
    use myTrait;

    case Active = 1;
    case Banned = 2;
    case Deleted = 3;

}


#---------------------
#calling trait methods
#---------------------
var_dump(UserStatus::Deleted->message('message show for deleted user'));

#--------------
#result will be 
#--------------
#message show for deleted user