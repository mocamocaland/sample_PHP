<?php

class User {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function sayHi() {
        echo "hi, i am $this->name<br>";
    }
}

class AdminUser extends User {
    public function sayHello(){
        echo "hello from Admin!";
    }
}

$moca = new User("moca");
$oden = new AdminUser("oden");

echo $oden->name."<br>";
echo $moca->name."<br>";

$moca->sayHi();
$oden->sayHi();

$oden->sayHello();

