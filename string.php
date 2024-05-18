<?php
// Define array strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels 
function countVowels($str) {
    return preg_match_all('/[aeiou]/i', $str);
}
// Iterate over each string in the array
foreach ($strings as $str) {
    $vowelCount = countVowels($str);
    //reverse string
    $reversedStr = strrev($str);
    //print output
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}
?>