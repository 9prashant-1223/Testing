 <?php

$handle = fopen('file1.txt' , 'a');

//fwrite($handle , 'Hey , i m a prashant . feeling alone and bored so much at college . ');


//fwrite($handle , 'Hey , i m a prashant . feeling alone and bored so much at college . '."\n");
//fwrite($handle , 'hello , pratama and prakar . ');





//appending will add previous data also including new one

fwrite($handle , "\n\n".'hello , only three pra (enrolled no. 56,57,58) are thrown away from their homes and get back to their hostel  . '."\n");

fclose($handle);


?>