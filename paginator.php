<?php
$page=1;
$page_selected=200;
while($page<=1000){
    if($page==1 && $page!==$page_selected){
        print "<...";
    }     
    if($page==$page_selected){
        print "[".$page."]";
    }else if($page==$page_selected-5 ||$page==$page_selected-4 || 
            $page==$page_selected-3 ||$page==$page_selected-2 ||
            $page==$page_selected-1 ||$page==$page_selected+5 ||
            $page==$page_selected+4 || $page==$page_selected+3||
            $page==$page_selected+2 ||$page==$page_selected+1){
        print $page." ";}
    if($page==1000 && $page!=+$page_selected){
        print "...>";
    }
    $page++;
}
?>