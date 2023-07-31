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
$tb = 'registers';

// Instantiate model object
$register = new Model($db, $tb);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"), true);

// // Check the data validity
// if (count($data) === 0) :
//     http_response_code(204);
//     echo json_encode(["success" => false, "message" => "Content is empty", "data" => null]);
// endif;
// if (!isset($data['name']) || !isset($data['user_id'])) :
//     http_response_code(406);
//     echo json_encode(["success" => false, "message" => "No field should be empty", "data" => $data]);
// endif;

// Sanitize the data
// $data = $register->sanitize($data);

// Initialize create parameters
$column = "full_name, phone_number, email_address, number_of_plot, payment_plan, contact_method";
$value = ":full_name, :phone_number, :email_address, :number_of_plot, :payment_plan, :contact_method";
    
// Create register
$response = $register->create($column,$value,$data);

if ($response):
    http_response_code(201);
    echo json_encode(["success" => true, "message" => "Successful", "data" => null]);
else:
    http_response_code(501);
    echo json_encode(["success" => false, "message" => "Not Successful", "data" => null]);
endif;
