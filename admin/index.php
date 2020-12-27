<?php
    include 'connect.php';
    $sql1 ="select * from sanpham";
    $sql2="select * from danhmuc"; 	

    $stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
    $stm= $o->query($sql2);	$data2 = $stm->fetchAll(PDO::FETCH_ASSOC);
 
    if (!isset($_SESSION)) session_start();
    if (!isset($_SESSION['admin']))
    {
	header('location:login.html'); 
	exit;
    }
//print_r($_SESSION);
?>

 <!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuanLyHeThong</title>
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
<!-- Cột trái -->
<div class="bg-dark" style="float:left;   " >  
            <div class="sidebar-wrapper  border-gray  ">
                <ul style="list-style: none;font-size:15px; width:20%; height:100%; position: fixed;     overflow: auto;"   class="pl-0 material-icons bg-dark " >
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
                    <a class="nav-link text-white" href="indexdangnhap.html"> <img src="../image/hinhanhmenu/icongiohang.jpg" class="rounded-circle" style="width:30px;"> Giỏ Hàng </a>
                </li>


            </ul>
        </div>
        
    
    </nav>

 
     
    <!-- Cột phải -->
    <div style="float:right; width:80%;">
    
   
    <div class="container" >
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-info   border-bottom border-gray" color-on-scroll="500">
                <div class="container-fluid ml-5  ">
                <img src="../image/hinhanhmenu/iconuser.jpg" class="rounded-circle " style="width:35px;"> <?php echo $_SESSION['admin']['tenquantrivien'] ?>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item nav-link border-left ">
                                <a href="logout.php"><button class="  btn btn-danger">Đăng Xuất</button></a>   
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->          
                 
    </div>               
    <!-- Kết thúc cột phải -->
     


<script src="jquery-3.4.1.slim.min.js "></script>
    <script src="popper.min.js "></script>
    <script src="bootstrap.min.js "></script>
</body>
</html>