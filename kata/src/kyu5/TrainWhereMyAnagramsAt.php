<?php

/*
 * @url https://www.codewars.com/kata/523a86aa4230ebb5420001e1/train/php
 */

namespace Codewars\Kata\kyu5;

use function sort;
use function strlen;

final class TrainWhereMyAnagramsAt
{
    function anagrams(string $word, array $words): array
    {
        $wordArray = str_split($word);
        sort($wordArray);
        $sortedWord = implode('', $wordArray);

        $anagrams = [];
        foreach ($words as $anagram) {
            if (strlen($anagram) !== strlen($word)) {
                continue;
            }

            $anagramArray = str_split($anagram);
            sort($anagramArray);

            if ($sortedWord === implode('', $anagramArray)) {
                $anagrams[] = $anagram;
            }
        }

        return $anagrams;
    }

    // --- Below are the Other Code Practices ---

    public function bestPracticeAnagrams(string $word, array $words): array
    {
        $wordCharsCount = count_chars($word, 1);

        return array_values(
            array_filter(
                $words,
                fn(string $word) => count_chars($word, 1) == $wordCharsCount
            )
        );
    }
}
