<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: X-Requested-With');


require_once '../config/Database.php';
require_once '../config/Model.php';

// Instantiate Database and connect
$database = new Database();
$db = $database->connect();
$tb = 'enquiries';

// Instantiate model object
$enquiry = new Model($db, $tb);

// Get info from URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Get enquiry 
if (!empty($id)) {
    $response = $enquiry->readSingleRecord("id=:id", ["id"=>$id], "*");
    
    if ($response):
        http_response_code(200);
        echo json_encode(["success" => true, "message" => "Successful", "data" => $response]);
    else:
        http_response_code(501);
        echo json_encode(["success" => false, "message" => "Not Successful", "data" => null]);
    endif;
    
} 

 