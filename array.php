<?php
$cars=[1,2,3,4,5];
$n=count($cars);
// echo 'hello '.$n;   
$sum=0;
$i=0;
for($i=0;$i<$n;$i++)
{
    $sum+=$cars[$i];
}
echo 'The sum of numbers is:'.$sum;