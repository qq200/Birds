<?php

$user=[
    "login"=>"ivanushka",
    "year"=>1980,
    "email"=>"ivan@mail.com"
];

print $user["login"]."<br>";
print $user["email"]."<br>";
print $user["year"]."<br>";

var_dump(array_keys($user));
print "<br>";
var_dump(array_values($user));
?>