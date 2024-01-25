<?php

include_once('functions.php');

$actionsResponse = getActionsApiCall();

$actions = json_decode($actionsResponse, true);

if (isset($actions['isError']) && $actions['isError'] === 0) {
    foreach ($actions['deviceActionQueue'] as $action) {
        if ($action['action'] === 'make_photo') {
            if ($action['settings']['photo_extension'] === 'image/jpeg') {
                $photoExtension = 'jpg';
            } elseif ($action['settings']['photo_extension'] === 'image/png') {
                $photoExtension = 'png';
            } else {
                $photoExtension = 'jpg';
            }
            echo $action['action_id'];
            
            $output = shell_exec('/home/oleg/Desktop/thesis_raspberry_pi/make_photo.sh ' . $photoExtension . ' ' . $action['action_id']);
            echo $output;
            return;
        }
    }
}

