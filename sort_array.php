<?php

    $arr=array(3,5,1,4,9);
    $n=count($arr);
    for($i=0;$i<$n;$i++)
    {
        for($j=0;$j<$n-$i-1;$j++)
        {
            if($arr[$j]>$arr[$j+1])
            {
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
    }
    for($i=0;$i<$n;$i++)
    {
        echo $arr[$i]." ";
    }
?>