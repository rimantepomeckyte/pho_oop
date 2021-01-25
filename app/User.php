<?php

namespace Users;

//klase naudojant konstruktoriu
class User
{
    protected $name;
    protected $email;
    protected $role;
    protected $description;

    public function __construct($name,$email,$role){
        $this->name=$name;
        $this->email=$email;
        $this->role=$role;
    }

    public function addDescription($description){
        $this->description=$description;

    }
    public function getUserData()
    {
        return $userData = [
            $this->name,
            $this->email,
            $this->role,
            $this->description
        ];
    }

    //taip apsiraso destruktorius, jis nera praktiskai naudojamas, nes ir taip kai isspausdini jis issitrina
    /* function __destruct(){
         echo"Objekto gyvenimas baigesi";
     }*/
}

























//paprastas klase kurimas
/*class User
{
    public $name;
    public $email;
    public $role;
    public $userData =[];

    public function getUserData()
    {
        $this->userData [] = $this->name;
        $this->userData [] = $this->email;
        $this->userData [] = $this->role;
        return $this->userData;
    }
    public function __toString(){
        return $this->name;
    }

}

$user1 = new User();
$user1 -> name = "Rimante";
$user1 -> email = "rimante@gmail.com";
$user1 -> role = "Student";

$user2 = new User();
$user2 -> name = "Jonas";
$user2 -> email = "jonas@gmail.com";
$user2 -> role = "Admin";

$user3 = new User();
$user3 -> name = "Petras";
$user3 -> email = "petrass@gmail.com";
$user3 -> role = "Student";

foreach ($user1->getUserData() as $user){
    echo "$user ";
}
echo "<br>";
foreach ($user2->getUserData() as $user){
    echo "$user ";
}
echo "<br>";
foreach ($user3->getUserData() as $user){
    echo $user;
}

//echo $user1;

//var_dump($user1);

//print_r($user1);

echo $user1 -> getUserName();
echo "<br>";
echo $user2 -> getUserName();
echo "<br>";
echo $user3 -> getUserName();*/


//galima ir neturint klases, kurti  nauja objekta
/*
$user = new stdClass();
$user->name = "Rimante";

print_r($user);*/