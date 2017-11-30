<?php

echo time().'<br>';   //gine total second till 1st jan

$time = time();

echo $realtime = date('H:i:s',$time).'<br>';           //give current time

echo $modifiedtime1 = date('H:i:s',$time-100).'<br>';


echo $realdate1 = date('D M Y',$time).'<br>';                             //give surrent date
echo $realdate2 = date('d m Y',$time).'<br>';  //10/12/2016

echo $modifieddate2= date('d M Y # H:i:s',strtotime('+1 week')).'<br>';
echo $modifieddate3 = date('d M Y # H:i:s',strtotime('+1 year')).'<br>';

echo $modifieddate4= date('d M Y # H:i:s',$time-(7*24*3*3)).'<br>';

echo $realdate3 = date('D M Y @ H:-i:-s',$time).'<br>';         //give both time and date




?>