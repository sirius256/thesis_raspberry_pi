<?php

include_once('functions.php');

$photoPath = $argv[1];
$actionId = $argv[2];

sendPhotoApiCall($photoPath, $actionId);
