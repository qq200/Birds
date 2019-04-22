<?php
//1-cleaning
//2-validation
//3-crypt
//4-save

$password_input=" 1234 D   56 ";
// var_dump($password_input);
//1
$password=trim($password_input);//sterge de space prin parti, dar este inutil daca este str_ireplace
$password=str_ireplace(' ','',$password); //sterge locurile din nauntru
var_dump($password);
//2 
//EROR first
//*min 8 symbol
//*min 'A'
//*min 'a'
//*min '0-9'
//*min '!'
if(strlen($password)<8){
    print "<br>ERROR: minimum 8 simbols <br>";
}
$upper=false;  // presupunem ca nu sunt cu litere majuscule
for($i=0; $i<strlen($password); $i++){
    if($password[$i]>='A'and $password[$i]<='Z'){//verifica toate majusculele
        $upper=true;
    }
}
if($upper==false){
    print "ERROR: minimum 1 capital leter <br>";
}

?>