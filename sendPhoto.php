<?php

include_once('functions.php');

$actionsResponse = getActionsApiCall();

$actions = json_decode($actionsResponse, true);

$photoPath = $argv[1];
$actionId = $argv[2];

sendPhotoApiCall($photoPath, $actionId);
