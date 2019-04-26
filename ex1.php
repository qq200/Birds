<?php
$name_1="Valeriu";
$name_2="Mariana";

$names=[
    "Ivan",
    "Tatiana"
];

$names[]=$name_1;
$names[]=$name_2;

var_dump($names);
print "<br>";
for($i=0; $i<count($names); $i++){
    print $names[$i]."<br>";
}



?>