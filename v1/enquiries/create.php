<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
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

// Get raw posted data
$data = json_decode(file_get_contents("php://input"), true);


// Initialize create parameters
$column = "full_name, phone_number, email_address, estates, properties, contact_method, enquiry_date, enquiry_time";
$value = ":full_name, :phone_number, :email_address, :estates, :properties, :contact_method, :enquiry_date, :enquiry_time";
    
// Create enquiry
$response = $enquiry->create($column,$value,$data);

if ($response):
    http_response_code(201);
    echo json_encode(["success" => true, "message" => "Successful", "data" => null]);
else:
    http_response_code(501);
    echo json_encode(["success" => false, "message" => "Not Successful", "data" => null]);
endif;
