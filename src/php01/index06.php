<?php
$Fizz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";

for($a=1; $a<=50; $a++){
    if($a %15==0){
        echo $FizzBuzz."<br>";
    }
    elseif ($a %3==0) {
        echo $Fizz."<br>";
    }
    elseif ($a %5==0) {
        echo $Fizz."<br>";
    }
    else{
        echo $a."<br>";
    }
}

for($b=1; $b<6; $b++){
    for($c=1; $c<6;$ $c++){
        echo "●";
    }
    echo "<br>";
}