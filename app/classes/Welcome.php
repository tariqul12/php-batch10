<?php


namespace App\classes;
class Welcome
{
    public $message ,$firstNumber,$secondNumber,$result;

    public function __construct()
    {
        $this->message = "Hello World";
    }
    public function index()
    {
        $this->firstNumber=100;
        $this->secondNumber= 20;

//        conditional operator

        echo $this->firstNumber > $this->secondNumber;
//        //assigment operator
//        echo "<br>";
//        echo $this->firstNumber += $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNumber -= $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNumber *= $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNumber /= $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNumber %= $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNumber .= $this->secondNumber;


        //aritmetic operator
//        echo "<br>";
//        echo ++$this->firstNumber;
//        echo "<br>";
//        echo --$this->firstNumber++;
//        echo "<br>";
//        echo -$this->firstNumber;
//        echo "<br>";
//        echo $this->firstNumber;


//        echo "<br>";
//        echo $this->firstNamr + $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNamr - $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNamr * $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNamr / $this->secondNumber;
//        echo "<br>";
//        echo $this->firstNamr % $this->secondNumber;



//         $this->firstNamr="Tariqul Islam";
//         $this->lastNamr="BITM";
//         echo gettype($this->firstNamr);
//        echo $this->firstNamr." ".$this->lastNamr;
//        echo $this->message;
    }
}