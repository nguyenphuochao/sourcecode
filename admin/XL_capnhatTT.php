<?php

include 'connect.php';
$m = isset($_POST['maTT'])?$_POST['maTT']:'';
$t = isset($_POST['tieude'])?$_POST['tieude']:'';
$h = isset($_POST['hinhanh'])?$_POST['hinhanh']:'';
$nd = isset($_POST['noidung'])?$_POST['noidung']:'';
$ndt= isset($_POST['ngaydangtin'])?$_POST['ngaydangtin']:'';
$tg = isset($_POST['tacgia'])?$_POST['tacgia']:'';
$hn = isset($_POST['thoigianhethan'])?$_POST['thoigianhethan']:'';
$sql= "UPDATE tintuc SET tieude = '$t', hinhanh='$h', noidung = '$nd', ngaydangtin = '$ndt', tacgia = '$tg',
 thoigianhethan = ' $hn' WHERE tintuc.maTT = $m  " ;
$stm= $o->prepare($sql);
$stm->execute();
//echo print_r($sql);
header('location:tintuc.php');



