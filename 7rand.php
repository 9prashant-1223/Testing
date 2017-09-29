<?php

 $rand = rand();

 $max = getrandmax();    //maximum value for rand

 echo $rand.' / '.$max.'<br><br><br>';


 if(isset($_POST['roll']))
 {
   $rand1 = rand(1 ,9);      // 1 and 9 are lower ad upper limits
   echo 'u rolled a '.$rand1.'<br><br>';

 }
?>
<form action="7rand.php" method="POST">
<input type ="submit" name = "roll" value="roll the dice">
</form>