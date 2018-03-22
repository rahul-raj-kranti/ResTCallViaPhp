<?php
$productsJson = '{
	"product": {
		"sku": "ABC_1234561",
		"name": "My ProductTitle,
		"price": 425.99,
		"status": 1,
		"visibility": 4,
		"typeId": "simple",
		"createdAt": "2016-05-26 14:00:00",
		"updatedAt": "2016-05-26 14:00:00",
		"weight": 15,
		"mediaGalleryEntries": [{
			"mediaType": "image",
			"label": "abc_123456_image",
			"position": 0,
			"disabled": false,
			"file": "http://localhost/shoping/pub/media/catalog/product/i/n/intex.jpeg",
			"content": {
				"base64EncodedData": "aHR0cDovL2xvY2FsaG9zdC9zaG9waW5nL3B1Yi9tZWRpYS9jYXRhbG9nL3Byb2R1Y3QvaS9uL2ludGV4LmpwZWc=",
				"type": "file/image",
				"name": "intex.jpeg"
			}
		}]
	},
	"saveOptions": true
}';
    
 
//ADD Products Inside Catlog Via REST_PHP_POST
$ch = curl_init( "http://localhost/shoping/index.php/rest/V1/products");


$curlOptions = array(
	
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $productsJson,
    CURLOPT_HTTPHEADER => array( "Content-type: application/json", "Authorization: Bearer lkpqxj3ovaqscpphtjlvsvdb18vpm32b" )
);
 
curl_setopt_array( $ch, $curlOptions );
 
$response = curl_exec( $ch );
print_r($response);
?>