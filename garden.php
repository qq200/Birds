<?php
//.->empty
//o->potato
//v->straberry
//T->tomato
//*->happy flower
const PRICE_POTATO      =100;
const PRICE_STRAWBERRY  =200;
const PRICE_TOMATO      =250;
const PRICE_HAPPY_FLOWER=500;

const IMG_POTATO   ="http://icons.iconarchive.com/icons/google/noto-emoji-food-drink/32/32360-potato-icon.png";
const IMG_STROWBERY="http://icons.iconarchive.com/icons/fi3ur/fruitsalad/32/strawberry-icon.png";
const IMG_TOMATO   ="http://icons.iconarchive.com/icons/bingxueling/fruit-vegetables/32/tomato-icon.png";
const IMG_HAPPY    ="http://icons.iconarchive.com/icons/dapino/girl-in-a-bunny-suit/32/girl-bunny-happy-icon.png";
const IMG_SOIL     ="http://icons.iconarchive.com/icons/fatcow/farm-fresh/32/soil-layers-icon.png";
$garden=".oov.*.TTo*";
$money=0;
// print "<h3>$garden</h3>.\n";
$o=0;
$v=0;
$t=0;
$h=0;
/////////////////calcul//////
for($i=0; $i<strlen($garden); $i++){
    if($garden[$i]=='o'){
       $money+=PRICE_POTATO;
       print "<img src='".IMG_POTATO."'/>";
       $o+=1;
    }
    if($garden[$i]=='v'){
       $money+=PRICE_STRAWBERRY;
       print "<img src='".IMG_STROWBERY."'/>";
       $v+=1;
    }
    if($garden[$i]=='T'){
       $money+=PRICE_TOMATO;
       print "<img src='".IMG_TOMATO."'/>";
       $t+=1;
    }
    if($garden[$i]=='*'){
       $money+=PRICE_HAPPY_FLOWER;
       print "<img src='".IMG_HAPPY."'/>";
       $h+=1;
    }
    if($garden[$i]=='.'){
       
       print "<img src='".IMG_SOIL."'/>";
       
    }
     // print $garden[$i]."<br>";    
}
print "<h3>$money</h3>";

print "Ati strins:<br> potato-$o<br> strowberry-$v<br> tomato-$t<br> happy-$h<br>"
?>
