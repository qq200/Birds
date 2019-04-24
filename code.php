<?php
$original_mesage='i am php developer';
// $c='a';
// $c++;
// print $c;
print "original: ".$original_mesage."<br>";
//encoding : se schimba literile cu una inainte
for($i=0; $i<strlen($original_mesage); $i++){
    $c=$original_mesage[$i];
    $c++;
    $original_mesage[$i]=$c;
}
print "shifar: ".$original_mesage."<br>";
// decodare
print "<b>decodat: </b>";
for($i=0; $i<strlen($original_mesage); $i++){    
    $cod=ord($original_mesage[$i]);
    if($cod!=32){
        print chr($cod-1);
    }else{
        print chr($cod);
    }
}
?>