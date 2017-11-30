<?php

/*// use $_SERVER['REMOTE_ADDR'] to get user ip address

echo $ipaddress = $_SERVER['REMOTE_ADDR'].'<br><br>';

$ipblock = array('127.0.0.1','100.2.10.3','::1');

foreach ($ipblock as $ip)
{
  //echo $ip.'<br><br>';
  if ($ip == $ipaddress)
  {
    die ('Your ip address '.$ip.' has been blocked');
  }
}  */



 // getting ip address in a better way

 $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
 $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
 $remote_addr = $_SERVER['REMOTE_ADDR'];

 if (!empty($http_client_ip))
 {
   $ip_address = $http_client_ip;
 }
else if (!empty($http_x_forwarded_for))
 {
   $ip_address = $http_x_forwarded_for;
 }
else
 {
   $ip_address = $remote_addr;
 }

echo $ip_address;
?>