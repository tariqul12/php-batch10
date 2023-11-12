<?php


namespace App\classes;


class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students=[
          0=>[
              "id"=>1,
              "name"=>"Robel Mia",
              "email"=>"robel@gmail.com",
              "mobile"=>"0175874854",
          ],
          1=>[
              "id"=>2,
              "name"=>"Abdul Kamal",
              "email"=>"kamal@gmail.com",
              "mobile"=>"0175567545",
          ],
          2=>[
              "id"=>3,
              "name"=>"Tohin Mia",
              "email"=>"tohin@gmail.com",
              "mobile"=>"0176985435",
          ],
          3=>[
              "id"=>4,
              "name"=>"Akbor Mia",
              "email"=>"akbor@gmail.com",
              "mobile"=>"0177586876",
          ],
        ];
    }
    public function getAllStudent(){
        return $this->students;
    }
}