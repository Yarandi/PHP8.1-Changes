<?php

class User
{
    #the old way for definition properties
    // public string $user;
    // public string $contacts;
    
    public function __construct(
        public string $user,
        public readonly string $contacts,
    )
    {
        
    }
}

$user = new User("hamed", "hamed.yarandi@gmail.com");
var_dump($user);

$user->contacts = 'h.amed.yarandi@gmail.com';
var_dump($user);

#-------------------------------------------------------------------
#      before adding readonly to contact property will return
#-------------------------------------------------------------------
// object(User)#1 (2) {
//     ["user"]=>
//     string(5) "hamed"
//     ["contacts"]=>
//     string(23) "hamed.yarandi@gmail.com"
//   }
//   object(User)#1 (2) {
//     ["user"]=>
//     string(5) "hamed"
//     ["contacts"]=>
//     string(24) "h.amed.yarandi@gmail.com"
//   }


#-------------------------------------------------------------------
#       after adding readonly to contact property will return
#-------------------------------------------------------------------
// PHP Fatal error:  Uncaught Error: Cannot modify readonly property User::$contacts in /php81_sandbox/src/read_only_properties.php:20
// Stack trace:
// #0 {main}
//   thrown in /php81_sandbox/src/read_only_properties.php on line 20

// Fatal error: Uncaught Error: Cannot modify readonly property User::$contacts in /php81_sandbox/src/read_only_properties.php:20
// Stack trace:
// #0 {main}
//   thrown in /php81_sandbox/src/read_only_properties.php on line 20