<?php

include('Models/Images_Brutes.php');
include('Models/Meme.php');
$len = 42;   // total number of numbers
$min = 1;  // minimum
$max = 42;  // maximum
$range = []; // initialize array
foreach (range(0, $len - 1) as $i) {
    while (in_array($num = mt_rand($min, $max), $range));
    $range[] = $num;
}






include('Views/MemeView.php');