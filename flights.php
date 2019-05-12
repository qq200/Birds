<?php 
    // предположим есть план полетов для разных стран мира
    // в виде массива - многомерного
    // 1) при помощи foreach() вывести названия стран
    //    в select/option внутри формы что ниже
    // 2) при выборе страны из списка когда пользователь нажал на
    //    "SHOW HOURS" вывести в форме вротой список где выводится время (часы)
    //    только для страны что была выбрана!
    $flights = [
        'moldova' => [
            '11:00',
            '17:00'
        ],
        'ucraine' => [
            '11:00',
            '13:00',
            '18:00',
        ],
        'romania' => [
            '08:00',
            '15:00',
            '23:00',
        ],
        'france' => [
            '08:00',
            '13:00',
            '23:00',
        ],
    ];
?>
<form>
    <select name="country">
    <?php
        foreach($flights as $country => $hour){
            print "<option value='$country' >$country</option>";
             
        }  
    ?> 
    
    </select>  
    
        <select name="hour">
        <?php
                foreach($flights[$country] as $hour){
                    if(isset($_GET['country']) ) {
                   print "<option value='$hour'>$hour</option>"; 
               }           
               } ?>
        </select> 
    
    <button>SHOW HOURS</button>
    
</form>