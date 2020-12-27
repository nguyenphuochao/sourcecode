<?php
//if (!isset($_SESSION)) session_start();
session_start();
include 'connect.php';

$tdn=$_POST['tendangnhap'];
$mk=$_POST['matkhau'];
$tqt=$_POST['tenquantrivien'];
$remk=$_POST['rematkhau'];

if(  $tdn !='' && $mk !='' && $tqt != '' && $remk != '' ){
    
     if($mk != $remk)
     {
         $_SESSION['thongbao']='mật khẩu nhập không chính xác!';
         header('location:dangky.php');
     }
    $sql1="SELECT * FROM quantri WHERE tendangnhap='$tdn'";
    $stm1 = $o->query($sql1);
    $row = $stm1->rowCount();
    $mk= md5($mk);
    if($row > 0){
        $_SESSION['thongbao']='Đã có tên đăng nhập vui lòng nhập lại!';
        header('location:dangky.php'); exit;
    }else{
    $sql= "INSERT INTO quantri(maQT,tendangnhap,matkhau, tenquantrivien) 
    VALUES (NULL,'$tdn','$mk','$tqt')";
    $stm = $o->query($sql);
    $_SESSION['thongbao']='Đăng ký Thành công';
    //echo print_r($sql);
    header("location:login.html"); exit;
    }

}
else{
    $_SESSION['thongbao']='vui lòng nhập cái ô còn trống! không đc để trống!';
    header('location:dangky.php'); 
}
