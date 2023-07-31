<?php 


function countWordsWithQuotesAsOne($string) {
    // Remove all single quotes and their contents from the string
    $stringWithoutQuotes = preg_replace("/'.*?'/", "", $string);
    
    // Use a regular expression to extract the words from the modified string
    preg_match_all("/\b\w+\b/", $stringWithoutQuotes, $matches);
    
    // Return the count of extracted words
    return count($matches[0]);
}

// Example usage:
$string = "Lorem ipsum dolor sit amet 'consectetur adipiscing' elit, litora 'enim cum tellus' nisl 'ridiculus senectus’ natoque, 'eros' vestibulum mauris aenean tempus lobortis. Accumsan 'volutpat semper auctor' tincidunt..";
$wordCount = countWordsWithQuotesAsOne($string);
echo "Word count: " . $wordCount;