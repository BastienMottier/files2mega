<?php
include('mega.php');
if(isset($_GET['url'])){
    $url=parse_url($_GET['url'], PHP_URL_PATH);
    $ext = pathinfo($url);
    $filename="temp/".uniqid()."-".$ext['basename'];
    copy($_GET['url'], $filename);
    login("login", "password");
    uploadfile($filename);
    header("location:../index.php");
}
?>