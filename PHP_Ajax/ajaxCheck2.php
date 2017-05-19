<?php
$data = $_POST["result"];
$data = json_decode("$data", true);
$tong = 0; $tich = 1;
foreach($data as $d) {
	$tong = $tong + $d;
	$tich = $tich * $d;
}
$result = array();
$result[0] = $tong;
$result[1] = $tich;
echo json_encode($result);