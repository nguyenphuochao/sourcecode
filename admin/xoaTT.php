<?php 
include 'connect.php';
//$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$ma = isset($_GET['maTT'])?$_GET['maTT']:'';
$sql ="DELETE FROM tintuc WHERE  maTT= ? ";
$stm = $o->prepare($sql);
$stm->execute([$ma]);
header('location:tintuc.php');