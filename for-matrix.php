<?php
const X=3;
const Y=2;

for($row=1; $row<=10; $row++){

    for($col=1; $col<=10; $col++){
        if($col==X && $row==Y){
            print "&#8364";
        }else {print "* ";  }  
    }
    print "<br>";
                
}
// acasa: conturul cu alte siboluri



$text='Today is 2019!!!';

for($i=strlen($text)-1; $i>=0; $i--){
    print $text[$i];
}




//acasa: 
//$t1="This iPhone costs 1000$"  >>4
//$t2="you phon number is 555-777-888  >>9
//de vazut cite simboluri numere sunt in fiecare


?>