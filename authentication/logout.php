<?php

// required headers
header("Access-Control-Allow-Origin: *");

include_once 'session.php';

// remove session variables
session_unset(); 
// destroy session
if(session_destroy()){
    http_response_code(200);
    echo json_encode(array(
        "status" => 200,
        "message" => "user signed out successfully"
    ));
}else{
    http_response_code(500);
    echo json_encode(array(
        "status" => 500,
        "message" => "user signed out failed"
    ));
} 



?>