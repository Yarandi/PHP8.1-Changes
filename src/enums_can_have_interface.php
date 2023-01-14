<?php 

interface EnumInterface{
    public static function hello();
}

enum UserStatus: int implements EnumInterface { 

    case Active = 1;
    case Banned = 2;
    case Deleted = 3;

    public static function hello()
    {
        return "hello from interface";
    }

}


#------------------------------
#calling methos from interface
#------------------------------
var_dump(UserStatus::Active->hello());

#------------------------------
#calling staticly
#------------------------------
var_dump(UserStatus::hello());

#return 
#string(20) "hello from interface"
#string(20) "hello from interface"