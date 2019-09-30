<?php
declare(strict_types=1);

namespace GordonLesti\LongestCommonSubsequence;

class LongestCommonSubsequence
{
    /**
     * Calculates the longest common subsequence of both strings and returns the
     * length.
     * @see https://en.wikipedia.org/wiki/Longest_common_subsequence_problem
     *
     * @param string $str1
     * @param string $str2
     * @return int
     */
    public static function lcs(string $str1, string $str2): int
    {
        $matrix = [];
        $str1Array = self::multiByteStringToArray($str1);
        $str2Array = self::multiByteStringToArray($str2);
        $str1Length = count($str1Array);
        $str2Length = count($str2Array);

        $matrix[0] = array_fill(0, $str2Length + 1, 0);
        for ($i = 0; $i < $str1Length; $i++) {
            $row = [0];
            for ($j = 0; $j < $str2Length; $j++) {
                if ($str1Array[$i] === $str2Array[$j]) {
                    $row[$j + 1] = $matrix[$i][$j] + 1;
                    continue;
                }
                $row[$j + 1] = max(
                    $matrix[$i][$j + 1],
                    $row[$j]
                );
            }
            $matrix[$i + 1] = $row;
        }
        return $matrix[$str1Length][$str2Length];
    }

    /**
     * Splits a multibyte string into an array and returns it.
     *
     * @param string $str
     * @return array
     */
    private static function multiByteStringToArray(string $str): array
    {
        $length = mb_strlen($str);
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[$i] = mb_substr($str, $i, 1);
        }
        return $array;
    }
}
