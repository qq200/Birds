<?php
$data=[
    "x"=>1000,
    "z"=>-100,
    "y"=>100
];
for($i=0; $i<count(array_keys($data)); $i++){
    print array_values($data)[$i]."<br>";
}
$keys=array_keys($data);
sort($keys);
for($i=0; $i<count($keys); $i++){
    print $keys[$i];
    
}
print "<br>";
var_dump(array_flip($data));
?>