<?php
//from 29th tut. to  42th tut.

echo $name ='prashant  <br/>';

$enr_no= '16112057 <br/>';

echo $enr_no ;


//for combined output

$day='friday';
$date=9;
$month='decenber';
$year=1997;

echo '<br/>The birth date of prashant is '.$day.' '.$date.' '.$month.' '.$year.'<br/>';

echo 'The birth date of prashant is <strong>'.$day.' '.$date.' '.$month.' '.$year.'</strong><br/>';

//if statement

$m='hello';
if($m=='hello'){
  echo 'true <br/>';
}
else{echo 'false';}

//catenation using operator .=

$p ='hello';
$p .=' world<br/>';
echo $p;

//logical operator ===   (as it compare value as well as data type also ; whereas == compares only value)

$num1 ='1';
$num2 =1;

if($num1==$num2)
{echo 'equal<br/>';}
else
{echo 'not equal<br/>';}

 if($num1===$num2)
{echo 'equal<br/>';}
else
{echo 'not equal<br/>';}

// while loop

$counter =1;
while($counter<=5)
{echo $counter.' :- hello <br/>';
$counter++;  //condition
}
 echo '<br/>';
// do while loop

  $counter=1;
 do{
   echo $counter.':- hey<br/>';
   $counter++;
 }
 while($counter<5);
  echo '<br/>';
 //for loop

 for ($c =0; $c<=3 ; $c++)
 {echo $c.'<br/>';}
   echo '<br/><br/>';
  // switch statement 
  
  $n1=5;
  switch($n1){
    case 1 : echo '1';  break;
    case 2 : echo '2'; break;
    case 3 : echo '3';break;
    default : echo 'number not found<br/><br/>';
    
    // die or exit function
    die('error page is not available.');
    echo 'hello world';
  }


?>