<?php

Class Math
{
    public const PI = 3.14;
}

class subClass extends Math
{
    public const PI = 4.13;
}

#var_dump(subClass::PI); # here subclass override the value of PI const




#------------------------------------------------------
#     Using final to prevent override const value
#------------------------------------------------------
Class Math2
{
    final public const PI = 3.14;
}

class subClass1 extends Math2
{
    public const PI = 4.13;
}

var_dump(subClass1::PI); #return error PI can not override final constant Math2::PI x