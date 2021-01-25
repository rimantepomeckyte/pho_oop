<?php


namespace Users;


class Student extends User
{
    private $average;

    public function __construct($name, $email, $role, $average)
    {
        parent::__construct($name, $email, $role);

        $this->average = $average;
    }

    public function getUserData()
    {
        return $userData = [
            $this->name,
            $this->email,
            $this->role,
            $this->description,
            $this->average,
        ];

    }
}