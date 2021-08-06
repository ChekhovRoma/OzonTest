<?php

require_once("Solution.php");
require_once("SecondSolution.php");

echo "Solution:\n";

$solution = new Solution();

$inputData = [1, 1, 1, 4, 3, 2, 99, 4, 4, 4];
echo "Input array: [1, 1, 1, 4, 3, 2, 99, 4, 4, 4]\n";
$result = $solution->findUnsortedSubarray($inputData);
if ($result['right'] !== null && $result['left'] !== null) {
    echo "Unsorted sub-array left index = {$result['left']}, right index = {$result['right']}.\n\n";
}

$inputData = [2, 1, 3, 4, 5, 6, 7];
echo "Input array: [2, 1, 3, 4, 5, 6, 7]\n";
$result = $solution->findUnsortedSubarray($inputData);
if ($result['right'] !== null && $result['left'] !== null) {
    echo "Unsorted sub-array left index = {$result['left']}, right index = {$result['right']}.\n\n";
}

$secondSolution = new SecondSolution();
echo "Second Solution:\n";

$inputData = [1, 3, 4, 6, 5, 2, 11, 7, 10, 14, 15, 16];
echo "Input array: [1, 3, 4, 6, 5, 2, 11, 7, 10, 14, 15, 16]\n";
$result = $solution->findUnsortedSubarray($inputData);
if ($result['right'] !== null && $result['left'] !== null) {
    echo "Unsorted sub-array left index = {$result['left']}, right index = {$result['right']}.\n\n";
}

$inputData = [1, 2, 3, 4, 5, 6, 7, 10, 11, 14, 15, 16];
echo "Input array: [1, 2, 3, 4, 5, 6, 7, 10, 11, 14, 15, 16]\n";
$result = $solution->findUnsortedSubarray($inputData);
if ($result['right'] !== null && $result['left'] !== null) {
    echo "Unsorted sub-array left index = {$result['left']}, right index = {$result['right']}.\n\n";
}
die;
