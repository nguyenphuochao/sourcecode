<?php

include 'connect.php';
$sql1 ="select * from sanpham";
$sql2="select * from danhmuc"; 		
$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql2);	$data2 = $stm->fetchAll(PDO::FETCH_ASSOC);

//echo print_r($data1);
?>
<!-- Thêm Sản  sản phẩm -->
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
	<form action="xl_themSP.php" method="post" enctype="multipart/form-data" >
		<h3 class="m-3"> Thêm Sản Phẩm </h3>
			  <div class="form-group ">
                  <label >Tên SP</label>
                  <input type="text" class="form-control" name="tenSP" >

            </div>

			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Màu SP:</label>
                  <input type="text" class="form-control" name=mauSP >
               </div>
               <div class="form-group col-sm-6">
                  <label >Số Lượng:</label>
                  <input type="text" class="form-control" name=soluong >
               </div>
            </div>
			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Giá:</label>
                  <input type="text" class="form-control" name=gia >
               </div>
               <div class="form-group col-sm-2">
                  <label >Khuyến Mãi:</label>
                  <input type="text" class="form-control" name=khuyenmai >
               </div>
			   <div class="form-group col-sm-4">
                  <label >Trạng Thái:</label>
                  <input type="text" class="form-control" name=trangthaiSP >
               </div>
            </div>
			<div class="form-row">
               <div class="form-group col-sm-3">
			   <label >Chọn ảnh</label>
                  <input type="file"  name=hinhanh >
               </div>
            </div>
			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Chi Tiết Sản Phảm:</label>
                  <textarea type="text" class="form-control"  name=chitietSP ></textarea>
               </div>
               <div class="form-group col-sm-4">
                  <label >Danh Mục:</label>
                  <select name=maDM  class="form-control">
				  <?php 
					foreach ($data2 as $key => $value) {
						?><option value='<?php echo $value['maDM'] ?>'>
							<?php echo $value['tenDM'] ?>
						</option>
					<?php
					}
					?>
                  </select>
               </div>
            </div>
		<input type="submit" class="btn btn-primary mb-3">
	</form>
</div>




</body>
</html>
