<?php
$ma=$_GET['maNSX'];
include 'connect.php';
$sql1 ="select * from nhasx where maNSX='$ma'";

$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);

//echo print_r($data1);
?>
<!-- cập nhật Nhà Cung Cấp -->
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
	<form action="xl_capnhatNCC.php" method="post"  >
		<h3 class="m-3"> Cập Nhật Nhà Cung Cấp </h3>
	<?php 
		foreach ($data1 as $value) {
		?>
			  <div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Mã NCC:</label>
                  <input type="text" class="form-control" name="maNSX" value="<?php echo $value['maNSX'] ?>">
               </div>
               <div class="form-group col-sm-6">
                  <label >Tên NCC</label>
                  <input type="text" class="form-control" name="tenNSX" value="<?php echo $value['tenNSX'] ?>">
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
