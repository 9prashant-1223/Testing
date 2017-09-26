<?php

$names = array('prashant','pratham','mehak','ravi','rajat');
$edited = array('p******t','p*****m','m***k','r**i','r***t');

 if(isset($poste['user'])&&!empty($poste['user']))
 {
  echo $user_input = $poste['user'];
  echo $upper = strtoupper($user_input).'<br>';
  echo $lower = strtolower($user_input).'<br>'    ;
   echo $new = str_ireplace($names,$edited,$lower);

 }



?>

 <hr>
<form action="index1.php" method="POST">
<textarea name="user" rows ="26" cols="60">
<?php echo $new; ?>
</textarea>
<input type="submit" value="submit">
</form>