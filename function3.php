<?php declare (strict_types=1);
phpinfo();
function f($a1, $a2=1, $a3=1){//daca nu sunt transmise valorile se inlocuieste cu 1
    return $a1*$a2*$a3;
}
print f(10)."<br>";
print f(10,20)."<br>";
print f(10,20,30)."<br>";
print "<hr>";



//////////////////////////////////////////////
//functions->Strict Typing(alea C/C++)
//  *speed/memory
//  *safety

//?type-optional
function add(int $a,int $b)/* :void */{
    // return $a+$b;
   print $a+$b;
}
add(10,20);
// print add(10,20)."<br>";
// print add("10","20")."<br>";//mai multa memorie,+conversion/casting
// print add(10,true)."<br>";//mai multa memorie,+conversion/casting
?>