<?php 
if (!isset($_SESSION)) session_start();
$u = isset($_POST['u'])?$_POST['u']:'';
$p= isset($_POST['p'])?$_POST['p']:'';
if ($u=='')
{
	header('location:login.html'); exit;
}
include 'connect.php';
$p = md5($p);
$sql="select tendangnhap, tenquantrivien from quantri where tendangnhap=? and matkhau=?";
$stm= $o->prepare($sql);
$stm->execute([$u, $p]);
$n = $stm->rowCount();//tra ve so dong
//echo "n= $n"; exit;
if ($n==0)
{
	header('location:login.html'); exit;
}
$_SESSION['admin']= $stm->fetch();//lay data gan cho session
header('location:index.php');