<?php

if (isset($_POST['name']))
{
  $name = $_POST['name'] ;
  if (!empty($name))
  {
    $handle = fopen('name.txt','a');
    fwrite($handle, $name."\n");
    fclose($handle);
    
    
    //for reading the file

   $read = file('name.txt');





  }
  else
  {
    echo 'plze input the name . ';
  }
}


?>

<form action="get_text_from_user.php" method="POST">
<br>
Name :-
<input type="text" name="name" ><br><br>
<input type="submit" value="Submit" >
 </form>