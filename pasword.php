<?php
//1-cleaning
//2-validation
//3-crypt
//4-save
$password_input=" aaa 1d D! @2a ";
//1
$password=trim($password_input);//sterge de space prin parti, dar este inutil daca este str_ireplace
$password=str_ireplace(' ','',$password); //sterge locurile din-nauntru
var_dump($password);
//2 
//EROR:

/////////////////////////////////////////////////
//*min 8 symbol
if(strlen($password)<8){
    print "<br>ERROR: minimum 8 simbols <br>";
}
//*min 'A'
$upper=false;  // presupunem ca nu sunt cu litere majuscule
for($i=0; $i<strlen($password); $i++){
    if($password[$i]>='A'and $password[$i]<='Z'){//verifica toate majusculele
        $upper=true;
    }
}
if($upper==false){
    print "ERROR: minimum 1 capital leter <br>";
}
//*min 'a'
$dupper=false;  // presupunem ca nu sunt cu litere minuscule
for($i=0; $i<strlen($password); $i++){
    if($password[$i]>='a'and $password[$i]<='z'){//verifica toate minusculele
        $dupper=true;
    }
}
if($dupper==false){
    print "ERROR: minimum 1 minuscul leter <br>";
}
//*min '0-9'
$number=false;  // presupunem ca nu sunt cifre
for($i=0; $i<strlen($password); $i++){
    if($password[$i]>='0'and $password[$i]<='9'){//verifica toate cifrele
        $number=true;
    }
}
if($number==false){
    print "ERROR: minimum 1 number <br>";
}
//*min '!'
$symbol=false;  // presupunem ca nu sunt simboluri
for($i=0; $i<strlen($password); $i++){
    // print ord($password[$i])."<br>";
    if((ord($password[$i])>=33) || (ord($password[$i])<48) || (ord($password[$i])>=58) || (ord($password[$i])<=64)){//verifica toate simbolurile
        $symbol=true;
    };
}
if($symbol==false){
    print "<br>ERROR: minimum 1 symbol <br>";
}
?>