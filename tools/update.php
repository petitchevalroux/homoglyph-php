#!/usr/bin/env php
<?php
$currentDirectory = realpath(__DIR__);
$output = [];
$return = 0;
$jsonFile = $currentDirectory . DIRECTORY_SEPARATOR . 'data.json';
@unlink($jsonFile);
exec(
    'node ' . escapeshellarg($currentDirectory . DIRECTORY_SEPARATOR . 'update.js'),
    $output,
    $return
);
echo implode("\n", $output);
if ($return > 1) {
    throw \Exception('Update command failed');
}
if (!file_exists($jsonFile)) {
    throw \Exception('File '.$json_file.' does not exists');
}
$charactersMap = json_decode(file_get_contents($jsonFile), true);
if (empty($charactersMap)) {
    throw \Exception('Empty characters map');
}
$outputFile = $currentDirectory . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'characters-map.php';
if (!file_put_contents(
    $outputFile,
    "<?php \nreturn " . var_export($charactersMap, true) . ';'
)
) {
    throw \Exception('Unable to write to '.$outputFile);
}
@unlink($jsonFile);
