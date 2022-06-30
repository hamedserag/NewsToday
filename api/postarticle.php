<?php
session_start();
require_once "../includes/config.php";
$id = $_GET['id'];
$article = $_GET['article'];


$sql = mysqli_query($con, "SELECT `id`, `article` FROM `articles` WHERE `article` = 'NULL'");
$num = mysqli_fetch_array($sql);
if ($num > 0) {
    if ($id == $num['id']) {
        $art = $num['article'] . $article;
        $query = mysqli_query($con, "UPDATE `articles` SET `article`='$art'");
    } else {
        echo ("Invalid ID");
    }
}

$sql = mysqli_query($con, "SELECT * FROM `articles` ORDER BY `postedDate` DESC LIMIT 10 OFFSET 10");
while ($result = mysqli_fetch_array($sql)) {
    createOneCard($result['header'], $result['article'], $result['postedDate'], $result['id'], $result['country']);
}



