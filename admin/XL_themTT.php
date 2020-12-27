<?php

include 'connect.php';
$hinh = $_FILES['hinhanh']['error']==0?$_FILES['hinhanh']['name']:'';
function postIndex($i, $v='')
{
	return isset($_POST[$i])?$_POST[$i]:$v;
}
$datatt =[
	postIndex('maTT'),
    postIndex('tieude'),
    postIndex('noidung'),
    $hinh,
	postIndex('ngaydangtin'),
	postIndex('tacgia'),
    postIndex('thoigianhethan')
];
$sql= "INSERT INTO tintuc( maTT,tieude,noidung,hinhanh,ngaydangtin,tacgia,thoigianhethan)
 VALUES (?,?,?,?,?,?,?)";
$stm= $o->prepare($sql);
$stm->execute($datatt);
//echo print_r($sql);
header('location:tintuc.php');