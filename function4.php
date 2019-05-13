<?php
//stack
function h1($content){
    return "<h1>$content</h1>";
}

// print h1("Hello title!")."<br>";

function a($content, $url){
    return "<a href='$url'>$content</a>";
}
// print a("click me!","https://www.google.com/");

print h1(
        a("click me!","https://www.google.com/")
    );



//////acasa
function first_three($items){ //masiv [1,2,3,4,5,6]
    //return first 3 element
}
//first_free([10,20,30,40,50])->[10,20,30]
?>