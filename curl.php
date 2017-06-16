<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ssapi.shipstation.com/carriers");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
$authKey = Mage::helper('shippingmethod')->getAuthKey();       
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Basic ".$authKey));
$response = curl_exec($ch);
print_r($response);
curl_close($ch);
return json_decode($response);
?>