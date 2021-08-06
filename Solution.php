<?php

class Solution
{
    /**
     * @param array $inputData
     * @return array
     *
     */
    public function findUnsortedSubarray(array $inputData): array
    {
        $inputArraySize = count($inputData);
        $traverseSize = $inputArraySize - 1;

        for ($left = 0; $left < $traverseSize; $left++) {
            if ($inputData[$left] > $inputData[$left + 1]) {
                $leftIndex = $left;
                break;
            }
        }

        if ($left === $traverseSize) {
            echo "Array is already sorted!\n";
            return [
                'left' => null,
                'right' => null
            ];
        }

        for ($right = $traverseSize; $right > 0; $right--) {
            if ($inputData[$right] < $inputData[$right - 1]) {
                $rightIndex = $right;
                break;
            }
        }

        $min = $inputData[$rightIndex];
        $max = $inputData[$leftIndex];
        $result['right'] = $rightIndex;
        $result['left'] = $leftIndex;

        for ($i = $leftIndex + 1; $i <= $rightIndex; $i++) {
            if ($inputData[$i] < $min) {
                $min = $inputData[$i];
                $result['left'] = $i;
            }
            if ($inputData[$i] > $max) {
                $max = $inputData[$i];
                $result['right'] = $i;
            }
        }

        for ($i = $traverseSize; $i >= $rightIndex; $i--) {
            if ($inputData[$i] < $max) {
                $result['right'] = $i;
                break;
            }
        }

        for ($i = 0; $i <= $leftIndex; $i++) {
            if ($inputData[$i] > $min) {
                $result['left'] = $i;
                break;
            }
        }

        return $result;
    }
}