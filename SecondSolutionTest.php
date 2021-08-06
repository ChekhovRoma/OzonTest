<?php

use PHPUnit\Framework\TestCase;

require_once("SecondSolution.php");

class SecondSolutionTest extends TestCase
{
    /**
     * @param array $inputData
     * @dataProvider getSortedArray
     */
    public function testSolutionWithoutUnsortedArray(array $inputData): void
    {
        $sut = new SecondSolution();

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
     * @dataProvider getUnsortedArray
     */
    public function testSolutionWithUnsortedArray(array $inputData): void
    {
        $sut = new SecondSolution();

        $result = $sut->findUnsortedSubarray($inputData);

        self::assertEquals(
            [
                'left' => 3,
                'right' => 9
            ],
            $result);
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
        return [[[1, 1, 1, 4, 3, 2, 99, 4, 4, 4]]];
    }
}