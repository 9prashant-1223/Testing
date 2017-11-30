   <?php

   /* my first php file
   tutorial by ALEX 
   from 9th tut. to  12_th tut. */



  

   echo'<strong>hello world.</strong>' ;
   
 

    echo"<input type='text'name='name'>";
    echo'<input type="text"name="name"><br/>';
    echo"<input type=\"text\"name=\"name\">";
    echo'<input type=\'text\'name=\'name\'value=\'prashant\'>';

    // text for html embedding.

   $text ='hello world';
   
   ?>
   <input type='text' value='<?php echo $text ; ?> '>
