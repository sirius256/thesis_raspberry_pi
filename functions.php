<?php

function getActionsApiCall() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://lnup-thesis-it-61-os.com/api/device/action/get?device_hash=lnup',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function sendPhotoApiCall($photoPath, $actionId) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://lnup-thesis-it-61-os.com/api/device/action/photo/send?device_hash=lnup&action_id=' . $actionId,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('photo'=> new CURLFILE($photoPath)),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    return $response;
}
