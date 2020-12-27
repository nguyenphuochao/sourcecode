<?php
    include 'connect.php';
    $sql1 ="select * from tintuc"; 	
    $stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
    if (!isset($_SESSION)) session_start();
    if (!isset($_SESSION['admin']))
    {
	header('location:login.html'); 
	exit;
    }

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
 
  </style>
</head>
<body class="">
 
<div class="bg-dark " style="float:left;   " >  
            <div class="sidebar-wrapper  border-gray   ">
                <ul style="list-style: none;font-size:15px; width:20%; height:100%; position: fixed; overflow: auto; "   class="pl-0 material-icons bg-dark " >
                    <li> 
                    <h4 class="  navbar navbar-expand-lg border-bottom text-white " style="line-height: 39px ; ">
                        Quản Lý Hệ Thống
                        </h4>
                    </li>    
                    <li>
                        <a class=" text-white-50 " href="sanpham.php">
                            <p class="navbar mt-4">Sản Phẩm</p>
                        </a>
                    </li>
                   
                    <li>
                        <a class=" text-white-50" href="khachhang.php">

                            <p class="navbar">Khách Hàng</p>
                        </a>
                    </li>
                    <li>
                        <a class=" text-white-50" href="nhacungcap.php">
                           
                            <p class="navbar">Nhà cung Cấp</p>
                        </a>
                    </li>
                    <li>
                        <a class=" text-white-50" href="donhang.php">
                           
                            <p class="navbar">Đơn Hàng</p>
                        </a>
                    </li>
                    
                    <li>
                        <a class=" text-white-50" href="tintuc.php">
                           
                            <p class="navbar">Tin Tức</p>
                        </a>
                    </li>
                    <li>
                        <a class=" text-white-50" href="lienhe.php">
                           
                            <p class="navbar">Liên Hệ</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
       
        </div>
<!-- Kết thúc cột trái -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-4 " style="float:right; width:80%;">
        <a class="navbar-brand text-danger font-weight-bolder" href="#">NTT SmallPhone</a>
        

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            
            <form class="form-inline  my-lg-0  ">
                <input class="form-control mr-sm-0 ml-5 "size="50   " type="search" placeholder=" Nhập tên điện thoại ,phụ kiện cần tìm" aria-label="Tìm sản phẩm" >
                <button class="btn btn-outline-success  my-sm-0 ml-3" type="submit">Tìm</button>
            </form>
            <ul class="navbar-nav ml-auto">
                

                
                <li class="nav-item">
                    <a class="nav-link text-white" href="dangky.php">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.html">Đăng Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../indexgiohang.php"> <img src="../image/hinhanhmenu/icongiohang.jpg" class="rounded-circle" style="width:30px;"> Giỏ Hàng </a>
                </li>


            </ul>
        </div>
        
    
    </nav>
    <!-- Cột phải -->
    <div style="float:right; width:80%; height:100%;">
    <div class="container ">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-info  border-bottom border-gray" color-on-scroll="500">
                <div class="container-fluid ml-5 ">
                     <h3 class="text-white">Tin Tức </h3> 
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item nav-link">
                            <img src="../image/hinhanhmenu/iconuser.jpg" class="rounded-circle " style="width:35px;"> <?php echo $_SESSION['admin']['tenquantrivien'] ?>
                            </li>
                            <li class="nav-item nav-link">
                                <a class=" text-white" href="themTT.php"><button class="btn btn-danger">Thêm</button>  </a>
                            </li>
                            <li class="nav-item nav-link border-left ">
                                <a href="logout.php"><button class="  btn btn-danger">Đăng Xuất</button></a>   
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
                    <div class="row mt-3"> 
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead class="bg-warning " >
                                            <th>Mã_TT</th>
                                            <th>Tiêu-Đề</th>
                                            <th>NôiDung</th>
                                            <th>Hình</th>
                                            <th>Ngày-Đăng-Tin</th>
                                            <th>Tác-giả</th>
                                            <th>Thời-Gian-Hết-hạn</th> 
                                            <th>CN_Xóa</th>
                                            <th>CN_cậpnhật</th>                                        
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            foreach ($data1 as $key => $value) 
                                            {
                                            ?>
                                            <tr >
                                                <td><?php echo $value['maTT'] ?> </td>
                                                <td><?php echo $value['tieude'] ?></td>
                                                <td><?php echo $value['noidung'] ?></td>
                                                <td><?php echo $value['hinhanh'] ?> </td>
                                                <td><?php echo $value['ngaydangtin'] ?></td>
                                                <td><?php echo $value['tacgia'] ?></td>
                                                <td><?php echo $value['thoigianhethan'] ?> </td>
                                                <td>
                                                    <a href="xoaTT.php?maTT=<?php echo $value['maTT'] ?>"><label class="btn btn-danger">Xóa
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="capnhatTT.php?maTT=<?php echo $value['maTT'] ?>"> <label class="btn btn-primary">cập nhật</label>
                                                   </a>
                                                </td>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                     
                        </div>
                    </div>   
    </div>               
    <!-- Kết thúc cột phải -->
     


<script src="jquery-3.4.1.slim.min.js "></script>
    <script src="popper.min.js "></script>
    <script src="bootstrap.min.js "></script>
</body>
</html>