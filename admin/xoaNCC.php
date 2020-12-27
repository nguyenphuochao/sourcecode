<?php 
include 'connect.php';
//$o = new PDO("mysql:host=localhost; dbname=bookstore_vn", 'root' ,'' );
$ma = isset($_GET['maNSX'])?$_GET['maNSX']:'';
$sql ="DELETE FROM nhasx WHERE  maNSX= ? ";
$stm = $o->prepare($sql);
$stm->execute([$ma]);
header('location:nhacungcap.php');