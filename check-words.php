<?php
$text1="PHP is a great language. The current version is 7.3!";
//words?
$words=explode(" ", strtolower($text1));
print "words: ".count($words)."<br>";
// var_dump($words);
//"PHP is great" >text1
$search_text="php is great";
$search_words=explode(" ",strtolower($search_text));
// var_dump($search_text);
$intersect=array_unique(array_intersect($words,$search_words));
if(count($intersect)==count($search_words)){
    print "Phrase ' $search_text ' found";
}else{
    print "Phrase '$search_text ' NOT found";
}
//Acasa: LETERS???
$symbol=0;  // presupunem ca nu sunt simboluri
for($i=0; $i<strlen($text1); $i++){
    if(ord($text1[$i])>=65 and ord($text1[$i])<=90 
    || ord($text1[$i])>=97 and ord($text1[$i])<=122){//verifica toate simbolurile
        $symbol+=1;
    };
    
}
print "<br>Nr. of leters in- '$text1' is: ". $symbol;
?>