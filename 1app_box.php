<?php



 if (isset($_POST['string']) && isset($_POST['search']) && isset($_POST['replace']))
 {
//echo 
$string = $_POST['string'].'<br>';
//echo 
$search = $_POST['search'].'<br>';
//echo
 $replace = $_POST['replace'].'<br>';


$lenght = strlen($search);
$offset = 0;

     if (!empty($string)&&!empty($search)&&!empty($replace))
     {//echo 'OK.<br><br>';
         while($strpos = strpos($string,$search,$offset))
         {
         echo $strpos.'<br>';
          $offset = $strpos + $lenght.'<br>' ;
          echo $text = substr_replace($string,$replace,$strpos,$lenght);
         }


     }
  }
 else
  {
   echo 'Please fill all the columns . ';
  }
//echo $stirng_new =  substr_replace($string,$search,$replace) ;


?>
  <hr>

<form action="1app_box.php" method ="POST">
<textarea rows="15" column="60" name="string"><?php echo $string; ?> </textarea>  <br/> <br/>
Search for : <br/>
<input type ="text" name="search" >   <br/>  <br/>
Replace with:                       <br/>
<input tye ="text" name="replace">         <br/><br/>
<input type="submit" value="Find and Replace">    <br/>


