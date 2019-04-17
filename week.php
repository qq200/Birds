<?php
$day=17;

while($day<=23){
    print $day."<br>";
    $day++;
}

?>
<br>
<?php
$n=1;
while($n<=9){
    if(($n%2)==0){
    print "o";
    }else{print "x";}

    if(($n%3)==0){
        print "<br>";
    }
    
    $n++;
}




?>