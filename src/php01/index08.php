<?php

$people = [
  ["Taro",25,"men"],
  ["Jiro",20,"men"],
  ["hanako",16,"women"]
];

foreach($people as $a) {
  echo $a[0]."(".$a[1]."歳".$a[2].")"."<br>";
}