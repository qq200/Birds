<?php
function volume($w, $l, $h){
    $v=$w*$l*$h;
    return $v;
}
// print $v; //NU ESTE POSIBIL -variabila locala
$r=volume(10,10,3);
print $r;


?>