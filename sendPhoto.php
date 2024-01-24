<?php

include_once('functions.php');

$actionsResponse = getActionsApiCall();

$actions = json_decode($actionsResponse, true);

$photoPath = 'test';
$actionId = 1;

var_dump($photoPath);
var_dump($actionId);
exit();

sendPhotoApiCall($photoPath, $actionId);
