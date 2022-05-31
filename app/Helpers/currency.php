<?php

if(!function_exists('get_release')){
    function get_release(){
        $version = @file_get_contents(storage_path().'/app/bugfixer/version.json');
        $version = json_decode($version,true);
        echo $version['subversion'];
    }
}


function purchase_code($code){

    $personalToken = "7T9Ichy4xYzXyfDpYjBKwvdYWe48GX5s";

    if (!preg_match("/^(\w{8})-((\w{4})-){3}(\w{12})$/", $code)) {
        //throw new Exception("Invalid code");
        $message = __("Invalid Purchase Code");
        return $message;
    }
    
    

    $ch = curl_init($code);

    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?code={$code}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,

        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer {$personalToken}",
        ),
    ));

    // Send the request with warnings supressed
    $response = curl_exec($ch);

    // Handle connection errors (such as an API outage)
    if (curl_errno($ch) > 0) {
        //throw new Exception("Error connecting to API: " . curl_error($ch));
        $message = __("Error connecting to API !");
        return $message;
    }
    // If we reach this point in the code, we have a proper response!
    // Let's get the response code to check if the purchase code was found
    $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    // HTTP 404 indicates that the purchase code doesn't exist
    if ($responseCode === 403) {
        //throw new Exception("The purchase code was invalid");
        return reverify($code);
    }

    // HTTP 404 indicates that the purchase code doesn't exist
    if ($responseCode === 404) {
        //throw new Exception("The purchase code was invalid");
        return reverify($code);
    }

    // Anything other than HTTP 200 indicates a request or API error
    // In this case, you should again ask the user to try again later
    if ($responseCode !== 200) {
        //throw new Exception("Failed to validate code due to an error: HTTP {$responseCode}");
        $message = __("Failed to validate code.");
        return $message;
    }

    // Parse the response into an object with warnings supressed
    $body = json_decode($response);

    // Check for errors while decoding the response (PHP 5.3+)
    if ($body === false && json_last_error() !== JSON_ERROR_NONE) {
        //new Exception("Error parsing response");
        $message = __("Can't Verify Now.");
        return $message;
    }

    return $responseCode;

}

function reverify($code){
    
    
    
    $personalToken = "inNy83FTjV2CTPqvNdPGRr2mAJ0raPC4";

    if (!preg_match("/^(\w{8})-((\w{4})-){3}(\w{12})$/", $code)) {
        //throw new Exception("Invalid code");
        $message = __("Invalid Purchase Code");
        return $message;
    }

    $ch = curl_init($code);

    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?code={$code}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,

        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer {$personalToken}",
        ),
    ));

    // Send the request with warnings supressed
     $response = curl_exec($ch);

    // Handle connection errors (such as an API outage)
    if (curl_errno($ch) > 0) {
        //throw new Exception("Error connecting to API: " . curl_error($ch));
        $message = __("Error connecting to API !");
        return $message;
    }
    // If we reach this point in the code, we have a proper response!
    // Let's get the response code to check if the purchase code was found

     $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // HTTP 404 indicates that the purchase code doesn't exist
    if ($responseCode === 404) {
        //throw new Exception("The purchase code was invalid");
        return reverify($code);
    }

    // Anything other than HTTP 200 indicates a request or API error
    // In this case, you should again ask the user to try again later
    if ($responseCode !== 200) {
        //throw new Exception("Failed to validate code due to an error: HTTP {$responseCode}");
        $message = __("Failed to validate code.");
        return $message;
    }

    // Parse the response into an object with warnings supressed
    $body = json_decode($response);

    // Check for errors while decoding the response (PHP 5.3+)
    if ($body === false && json_last_error() !== JSON_ERROR_NONE) {
        //new Exception("Error parsing response");
        $message = __("Can't Verify Now.");
        return $message;
    }

    if($body->item->id == '34807246'){

    	return 200;
    }
    else{
    	return 404;
    }

    return $responseCode;
}