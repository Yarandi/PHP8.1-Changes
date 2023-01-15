<?php

interface ToStringInterface{

    public function toString();

}

Class User Implements ToStringInterface,JsonSerializable
{

    public function __construct(){}

    public function jsonserialize() : mixed
    {
        //json serialize
    }

    public function toString()
    {
        // to string
    }
}


#--------------------------------------------------------------------------------------------------------------
#     | => OR  (The User class should implement either the ToStringInterface or the JsonSerializable interface)
#     & => AND (This means that the User class should implement both ToStringInterface and JsonSerializable)
#--------------------------------------------------------------------------------------------------------------
function toStringWithJson(ToStringInterface|JsonSerializable $user){
    #return 
}

toStringWithJson(new User());