<?php
$ma=$_GET['maKH'];
include 'connect.php';
$sql1 ="select * from khachhang where maKH='$ma'";
$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);

//echo print_r($data1);
?>
<!-- cập nhật Khách Hàng -->
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
	<form action="xl_capnhatKH.php" method="post"  >
		<h3 class="m-3"> Cập Nhật Sản Phẩm </h3>
	<?php 
		foreach ($data1 as $value) {
		?>
			  <div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Mã KH:</label>
                  <input type="text" class="form-control" name="maKH" value="<?php echo $value['maKH'] ?>">
               </div>
               <div class="form-group col-sm-6">
                  <label >Tên KH</label>
                  <input type="text" class="form-control" name="tenKH" value="<?php echo $value['tenKH'] ?>">
               </div>
            </div>

			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Email:</label>
                  <input type="email" class="form-control" name=email value='<?php echo $value['email'] ?>'>
               </div>
               <div class="form-group col-sm-6">
                  <label >Ngày Sinh :</label>
                  <input type="date" class="form-control" name=ngaySinhKH value='<?php echo $value['ngaySinhKH'] ?>'>
               </div>
            </div>
			<div class="form-row">
               <div class="form-group col-sm-6">
                <label >Giới Tính :</label>
                  <input type="text" class="form-control" name=gioitinh value='<?php echo $value['gioitinh'] ?>'>
               </div>
               <div class="form-group col-sm-6">
                  <label >Số Điện Thoại:</label>
                  <input type="number" class="form-control" name=sodienthoai value='<?php echo $value['sodienthoai'] ?>'>
               </div>
			   
            </div>
               <div class="form-group ">
                  <label >Địa Chỉ:</label>
                  <textarea type="text" class="form-control"  name=diachi ><?php echo $value['diachi'] ?></textarea>
               </div>
					
               
			
			
		<?php
		}
		?>
		
		<input type="submit" class="btn btn-primary mb-3">
	</form>
</div>




</body>
</html>
