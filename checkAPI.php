<?php

// kvstore API url
$url = 'https://desk.zoho.in/api/v1/tickets';

//$collection_name = 'RapidAPI';
//$request_url = $url . '/' . $collection_name;
$curl = curl_init($url);

// Initializes a new cURL session
//curl = curl_init($url);

// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(count($_POST)>0) {
   $dept = $_POST["dept"];
   $category = $_POST["category"];
   $sub = $_POST["subject"];
   $name = $_POST["name"];
   $email = $_POST["email"];
   }

$data = array("subject"=>$sub,
"departmentId"=>$dept,"contactId"=>$category,"email"=>$email);
//$resp=zoho.desk.getRecords(60001280952,"contacts");

//$data = array("subject"=>"message",
//"departmentId"=>"7189000001062045","contactId"=>"7189000002179003");

// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));

// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
     'orgId:60001280952',
  'Authorization:aa8cd2f4d25aa3418e47f953ad9fe323',
  'Content-Type: application/json'
]);
session_start();
// Execute cURL request with all previous settings
$response = curl_exec($curl);
if($response)
{
   $_SESSION["message"] =  " Ticket submitted Sucessfully";
   header("Location:dashboard.php");
  
}

// Close cURL session
curl_close($curl);

//echo $response . PHP_EOL;