<?php 

enum UserStatus : int
{
    case Active = 1;
    case Banned = 2;
    case Deleted = 3;

    public function string()
    {
        return match($this){
            self::Active => 'This user is active',
            self::Banned => 'This user is Banned',
            self::Deleted => 'This user is Deleted',
        };
    }

    public static function staticMethod()
    {
        return "You called static enum method";
    }
}


#----------------------
#calling methos
#----------------------
var_dump(UserStatus::Banned::Active->string());


#---------------------------
#calling static enum method
#--------------------------- 
var_dump(UserStatus::staticMethod());
