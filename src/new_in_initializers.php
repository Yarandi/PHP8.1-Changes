<?php

class Cart{}

class User
{
    #A new cart class can be created immediately in the constructor
    public function __construct(public string $name, public Cart $cart=new Cart())
    {
        #the old way
         //$this->cart ??= new Cart();
    }

}

$user = new User('John');
var_dump($user);