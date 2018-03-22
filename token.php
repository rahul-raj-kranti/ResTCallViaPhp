<h1>Genrating Token For acessing Request Inside magento</h1>
<?php
$adminUrl='http://localhost/shoping/index.php/rest/V1/integration/admin/token';
$ch = curl_init();
$data = array("username" => "WebRest", "password" => "rahul@123");                                                                    
$data_string = json_encode($data);                       
$ch = curl_init($adminUrl); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);       
$token = curl_exec($ch);

$token=  json_decode($token);



print_r($token);
//Use above token into header
?>