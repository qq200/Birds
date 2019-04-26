<?php
$ingredients=[
    "voda",
    "soli",
    "saxar",
    "peretz",
    "maslo",
    "vino",
    "uksus",
    "kartoshka",
    "kuritsa",
    "jaitsa",
    "spetsii",
    "xleb",
    "kapusta",
    "pomidor"
];
$recipe_salat=["uksus","kartoshka","peretz","pomidor","kapusta",];
$recipe_soup=["kapusta","voda","soli","kartoshka","kuritsa","peretz"];
$recipe_pasta=["pasta","voda","pomidor"];

$x=count(array_intersect($recipe_salat,$ingredients));
$y=count($recipe_salat);
$z=count($recipe_soup);
$w=count($recipe_pasta);

if($x==$y){
    print "Salat can by prepared";
}else { print "Is NOT posible prepared salat";}
print "<br>";
if($x==$y){
    print "Soup can by prepared";
}else { print "Is NOT posible prepared soup";}
print "<br>";
if($x==$w){
    print "Pasta can by prepared";
}else { print "Is NOT posible prepared pasta";}
// de aratat ce recete se pot pregati din ce este
?>