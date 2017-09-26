<?php

$filename = 'file.txt';

$file = fopen($filename ,'r');

$data = fread($file,filesize($filename));

$names = explode(',' , $data);

foreach( $names as $name)
{
  echo $name.'<br>' ; 
}




?>