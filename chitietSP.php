<?php
$ma=$_GET['maSP'];
include 'connect.php';
$sql1 ="select * from sanpham where maSP='$ma'";
$sql2="select * from danhmuc"; 	
$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql2);	$data2 = $stm->fetchAll(PDO::FETCH_ASSOC);

//echo print_r($data1);
?>
<!-- chi tiết sản phẩm -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập Nhật Sản Phẩm</title>
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
 
</head>
<body>
<div class="container mt-5 border"style="width:50%;">

		<h3 class="m-3"> chitietSP Sản Phẩm </h3>
	<?php 
		foreach ($data1 as $value) {
		?>
                            <img src="image/anhIphone/<?php echo $value["hinhanh"]?>" class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h6>Tên SP: <?php echo $value['tenSP'] ?></h6>
                                <p>Mã SP <?php echo $value['maSP'] ?></p>
                                <strong class="text-danger ">Giá: <?php echo $value['gia']?></strong>
                                <p>màu: <?php echo $value['mauSP'] ?></p>
                                <p>số lượng:<?php echo $value['soluong'] ?></p>
                            </div>
                            <div class=" pl-2 text-secondary mb-5 " style="height:150px; ">
                                <p>chi tiết SP:<?php echo $value['chitietSP'] ?></p>
                                <p>trạng thái:<?php echo $value['trangthaiSP'] ?></p>
                                MÃ DM:<?php echo $value['maDM']?>
                                </br>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label >Chi Tiết Sản Phảm: <?php echo $value['chitietSP'] ?></label>
                               
                            </div>
                            <a href="XL_giohang.php?action=them&maSP=<?php echo $value['maSP'] ?>"><button type="button" class="btn btn-outline-primary mr-4">Mua</button></a>
		<?php
		}
		?>
		


</div>




</body>
</html>
