<?php

$inputFile  = 'data/movies.txt';
$outputFile = 'data/sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile)
{
    $handle = fopen($inputFile, 'r');
    $contentsString = fread($handle, filesize($inputFile));
    $contentsArray = explode("\n", $contentsString);
    fclose($handle);
    return $contentsArray;
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $movies)
{
    $handle = fopen($outputFile, 'a');
    $string = $movies . PHP_EOL;
    fwrite($handle, $string);
    fclose($handle);
}

/**
 * Pick a random movie from an array
 **/
function randomMovie($movies)
{
    $randomKey = array_rand($movies);
    return trim($movies[$randomKey]);
}

$movies = readLines($inputFile);
$randomMovie = randomMovie($movies);

echo "Let's watch " . $randomMovie . "!\n";
echo "But " . $randomMovie . " really sucks!\n";

sort($movies);

writeLines($outputFile, $randomMovie);

