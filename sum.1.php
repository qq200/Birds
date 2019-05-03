<form >
    <input type="text" name="a">
    <input type="text" name="b">
    <button>ok</button>

</form>


<?php
$a=$_GET['a']??0; //copiem in $a ce a transmis clientul prin metoda GET, daca nu a transmis nimic =>0
$b=$_GET['b']??0;

print $a+$b."<br>";
var_dump( $_GET);

?>
