<h1> Performing  READ AND DELETE Via PHP Rest</h1><br>
<?php

//Authentication For Request note Toke Get it from admin/Toke
$token="lkpqxj3ovaqscpphtjlvsvdb18vpm32b";
$headers = array("Authorization: Bearer $token");

//DELETE Product via Sku
//$requestUrl='http://localhost/shoping/index.php/rest/V1/products/Accer';

//Getting All Products Details or list
$requestUrl='http://localhost/shoping/index.php/rest/V1/products?searchCriteria';


//Getting Products Details Via Sku,Please note Hp-Notebook is sku
//$requestUrl='http://localhost/shoping/index.php/rest/V1/products/Hp-Notebook';

//Getting All Order
//$requestUrl='http://localhost/shoping/index.php/rest/V1/orders?searchCriteria';


$ch = curl_init();
$ch = curl_init($requestUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($ch, CURLOPT_HTTPHEADER,'Content-Type: application/json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$result = curl_exec($ch);
//$result=  json_decode($result);
//$result=json_encode($result);
print_r($result);
?>