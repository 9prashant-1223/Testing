<?php

$handle = fopen('file.txt' , 'w');

fwrite($handle , 'Hey , i m a prashant . feeling alone and bored so much at college . ');

//for get output in nextline use "\n"

fwrite($handle , 'Hey , i m a prashant . feeling alone and bored so much at college . '."\n");
fwrite($handle , 'hello , pratama and prakar . ');

//to close the above file use fclose function

fclose($handle);


?>