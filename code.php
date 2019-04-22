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
for($i=0; $i<strlen($original_mesage); $i++){
    $c=$original_mesage[$i];
    // $c--;   Pe acasa cu codul simbolului -ord
    $original_mesage[$i]=$c;
}
print "decodat: ".$original_mesage."<br>";
?>