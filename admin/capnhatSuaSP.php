<?php
$ma=$_GET['maSP'];
include 'connect.php';
$sql1 ="select * from sanpham where maSP='$ma'";
$sql2="select * from danhmuc"; 	
$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql2);	$data2 = $stm->fetchAll(PDO::FETCH_ASSOC);

//echo print_r($data1);
?>
<!-- cập nhật sản phẩm -->
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
	<form action="Xl_capnhatSP.php" method="post"  >
		<h3 class="m-3"> Cập Nhật Sản Phẩm </h3>
	<?php 
		foreach ($data1 as $value) {
		?>
			  <div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Mã SP:</label>
                  <input type="text" class="form-control" name="maSP" value="<?php echo $value['maSP'] ?>">
               </div>
               <div class="form-group col-sm-6">
                  <label >Tên SP</label>
                  <input type="text" class="form-control" name="tenSP" value="<?php echo $value['tenSP'] ?>">
               </div>
            </div>

			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Màu SP:</label>
                  <input type="text" class="form-control" name=mauSP value='<?php echo $value['mauSP'] ?>'>
               </div>
               <div class="form-group col-sm-6">
                  <label >Số Lượng:</label>
                  <input type="text" class="form-control" name=soluong value='<?php echo $value['soluong'] ?>'>
               </div>
            </div>
			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Giá:</label>
                  <input type="text" class="form-control" name=gia value='<?php echo $value['gia'] ?>'>
               </div>
               <div class="form-group col-sm-2">
                  <label >Khuyến Mãi:</label>
                  <input type="text" class="form-control" name=khuyenmai value='<?php echo $value['khuyenmai'] ?>'>
               </div>
			   <div class="form-group col-sm-4">
                  <label >Trạng Thái:</label>
                  <input type="text" class="form-control" name=trangthaiSP value="<?php echo $value['trangthaiSP'] ?>">
               </div>
            </div>
			<div class="form-row">
               <div class="form-group col-sm-4">
                  <label >Hình Ảnh:</label>
                  <img src="../image/anhIphone/<?php echo $value['hinhanh'] ?>"  style="width:100px;height:100px;">
               </div>
               <div class="form-group col-sm-3">
			   <label >Chọn ảnh</label>
                  <input type="text" value="<?php echo $value['hinhanh'] ?>" name=hinhanh >
               </div>
			   
            </div>
			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Chi Tiết Sản Phảm:</label>
                  <textarea type="text" class="form-control"  name=chitietSP ><?php echo $value['chitietSP'] ?></textarea>
               </div>
               <div class="form-group col-sm-4">
                  <label >Danh Mục:</label>
                  <select name=maDM value='<?php echo $value['maDM'] ?>' class="form-control">
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
		<?php
		}
		?>
		
		<input type="submit" class="btn btn-primary mb-3">
	</form>
</div>




</body>
</html>
