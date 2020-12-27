<?php
$ma=$_GET['maTT'];
include 'connect.php';
$sql1 ="select * from tintuc where maTT='$ma'";
$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);


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
	<form action="XL_capnhatTT.php" method="post" enctype="multipart/form-data" >
		<h3 class="m-3"> Thêm Sản Phẩm </h3>
        <?php 
		foreach ($data1 as $value) {
		?>

			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Mã TT:</label>
                  <input type="text" class="form-control" name=maTT value="<?php echo $value['maTT']?>" >
               </div>
               <div class="form-group col-sm-6">
                  <label >Tiêu Đề:</label>
                  <input type="text" class="form-control" name=tieude value="<?php echo $value['tieude']?>">
               </div>
            </div>
            <div class="form-group ">
                  <label >Nôi Dung</label>
                  <textarea type="text" class="form-control" name="noidung" ><?php echo $value['noidung']?>"</textarea>

            </div>
			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Ngày Đăng Tin:</label>
                  <input type="date" class="form-control" name=ngaydangtin value="<?php echo $value['ngaydangtin']?>">
               </div>
               <div class="form-group col-sm-6">
                  <label >Ngày Hết Hạn :</label>
                  <input type="date" class="form-control" name=thoigianhethan value="<?php echo $value['thoigianhethan']?>" >
               </div>
			   
            </div>
            <div class="form-group">
                  <label class="mr-5">Hình:</label>
                  <input type="file"  name=hinhanh value="<?php echo $value['hinhanh']?>">
            </div>
            <div class="form-group">
                  <label >Tác Giả:</label>
                  <input type="text" class="form-control" name=tacgia value="<?php echo $value['tacgia']?>" >
            </div>
		<?php
        }
        ?>
		<input type="submit" class="btn btn-primary mb-3">
	</form>
</div>




</body>
</html>
