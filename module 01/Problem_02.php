<?php
// Read the file contents
// $fileContents = "Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.";
$fileContents = file_get_contents('yourfile.txt');

$wordCount = 0;

$words = explode(' ', $fileContents);

// Count the words
for ($i = 0; $i < count($words); $i++) {
    if (!empty(trim($words[$i]))) {
        $wordCount++;
    }
}

echo "Total word count: $wordCount\n";
