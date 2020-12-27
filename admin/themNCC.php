<?php

include 'connect.php';
?>
<!-- Thêm Nhà Cung Cấp -->
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
	<form action="xl_themNCC.php" method="post" enctype="multipart/form-data" >
		<h3 class="m-3"> Thêm Nhà Cung Cấp</h3>
			  

			<div class="form-row">
               <div class="form-group col-sm-6">
                  <label >Mã NCC:</label>
                  <input type="text" class="form-control" name=maNSX >
               </div>
               <div class="form-group col-sm-6">
                  <label >Tên NCC:</label>
                  <input type="text" class="form-control" name=tenNSX >
               </div>
            </div>
			
		<input type="submit" class="btn btn-primary mb-3">
	</form>
</div>




</body>
</html>
