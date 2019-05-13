<?php
//FUNCTION
    //DRY
    //Separate concerns
    //Capsule(global/local)

//*block of code-->is_callable
//*name snake_case_function
//*arguments(input)
//*returns

// function f_name($arg1, $arg2...){
    //inst1
    //inst2
    //instn
//return $value;
//}
        //1-declare
function hello($name, $lang){
    switch($lang){ 
    case "en": print "$name Hello<br>"; break;
    case "ru": print "$name Privet<br>"; break;
    case "ro": print "$name Buna<br>"; break;
    }
}
        //2-call the function
hello("Ivan", "en");
hello("Vovan", "ru");
hello("Tatian", "ro");
?>