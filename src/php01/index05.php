<?php
$a=7;
$people="saburo";

if($a===5){
    echo "\$aは5です";
}
elseif($a===7){
    echo "\$aは7です";
}
else{
echo "\$aは5,7以外です";
}
echo "<br/>";

switch($people){
    case "saburo":
    echo "三郎です";
    break;
    
    case "ziro":
    echo "次郎です";
}
echo "<br/>";

$result=($a===7)? "TRUE":"FALSE";
echo $result;