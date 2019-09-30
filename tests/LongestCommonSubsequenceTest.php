<?php
declare(strict_types=1);

namespace GordonLesti\LongestCommonSubsequenceTest;

use GordonLesti\LongestCommonSubsequence\LongestCommonSubsequence;
use PHPUnit\Framework\TestCase;

class LongestCommonSubsequenceTest extends TestCase
{
    /**
     * @param string $str1
     * @param string $str2
     * @param int $lcsLength
     * @SuppressWarnings(PHPMD.StaticAccess)
     * @dataProvider lcsProvider
     */
    public function testLcs(string $str1, string $str2, int $lcsLength)
    {
        $this->assertSame(
            $lcsLength,
            LongestCommonSubsequence::lcs($str1, $str2)
        );
    }

    /**
     * @return array
     */
    public function lcsProvider(): array
    {
        return [
            [
                'nec3ej77p99owvoyd0izmu3blez1wx1e',
                'hst7pmceigql84smrmql9r5vuwilzpqs',
                7
            ],
            [
                'zjos9xl7z5zs3g0spms3omzc7vtj5rwo',
                'ls8f0krkimz419jh',
                6
            ],
            [
                'ocjxq1za7sa0g6x1',
                '',
                0
            ],
            [
                '',
                'qs0z58kvwgrvtpoy',
                0
            ],
            [
                'ΛΕΡΒΗΔΟΗΜΑΕΞΞΘΒΗ',
                'ΗΝΞΛΒΑΚΛ',
                3
            ],
        ];
    }
}
