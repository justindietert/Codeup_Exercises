<?php

$filename = 'data/contacts.txt';

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');

    $contents = fread($handle, filesize($filename));

    $contentsArray = explode("\n", trim($contents));

    foreach ($contentsArray as $content) {
        $newArray[] = explode('|', $content);
    }

    $indexName = ["name", "number"];

    foreach($newArray as $innerArray) {
        $contactListing = array_combine($indexName, $innerArray);
        $contactListing["number"] = substr($contactListing["number"], 0, 3) . '-' . substr($contactListing["number"], 3, 3) . '-' . substr($contactListing["number"], 6, 4);
        $contacts[] = $contactListing;
    }

    fclose($handle);
    return $contacts;
}


// function formatNumbers($number) 
// {
//     preg_match('/^(\d{3})(\d{3})(\d{4})$/', $number, $matches);
//     return $matches[1] . '-' . $matches[2] . '-' . $matches[3];
// }

print_r(parseContacts($filename));
