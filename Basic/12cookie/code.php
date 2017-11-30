<?php

 setcookie('name','prashant',time()+15);

 echo $_COOKIE['name'].'<br><br><br>';
 
 
 
 //using time function externally

 $time = time();
 setcookie('username','pratham',$time+15);
 
 //echo $_COOKIE['username'];
 
 //to unset the cookie

 setcookie('username','pratham',$time-15);
 echo $_COOKIE['username'];

?>

'<br><br>'//showing this as cookie is unseted  '''  plze set the cookie if u want to get the output