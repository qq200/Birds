<?php
$my_friends=[
    "Jora",
    "Vania",
    "Dorin",
    "Oshon",
    "Lena"
];

$my_friends[]="Fedea";

$some_guy_friends=[
    "Oshon",
    "Lena",
    "Fedea",
    "Masha"
];
$commun_friends=array_intersect($my_friends,$some_guy_friends);
var_dump($my_friends);
var_dump($some_guy_friends);
sort($commun_friends);
var_dump($commun_friends);
?>