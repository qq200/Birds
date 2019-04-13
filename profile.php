<?php
//user data
$avatar="https://pickaface.net/gallery/avatar/Garret22785730d3a8d5525.png";
$nickname="John";
$birth_year=1990;
$job="Segnior Developer";
$phone="+250111111";
$income=200000; //USD/year
$experience=10;
?>
<pre style="padding:60px; border: 2px solid black;">
<hr>
<img src="<?php print $avatar ?>" style="float:right"/>
<br>
<h3><?php print $nickname." - ".$birth_year ?></h3>
<?php print $job ?>
<br>
&#9742; : <a href="" type="tel"><?php print $phone ?></a>
<br>
<hr>
Profesional experience: <b> <?php print $experience ?> year</b>
<br>
Income: <b> <?php print $income ?> USD/Year </b>
<hr>
</pre>