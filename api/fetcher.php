<?php
require_once "includes/config.php";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);
$loc = $xml->geoplugin_latitude . "," .$xml->geoplugin_longitude;
$ref = null;
if(!empty($_SERVER['HTTP_REFERER'])){
    $ref = $_SERVER['HTTP_REFERER'];
}
$month = date('m');
echo($_SERVER['REQUEST_URI']);
$query = mysqli_query($con,"INSERT INTO `viewer_data`(`ip`, `country`, `region`, `location`,`referal_link`,`month`) VALUES ('$ip','$xml->geoplugin_countryName','$xml->geoplugin_continentName','$loc','$ref','$month')");
mysqli_close($con);
?>