<?php
include 'connect.php';
$hinh = $_FILES['hinhanh']['error']==0?$_FILES['hinhanh']['name']:'';
function postIndex($i, $v='')
{
	return isset($_POST[$i])?$_POST[$i]:$v;
}
$datasp =[
	//postIndex('maSP'),
    postIndex('tenSP'),
    $hinh,
	postIndex('mauSP'),
	postIndex('chitietSP'),
	postIndex('soluong'),
    postIndex('gia'),
    postIndex('khuyenmai'),
    postIndex('trangthaiSP'),
    postIndex('maDM')
];
$sql= "INSERT INTO sanpham( maSP,tenSP,hinhanh, mauSP, chitietSP, soluong, gia, khuyenmai, trangthaiSP, maDM)
 VALUES (null,?,?,?,?,?,?,?,?,?)";
$stm= $o->prepare($sql);
$stm->execute($datasp);
//echo print_r($sql);
header('location:sanpham.php');

////// tin tuc ///////

// $hinh1 = $_FILES['hinhanh']['error']==0?$_FILES['hinhanh']['name']:'';
// function postIndex1($i, $v='')
// {
// 	return isset($_POST[$i])?$_POST[$i]:$v;
// }
// $datatt =[
// 	postIndex1('maTT'),
//     postIndex1('tieude'),
//     postIndex1('noidung'),
//     $hinh1,
// 	postIndex1('ngaydangtin'),
// 	postIndex1('tacgia'),
//     postIndex1('thoigianhethan')
// ];
// $sql1= "INSERT INTO tintuc( maTT,tieude,noidung,hinhanh,ngaydangtin,tacgia,thoigianhethan)
//  VALUES (?,?,?,?,?,?,?)";
// $stm1= $o->prepare($sql1);
// $stm1->execute($datatt);
// echo $sql1;

//////////////////Nhà Sản Xuất//////////////////

// function postIndex2($i, $v='')
// {
// 	return isset($_POST[$i])?$_POST[$i]:$v;
// }
// $datansx =[
// 	postIndex2('maNSX'),
//     postIndex2('tenNSX')
// ];
// $sql2= "INSERT INTO nhasx(maNSX,tenNSX)
//  VALUES (?,?)";
// $stm2= $o->prepare($sql2);
// $stm2->execute($datansx);


