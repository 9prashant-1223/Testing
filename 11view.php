<?php
 session_start();
echo $_SESSION['name'];
  $s = $_SESSION['name'];

if(isset($s))
{
  echo 'welcome , '.$s.'<br><br>';
}
else
{
  echo 'please log in';
}

?>