<?php

//from 29th tut. to  29th tut.

mysql_connect('localhost','prashant','') or die('database is not connected<br/>');
echo 'database is connected <br/>';

//get ip address
$user_ip = $_SERVER['REMOTE_ADDR'];
function ip(){
  global $user_ip;           //globalisation the variable
  echo 'your ip adress is :- '.$user_ip.'<br/>';
}

ip();

//string function

$n = '        this is an example of the string     .        ';

echo '<br/>';
$wordcount = str_word_count($n);
echo $wordcount;

echo '<br/>';
$wordcount1 = str_word_count($n ,0,'.');
print_r($wordcount1);

echo '<br/>';
$wordcount2 = str_word_count($n ,1,'.');  //for getting words
print_r($wordcount2);

echo '<br/>';
$wordcount3 = str_word_count($n ,2, '.');    //for getting words position also
print_r($wordcount3);

 echo '<br/>';
//reversing of string

$reverse = strrev($n);
echo $reverse;
echo '<br/>';

//comparison of string
$s1 = 'this is my first php tutorial . i m prashant .';
$s2 = 'this is my second php tutorial . i m pareshan .';

similar_text($s1,$s2,$result);
echo $result;

echo '<br/>';
//lenght of the string
$lenght =strlen($s1);
echo $lenght;

echo '<br/>';

echo $trimmed1 = trim($s1);
echo '<br/>';

echo $trimmed2 = rtrim($s1);
echo '<br/>';

echo $trimmed3 = ltrim($s1);
echo '<br/>';

//add slashes... strip slashes
$s3='this is the <img src="image.jpg"> string..';

$slashes = htmlentities(addslashes($s3));
echo $slashes;
echo '<br/>';
echo stripslashes($slashes);
echo '<br/>';

//array

$a1 = array('sunday','monday','tuesday','wednesday','thursday','friday');
$a1[6]='saturday';    //adding values to the array

echo $a1[3].'<br/>';
echo $a1[6].'<br/>';

print_r($a1);
echo '<br/>';

//assighning vales to the index elements

$a2 = array('sunday'=>100,'monday'=>200,'tuesday'=>600,'wednesday'=>6006,'thursday'=>87645,'friday'=>4564);

 print_r($a2);
 echo '<br><br>';

 // nested array and foreach construction
 
 $hobby = array ('game' => array( 'cricket' , 'hockey', 'chess','football','snooker') ,
           'song' => array('old' ,'sad','love','romantic'));
           
echo $hobby['game'][3].'<br>';       //to output particular inner element
echo $hobby['song'][2].'<br><br>';

foreach ($hobby as $options => $innerelement)
{
  echo '<strong>'.$options.'</strong><br/>';

 // echo $innerelement.'<br/>';   //do not give output . so we have to use nested foreach loop

  foreach ($innerelement as $items)
  {
    echo $items.'<br/>';
  }
}





















?>