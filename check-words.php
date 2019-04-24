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



?>