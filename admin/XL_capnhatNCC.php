<?php

include 'connect.php';
$m = isset($_POST['maNSX'])?$_POST['maNSX']:'';
$t = isset($_POST['tenNSX'])?$_POST['tenNSX']:'';

$sql= "UPDATE nhasx SET  tenNSX='$t'
 WHERE nhasx.maNSX = $m  " ;
$stm= $o->prepare($sql);
$stm->execute();
//echo print_r($sql);
header('location:nhacungcap.php');