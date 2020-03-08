<?php

function selectPart($importerDecoded, $selectPart)
{
    $partArray = $importerDecoded[$selectPart];
    $key = array_rand($partArray);
    $value = $partArray[$key];

    return $value;
}

$importer = file_get_contents(__DIR__ . '/../data/lyrix.json');

$importerDecoded = json_decode($importer, true);

$parts = array_keys($importerDecoded);
$lyrix = [];

foreach ($parts as $part) {
    $lyrix[] = selectPart($importerDecoded, $part);
}

echo implode(' ', $lyrix);
