<?php
$Url="https://www.synergy-travel.com/ride-back/common/locations?query=i";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$Url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$btc= curl_exec($ch);
$data=json_decode($btc);
$data = (array)$data->payload->object;
echo "<pre>";
//print_r($data);
curl_close($ch);
return $data*/;
echo json_decode(array('data'=>$data));
?>