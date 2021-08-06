<?php

use PHPUnit\Framework\TestCase;

require_once("Solution.php");

class SolutionTest extends TestCase
{
    /**
     * @param array $inputData
     * @dataProvider getSortedArray
     */
    public function testSolutionWithoutUnsortedArray(array $inputData): void
    {
        $sut = new Solution();

        $result = $sut->findUnsortedSubarray($inputData);

        self::assertEquals(
            [
                'left' => null,
                'right' => null
            ],
            $result);
    }

    /**
     * @param array $inputData
     * @dataProvider getSortedArray
     */
    public function testSolutionWithUnsortedArray(array $inputData): void
    {

    }

    /**
     * @return array
     */
    public function getSortedArray(): array
    {
        return [[[1, 2, 3, 4, 5, 6, 7]]];
    }

    /**
     * @return array
     */
    public function getUnsortedArray(): array
    {
        return [[[1, 2, 3, 4, 5, 6, 7]]];
    }
}