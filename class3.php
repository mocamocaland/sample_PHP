<?php

class User {
    public $name;
    public static $count = 0;
    //private $name;
    //protected $name; 

    public function __construct($name){
        $this->name = $name;
        self::$count++;
    }

    public function sayHi() {
        echo "hi, i am $this->name<br>";
    }

    public static function getMessage() {
        echo "hello from User class!";
    }
}

//User::getMessage();

$moca = new User("moca");
$ron = new User("ron");

echo User::$count;