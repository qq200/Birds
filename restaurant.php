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
            $p=sprintf("%01.2f", $price) ;
            print "<option value='$name'>$name ($p MDL)</option>  ";            
            $t_cost=$t+$price;            
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
<h2><?php print "You've ordered $portion portion of '$food' ! TOTAL COST is: ($t_cost) MDL" ?></h2>

