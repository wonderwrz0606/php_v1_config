<?php
$server_status = 'ok';
// $server_status = 'maintenance';
if ($server_status == 'maintenance') {
	$result = 'MAINTENANCE';
	$msg = "testing";
	$res_array = array (
			"cmd" => $_REQUEST ['cmd'],
			"result" => "$result",
			"msg" => "$msg" 
	);
	$json_res_array = json_encode ( $res_array );
	echo $json_res_array;
	die ( '' );
}
?>