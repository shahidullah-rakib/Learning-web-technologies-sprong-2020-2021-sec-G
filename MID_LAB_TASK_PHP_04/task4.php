<?php

    $number1=5;
    $number2=8;
    $number3=7;

    echo"Given Numbers: $number1,$number2,$number3 \n";

    if($number1>$number2)
    {
        if($number1>$number3)
        {
            echo" <br/> Largest Number: $number1";
        }
        else
        {
            echo"<br/> Largest Number: $number3";
        }
    }
    else
    {
        if($number2>$number3)
        {
            echo"<br/> Largest Number: $number2";
        }
        else
        {
            echo"<br/> Largest Number: $number3";
        }
    }

?>