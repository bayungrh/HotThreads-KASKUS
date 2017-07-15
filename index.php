<?php
header('Content-Type:Application/Json;UTF-8');
require_once(__DIR__.'/src/kaskus.php');

$kaskus_ht = new bayyunet\kaskus_api;
$kaskus_ht->setApiKey('120500'); // Set up your API KEY
$data = $kaskus_ht->Hot_Thread();
$json = json_decode($data, true); // Parse JSON to ARRAY

if ($json['success'] !== false) {
	print_r($json);
} else {
	echo "Response Error";
}

?>
