<?php

$a=rand(1,100);
$b=rand(1,100);


$r=$a+$b;
$check=$_GET['check']??-1;
$r_check=$_GET['r']??-1;

if($check!=-1){
    if($r_check==$check){
        print "Welcom HUMAN";
    }else{
        print "Bye Bye ROBOT";
    }
}


?>





<form action="">
    enter result <b>"<?php print $a ?>+<?php print $b ?>"</b>  here >>><input type="text" name="check">
    <input type="hidden" name="r" value="<?php print $r ?>">
    <button>OK</button>
</form>