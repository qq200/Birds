<?php
    $menu=[
        'pizza'=>75.00,
        'soup' =>25.50,
        'salad'=>45.00,
        'cola' =>10.00,
        'beer' =>15.00,
        'steak'=>150.00
    ];
    $food=$_GET['food']??'';
    $portion=$_GET['portion']??'';
    $t=$portion;


?>

<form >
    <select name="food">
    <?php
        foreach($menu as $name => $price){
            print "<option value='$name'>$name ($price MDL)</option>  "; 
            //ACASA: prin printf() sa se afiseze 000.00 total pe acasa
        }

    ?>          
    </select>
    <select name="portion">
    <option value="1">1 portion</option>
    <option value="2">2 portion</option>
    <option value="3">3 portion</option>
    </select>
    <button>ORDER</button>
</form>


<h2><?php print "you've ordered $portion portion of '$food' ! TOTAL Cost is: ($t)" ?></h2>


