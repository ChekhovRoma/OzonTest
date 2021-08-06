<?php
use PHPUnit\Framework\TestCase;
//$inputData = [4, 4, 4, 4, 10, 5, 11, 7, 10, 14, 20, 16];
//$inputData = [1, 1, 1, 4, 3, 2, 99, 4, 4, 4];
//$inputData = [1, 3, 4, 6, 5, 2, 11, 7, 10, 14, 15, 16];
//$inputData = [1, 2, 4, 3, 5, 6, 7];
//$inputData = [1, 2, 3, 4, 5, 7, 6];
$inputData = [2, 1, 3, 4, 5, 6, 7];
//$inputData = [1, 2, 3, 4, 5, 6, 7, 10, 11, 14, 15, 16];
require_once("Solution.php");
$solution = new Solution();
$result = $solution->findUnsortedSubarray($inputData);
echo "Unsorted sub-array left index = {$result['left']}, right index = {$result['right']}.";
die;
