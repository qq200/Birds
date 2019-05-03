<?php
$table=[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
print $table[1][2];
print"<hr>";
print $table[0][2]+$table[2][0];
print"<hr>";
$table[1]=array_reverse($table[1]);
var_dump($table);
print"<hr>";
$arrow=[
    '##****',
    '**##**',
    '****##',
    '**##**',
    '##****'
];
foreach($arrow as $value){
    print strrev($value)."<br>";
}

//!!!!!acasa: de facut ca sageata sa arate invers
print"<hr>";
$templates=[
    "Developer experience is: {X}",
    "Language: {X}",
    "{X} is very experienced",
    "Our company develops for {X} years"
];
$value=[
    5,
    "English",
    "Ivan Pupkin",
    15
];
for($i=0; $i<count($templates);$i++){
    foreach($templates as $val){
    print str_replace('{X}', $value[$i], $val)."<br>";
        
    }
}
?>