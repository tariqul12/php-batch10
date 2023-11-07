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
        $this->firstNumber  =40;
        $this->secondNumber =20;
        $this->result       =30;

        $this->result= $this->firstNumber + $this->secondNumber;

        switch ($this->firstNumber){
            case 10:
                echo "hello World";
                break;
            case 20:
                echo "hello Bangladesh";
                break;
            case 30:
                echo "Hello Dhaka";
                break;
            case 40:
                echo "BITM";
                break;
            default:
                echo "hello BASIS";
        }


        //        if ($this->firstNumber > $this->secondNumber){
//            echo "hello world";
//        }
//        elseif($this->firstNumber < $this->result){
//            echo "hello Bangladesh";
//        }
//        elseif ($this->result > $this->firstNumber){
//            echo "Hello PHP";
//        }
//        else{
//            echo "hello Laravel";
//        }

//        if($this->firstNumber > $this->secondNumber){
//            echo $this->result;
//        }
//        else{
//            echo "hello world";
//        }





//        conditional statement
//    if
//
//        repeated statement
//



        //        logic Operator

//      ! operator
//        $this->result=false;
//        echo !$this->result;



//        echo "<br>=============<br>";
//        echo $this->firstNumber < $this->secondNumber || $this->secondNumber < $this->result;
//        echo "<br>=============<br>";
//        echo $this->firstNumber > $this->secondNumber || $this->secondNumber > $this->result;
//        echo "<br>=============<br>";
//        echo $this->firstNumber < $this->secondNumber || $this->secondNumber > $this->result;
//        echo "<br>=============<br>";
//        echo $this->firstNumber > $this->secondNumber || $this->secondNumber < $this->result;
//        echo "<br>=============<br>";

//          Logic operator &&
//        echo "<br>=============<br>";
//        echo $this->firstNumber < $this->secondNumber && $this->secondNumber < $this->result;
//        echo "<br>=============<br>";
//        echo $this->firstNumber > $this->secondNumber && $this->secondNumber > $this->result;
//        echo "<br>=============<br>";
//        echo $this->firstNumber < $this->secondNumber && $this->secondNumber > $this->result;
//        echo "<br>=============<br>";
//        echo $this->firstNumber > $this->secondNumber && $this->secondNumber < $this->result;
//        echo "<br>=============<br>";




//        conditional operator

//        echo $this->firstNumber > $this->secondNumber;
//        echo $this->firstNumber < $this->secondNumber;
//        echo $this->firstNumber >= $this->secondNumber;
//        echo $this->firstNumber <= $this->secondNumber;
//        echo $this->firstNumber != $this->secondNumber;
//        echo $this->firstNumber == $this->secondNumber;
//        echo $this->firstNumber === $this->secondNumber;
//        echo $this->firstNumber !== $this->secondNumber;

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