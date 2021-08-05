<?php

$inputData = [1, 3, 4, 6, 5, 2, 11, 7, 10, 14, 15, 16];
require_once("Solution.php");
$solution = new Solution();
$result = $solution->findUnsortedSubarray($inputData);
echo "Unsorted sub-array left index = {$result['left']}, right index = {$result['right']}.";
die;
