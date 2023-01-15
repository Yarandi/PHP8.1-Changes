<?php 


enum UserStatus: int { 

    case Active = 1;
    case Banned = 2;
    case Deleted = 3;

    public const ARCHIVED = self::Deleted;

}


#------------------------------
#calling const
#------------------------------
var_dump(UserStatus::ARCHIVED);