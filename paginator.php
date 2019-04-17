<?php
$page=1;
$page_selected=3;

while($page<=9){
    if($page==1){
        print "<";
    } 
    if($page==$page_selected){
        print "[".$page."]";
    }else{print $page." ";}
    if($page==9){
        print ">";
    }
    $page++;
}
// daca e activ 1 strelca se pierde, daca 9 ultima se pierde

//1000pages, 2000 activ, 11 show (+-5)
// <....195...[200]..205..>



?>