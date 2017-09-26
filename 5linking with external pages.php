<?php

//from 43th tut. to  --th tut.

//including other page

include 'externalpage.php';

 // preg_match function 
 
 $s = 'hey i m prashant from lucknow. ';
 
 if(preg_match('/is/',$s))
 {
   echo 'match found<br>';}
   else {echo 'not found<br>';}

 if(preg_match('/prashant/',$s))
 {
   echo 'match found<br>';}
   else {echo 'not found<br>';}

//strpos function

$s1 = ' this is my first experience toward love with .... ';

$s2 = 'is';
echo strpos($s1,$s2).'<br>';
echo strpos($s1,$s2,4).'<br>';
echo strpos($s1,$s2,7).'<br>';
echo strpos($s1,'my',2).'<br>';


  // conversion of lower case and upper case
  
   $s3 = 'i M prAshAnt veRma .' ;
  echo $lower = strtolower($s3).'<br>';
  echo $upper = strtoupper($s3).'<br>';

// replacing text in a string

$s4 = 'hello i m a prashant singh . ';
echo $s4_new = substr_replace($s4 , 'verma' , 21 ,5).'<br>';

?>

