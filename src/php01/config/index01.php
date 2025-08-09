<?php
$name=htmlspecialchars($_POST["name"],ENT_QUOTES);
    print "名前：" . $name . "<br>";
$set=htmlspecialchars($_POST["set"],ENT_QUOTES);
    print "注文商品：" . $set . "<br>";
$number=htmlspecialchars($_POST["number"],ENT_QUOTES);
    print "注文数：" . $number . "<br>";
