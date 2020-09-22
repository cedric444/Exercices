<?php
for($i=0; $i<10; $i++)
{
    $array[] = random_int(0,100);
    echo $array[$i]."\t";
}
$i = 0;
$j = count($array)-1;
while(($i<count($array)/2) && ($j>count($array)/2))
{
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
    $i++;
    $j--;
}
for($i=0; $i<count($array); $i++)
echo $array[$i]."\t";