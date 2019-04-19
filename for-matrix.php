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
// conturul cu alte siboluri
?>