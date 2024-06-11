<?php

function reverseWords($sentence)
{

    $words = explode(' ', $sentence);

    $reversedWords = array();

    for ($i = 0; $i < count($words); $i++) {
        $reversedWord = strrev($words[$i]);
        // Add the reversed word to the array
        $reversedWords[] = $reversedWord;
    }

    // Join the reversed words back into a sentence
    $reversedSentence = implode(' ', $reversedWords);

    return $reversedSentence;
}

$sentence = 'I love programming';
$result = reverseWords($sentence);

echo $result;
