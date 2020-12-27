<?php 
include 'connect.php';
//$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$ma = isset($_GET['maSP'])?$_GET['maSP']:'';
$sql ="DELETE FROM sanpham WHERE  maSP= ? ";
$stm = $o->prepare($sql);
$stm->execute([$ma]);
header('location:sanpham.php');