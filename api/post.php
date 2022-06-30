<?php
// Initialize the session
session_start();
//lordHSNH2022314HNSHdrol
//?key=█&head=█&article=█&link=█&date=█&country=█
// Include config file
require_once "../includes/config.php";

$apikey = $_GET['key'];

$header = $_GET['head'];

$link = $_GET['link'];
$date = $_GET['date'];
$country = $_GET['country'];

$sql = mysqli_query($con, "SELECT `id`, `apikey` FROM `apikeys` WHERE `apikey` = '$apikey'");
$num = mysqli_fetch_array($sql);
if($num > 0){
    if($apikey == $num['apikey']){
        $img = "defaultImg.png";
        $query = mysqli_query($con,"INSERT INTO `articles`(`header`, `article`, `link`, `img`,`country`, `date`) VALUES ('$header',' ','$link','$img','$country','$date')");
        echo($con->insert_id);
    }else{
        echo("Invalid API KEY");
    }
}

//http://localhost/lordsnews/api/post.php/?key=lordHSNH2022314HNSHdrol&head=header%20test&article=article%20test&link=link%20test&date=date%20test&country=AR