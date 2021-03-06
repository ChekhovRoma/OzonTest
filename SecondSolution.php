<?php

class SecondSolution
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

        $isFirstLeftIndexEntry = false;
        $isFirstRightIndexEntry = false;

        for ($i = 0; $i < $traverseSize; $i++) {
            if ($isFirstLeftIndexEntry === false && $inputData[$i] > $inputData[$i + 1]) {
                $leftIndex = $i;
                $isFirstLeftIndexEntry = true;
            }
            if ($isFirstRightIndexEntry === false
                && $inputData[$traverseSize - $i] < $inputData[$traverseSize - $i - 1]) {
                $rightIndex = $traverseSize - $i;
                $isFirstRightIndexEntry = true;
            }
        }

        if ($isFirstLeftIndexEntry === false && $isFirstRightIndexEntry === false) {
            echo "Array is already sorted!\n";
            return [
                'left' => null,
                'right' => null
            ];
        }

        $min = $inputData[$rightIndex];
        $max = $inputData[$leftIndex];
        $result['right'] = $rightIndex;
        $result['left'] = $leftIndex;

        $indexesMiddle = round(($rightIndex + $leftIndex) / 2);

        $isLeftIndexReached = false;
        $isRightIndexReached = false;
        for ($i = 0; $i < $inputArraySize; $i++) {
            $leftPointer = (int)$indexesMiddle - $i;
            $rightPointer = (int)$indexesMiddle + $i;

            if ($leftPointer > $leftIndex) {
                if ($inputData[$leftPointer] < $min) {
                    $min = $inputData[$leftPointer];
                    $result['right'] = $rightPointer;
                }
                if ($inputData[$leftPointer] > $max) {
                    $max = $inputData[$leftPointer];
                    $result['right'] = $rightPointer;
                }
            }
            if ($leftPointer === $leftIndex) {
                $isLeftIndexReached = true;
            }

            if ($rightPointer < $rightIndex) {
                if ($inputData[$rightPointer] < $min) {
                    $min = $inputData[$rightPointer];
                    $result['left'] = $leftPointer;
                }
                if ($inputData[$rightPointer] > $max) {
                    $max = $inputData[$rightPointer];
                    $result['right'] = $rightPointer;
                }
            }
            if ($rightPointer === $rightIndex) {
                $isRightIndexReached = true;
            }

            if ($isRightIndexReached === true && $isLeftIndexReached === true) {
                if ($leftPointer >= 0) {
                    if ($inputData[$leftPointer] > $min) {
                        $result['left'] = $leftPointer;
                    }
                }
                if ($rightPointer <= $traverseSize) {
                    if ($inputData[$rightPointer] < $max) {
                        $result['right'] = $rightPointer;
                    }
                }
            }
        }

        return $result;
    }
}