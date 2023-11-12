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
        include "view/home.php";
        test();
//        $this->data = [
//            0 => [
//                'name' => 'Shagor',
//                'email' => 'shager@gmail.com',
//                'mobile' => [
//                    "personal" => "89383983",
//                    "parents" => [
//                        "fother"=>"0168475345",
//                        "mother"=>"0168475345",
//                    ],
//                ],
//                'blood_group' => "a+"
//            ],
//            1 => [
//                'name' => 'zahir',
//                'email' => 'zahir@gmail.com',
//                'mobile' => [
//                    "personal" => "89383983",
//                    "parents" => [
//                        "fother"=>"0168475345",
//                        "mother"=>"0168475345",
//                    ],
//                ],
//                'blood_group' => "b+"
//            ],
//            2 => [
//                'name' => 'mokbul',
//                'email' => 'mokbul@gmail.com',
//                'mobile' => [
//                    "personal" => "89383983",
//                    "parents" => [
//                        "fother"=>"0168475345",
//                        "mother"=>"0168475345",
//                    ],
//                ],
//                'blood_group' => "ab+"
//            ],
//
//        ];

//        echo "<pre>";
//        print_r($this->data);
//        ver_dump($this->data);

//        foreach ($this->data as $item) {
//            foreach ($item as $value) {
//
//                if (is_array($value)) {
//                    foreach ($value as $v_valu) {
//                        if (is_array($v_valu)){
//                            foreach ($v_valu as $valu){
//                                echo $valu." ";
//                            }
//                        }else{
//                            echo $v_valu." ";
//                        }
//                    }
//                } else {
//                    echo $value." ";
//                }
//            }
//            echo '<br/>';
//
//            // echo $item["name"].' '. $item["email"].' '. $item["mobile"]. ' '. '<br/>' ;
//        }
        // echo  $this->data[2]['email'];


//==============================================================================
//        $this->data = [10, 20, 30, "Bitm", "PHP", 100.77, true];
//
//        foreach ($this->data as $value)
//        {
//            echo '<br/>';
//            echo $value. ' ';
//        }

        // echo $this->dara[4];
// ============================================================================
        // array ------------- special property or variable   ""$data = []""
// ===========================================================================
//        $this->i = 50;
//        do{
//            echo "hello PHP";
//            $this->i++;
//        }
//        while($this->i > 60);
//===============================================================
//        $this->i = 100;
//        While ($this->i < 105)
//        {
//            echo "hello World";
//            $this->i++;
//        }
//================================================================
//        for ($this->i = 70; $this->i >= 30; $this->i--)
//        {
//            echo $this->i," ";
//        }
//        $this->firstNumber  =40;
//        $this->secondNumber =20;
//        $this->result       =30;
//
//        $this->result= $this->firstNumber + $this->secondNumber;
//
//        switch ($this->firstNumber){
//            case 10:
//                echo "hello World";
//                break;
//            case 20:
//                echo "hello Bangladesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            case 40:
//                echo "BITM";
//                break;
//            default:
//                echo "hello BASIS";
//        }


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