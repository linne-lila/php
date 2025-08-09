<?php

function judge($score1,$score2,$score3){
    $totle=$score1+$score2+$score3;
    if($totle>210){
    echo "合計".$totle ."点なので合格です";
    }
    else{
    echo "合計".$totle ."点なので不合格です";
    }
}
echo judge(50,70,80) ."<br>";

function sankaku($teihen,$takasa){
    return $teihen*$takasa/2;
}
function sikaku($teihen,$takasa){
    return $teihen*$takasa;
}
function daikei($jouhen,$teihen,$takasa){
    return ($jouhen+$teihen)*$takasa/2;
}
echo sankaku(6,8) ."<br>";
echo sikaku(6,8) ."<br>";
echo daikei(6,5,8);
