<?php

include 'connect.php';
$m = isset($_POST['maSP'])?$_POST['maSP']:'';
$t = isset($_POST['tenSP'])?$_POST['tenSP']:'';
$h = isset($_POST['hinhanh'])?$_POST['hinhanh']:'';
$mau = isset($_POST['mauSP'])?$_POST['mauSP']:'';
$ct = isset($_POST['chitietSP'])?$_POST['chitietSP']:'';
$sl= isset($_POST['soluong'])?$_POST['soluong']:'';
$g = isset($_POST['gia'])?$_POST['gia']:'';
$km = isset($_POST['khuyenmai'])?$_POST['khuyenmai']:'';
$tt = isset($_POST['trangthaiSP'])?$_POST['trangthaiSP']:'';
$mdm = isset($_POST['maDM'])?$_POST['maDM']:'';
$sql= "UPDATE sanpham SET tenSP = '$t', mauSP='$mau',
hinhanh = '$h', chitietSP = '$ct', soluong = '$sl', gia = '$g', khuyenmai = '$km',
 trangthaiSP = ' $tt' WHERE sanpham.maSP = $m  " ;
$stm= $o->prepare($sql);
$stm->execute();
//echo print_r($sql);
header('location:sanpham.php');



