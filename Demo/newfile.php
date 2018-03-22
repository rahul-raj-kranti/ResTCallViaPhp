//Authentication rest API magento2.Please change url accordingly your url
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
Use above token into header
$headers = array("Authorization: Bearer $token");
$requestUrl='http://localhost/shoping/index.php/rest/V1/products?searchCriteria';
//Please note 24-MB01 is sku

$ch = curl_init();
$ch = curl_init($requestUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   

$result = curl_exec($ch);
$result=  json_decode($result);
print_r($result);