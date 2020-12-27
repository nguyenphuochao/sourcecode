<?php

include 'connect.php';
$m = isset($_POST['maKH'])?$_POST['maKH']:'';
$t = isset($_POST['tenKH'])?$_POST['tenKH']:'';
$e = isset($_POST['email'])?$_POST['email']:'';
$gt = isset($_POST['gioitinh'])?$_POST['gioitinh']:'';
$ns = isset($_POST['ngaySinhKH'])?$_POST['ngaySinhKH']:'';
$sdt = isset($_POST['sodienthoai'])?$_POST['sodienthoai']:'';
$dc = isset($_POST['diachi'])?$_POST['diachi']:'';
$sql= "UPDATE khachhang SET tenKH = '$t', 
email = '$e', gioitinh = '$gt', ngaySinhKH = '$ns', sodienthoai = '$sdt', diachi = '$dc'
  WHERE khachhang.maKH = $m  " ;
$stm= $o->prepare($sql);
$stm->execute();
//echo print_r($sql);
header('location:khachhang.php');



