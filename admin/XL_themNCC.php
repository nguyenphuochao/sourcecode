<?php
 include 'connect.php';
function postIndex2($i, $v='')
{
	return isset($_POST[$i])?$_POST[$i]:$v;
}
$datansx =[
	postIndex2('maNSX'),
    postIndex2('tenNSX')
];
$sql2= "INSERT INTO nhasx(maNSX,tenNSX)
 VALUES (?,?)";
$stm2= $o->prepare($sql2);
$stm2->execute($datansx);
header('location:nhacungcap.php');