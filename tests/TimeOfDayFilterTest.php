<?php

namespace Filter;

use TraderInteractive\Exceptions\FilterException;
use TraderInteractive\Filter\TimeOfDayFilter;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \TraderInteractive\Filter\TimeOfDayFilter
 */
class TimeOfDayFilterTest extends TestCase
{
    /**
     * @param mixed       $value                    The value to be filtered.
     * @param string|null $expectedExceptionMessage Optional expection message to be thrown.
     *
     * @test
     * @covers ::filter
     * @dataProvider provideFilterData
     */
    public function filterValue($value, string $expectedExceptionMessage = null)
    {
        if ($expectedExceptionMessage !== null) {
            $this->expectException(FilterException::class);
            $this->expectExceptionMessage($expectedExceptionMessage);
        }

        $filteredValue = TimeOfDayFilter::filter($value);
        $this->assertSame($value, $filteredValue);
    }

    /**
     * @return array
     */
    public function provideFilterData() : array
    {
        return [
            [
                'value' => '23:59:59',
            ],
            [
                'value' => '1:1:1',
                'message' => '$value must be in the correct format HH:MM:SS',
            ],
            [
                'value' => null,
                'message' => '$value must be a non-empty string',
            ],
            [
                'value' => '',
                'message' => '$value must be a non-empty string',
            ],
            [
                'value' => "\n\t    \n",
                'message' => '$value must be a non-empty string',
            ],
        ];
    }
}
