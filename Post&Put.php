<?php
$productsJson = '{
	"product": {
		"sku": "MY_SKU",
		"name": "My Product",
		"attributeSetId": "4",
		"price": 20,
		"status": 1,
		"visibility": 4,
		"typeId": "virtual",
		"weight": 0,
		"extensionAttributes": {
			"stockItem": {
				"stockId": 1,
				"qty": 20,
				"isInStock": true,
				"isQtyDecimal": false,
				"useConfigMinQty": true,
				"minQty": 0,
				"useConfigMinSaleQty": 0,
				"minSaleQty": 0,
				"useConfigMaxSaleQty": true,
				"maxSaleQty": 0,
				"useConfigBackorders": false,
				"backorders": 0,
				"useConfigNotifyStockQty": true,
				"notifyStockQty": 20,
				"useConfigQtyIncrements": false,
				"qtyIncrements": 0,
				"useConfigEnableQtyInc": false,
				"enableQtyIncrements": false,
				"useConfigManageStock": true,
				"manageStock": true,
				"lowStockDate": "string",
				"isDecimalDivided": true,
				"stockStatusChangedAuto": 0,
				"extensionAttributes": {}
			}
		},
		"options": [],
		"tierPrices": [],
		"customAttributes": []
	},
	"saveOptions": true
}';
    
 //Update Products Using SKU,Note B201-SKU2 is SKU
//$ch = curl_init( "http://localhost/shoping/index.php/rest/V1/products/B201-SKU2" );

//ADD Products Inside Catlog Via REST_PHP_POST
$ch = curl_init( "http://localhost/shoping/index.php/rest/V1/products");


$curlOptions = array(
	//CURLOPT_CUSTOMREQUEST  => "PUT",
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $productsJson,
    CURLOPT_HTTPHEADER => array( "Content-type: application/json", "Authorization: Bearer lkpqxj3ovaqscpphtjlvsvdb18vpm32b" )
);
 
curl_setopt_array( $ch, $curlOptions );
 
$response = curl_exec( $ch );
print_r($response);
?>