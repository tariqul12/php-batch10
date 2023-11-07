<?php


namespace App\classes;
class Welcome
{
    public $message , $firstNamr,$lastNamr;

    public function __construct()
    {
        $this->message = "Hello World";
    }
    public function index()
    {
         $this->firstNamr="Tariqul Islam";
         $this->lastNamr="BITM";
         echo gettype($this->firstNamr);
//        echo $this->firstNamr." ".$this->lastNamr;
//        echo $this->message;
    }
}