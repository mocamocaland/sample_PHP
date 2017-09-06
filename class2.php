<?php

//private:そのクラス内からのみアクセス可能
//protected:そのクラス＋親子クラス内からのみアクセス可能
//public:どこからでもアクセス可能


class User {
    //public $name;
    //private $name;
    protected $name; 

    public function __construct($name){
        $this->name = $name;
    }

    public function sayHi() {
        echo "hi, i am $this->name<br>";
    }
}

class AdminUser extends User {
    public function sayHello(){
        echo "hello  $this->name from Admin!";
    }
}

$moca = new User("moca");
$oden = new AdminUser("oden");

//echo $moca->name."<br>";
//echo $oden->name."<br>";

$moca->sayHi();
$oden->sayHi();

$oden->sayHello();

