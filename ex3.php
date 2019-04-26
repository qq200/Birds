<?php
$salaries=[
    "Rookie PHP Dev"=>5000,
    "Junior PHP Dev"=>10000,
    "Senior PHP Dev"=>15000,
    "Expert PHP Dev"=>25000,
    "PHP Dev SEO"=>50000,
];

$salaries["Junior PHP Dev"]*=1.1;
$salaries["Senior PHP Dev"]+=4000;

var_dump($salaries);
print"<hr>";
foreach($salaries as $key=>$value){
    print "$key=>$value"."<br>";
}

?>