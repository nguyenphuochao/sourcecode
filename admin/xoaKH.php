<?php 
include 'connect.php';
$ma = isset($_GET['maKH'])?$_GET['maKH']:'';
$sql ="DELETE FROM khachhang WHERE  maKH= ? ";
$stm = $o->prepare($sql);
$stm->execute([$ma]);
header('location:khachhang.php');