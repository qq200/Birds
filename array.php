<?php
$citys=[
    "Chisinau",
    "Balti",
    "Cahul",
    "Orhei",
    "Comrat"
];

$citys[]="Nisporeni"; //se adauga la urma masivului
array_unshift($citys, "Edinet") ; //adauga la inceput

sort($citys);
for($i=0; $i<count($citys); $i++){
print $citys[$i]."<br>";
}

?>