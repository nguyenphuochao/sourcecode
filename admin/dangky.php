<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0)
        }
        
        .box {
            width: 500px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            background: #191919;
            ;
            text-align: center;
            transition: 0.25s;
            margin-top: 100px
        }
        
        .box input[type="text"],
        .box input[type="email"],   
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s
        }
        
        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500
        }
        
        .box input[type="text"]:focus,
        .box input[type="email"]:focus,
        .box input[type="password"]:focus {
            width: 300px;
            border-color: #2ecc71
        }
        
        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }
        
        .box input[type="submit"]:hover {
            background: #2ecc71
        }
        
        .forgot {
            text-decoration: underline
        }
        
        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0
        }
        
        ul.social-network li {
            display: inline;
            margin: 0 5px
        }
        
        .social-network a.icoFacebook:hover {
            background-color: #3B5998
        }
        
        .social-network a.icoTwitter:hover {
            background-color: #33ccff
        }
        
        .social-network a.icoGoogle:hover {
            background-color: #BD3518
        }
        
        .social-network a.icoFacebook:hover i,
        .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i {
            color: #fff
        }
        
        a.socialIcon:hover,
        .socialHoverClass {
            color: #44BCDD
        }
        
        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            font-size: 20px
        }
        
        .social-circle li i {
            margin: 0;
            line-height: 50px;
            text-align: center
        }
        
        .social-circle li a:hover i,
        .triggeredHover {
            transform: rotate(360deg);
            transition: all 0.2s
        }
        
        .social-circle i {
            color: #fff;
            transition: all 0.8s;
            transition: all 0.8s
        }
    </style>
</head>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <a class="navbar-brand text-danger font-weight-bolder" href="#">NTT SmallPhone</a>
        

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            
            <form class="form-inline  my-lg-0  ">
                <input class="form-control mr-sm-0 ml-5 "size="50   " type="search" placeholder=" Nhập tên điện thoại ,phụ kiện cần tìm" aria-label="Tìm sản phẩm" >
                <button class="btn btn-outline-success  my-sm-0 ml-3" type="submit">Tìm</button>
            </form>
            <ul class="navbar-nav ml-auto">
                

                
                <li class="nav-item">
                    <a class="nav-link text-white" href="indexdangky.html">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="indexdangnhap.html">Đăng Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../indexgiohang.php"> <img src="../image/hinhanhmenu/icongiohang.jpg" class="rounded-circle" style="width:30px;"> Giỏ Hàng </a>
                </li>


            </ul>
        </div>
        
    
    </nav>

   
     

    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-danger">
                    <form class="box" action="XL_dangky.php" method="POST">
                    <p><?php
                        if(isset($_SESSION["thongbao"])){
                        echo $_SESSION["thongbao"];
                            session_unset();
                     }
                        ?>          
                    </p>
                        <h1>Đăng Ký</h1>
                        <input type="text" placeholder="Tên Đăng Nhập" name=tendangnhap >
                        <input type="password" name='matkhau' placeholder="Mật Khẩu">
                        <input type="password" name='rematkhau' placeholder="Nhập Lại Mật Khẩu">
                        <input type="text"  placeholder="Họ Tên Người Quản Trị" name=tenquantrivien>
                        <input type="submit" name="" value="Gửi" href="#">
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <script src="jquery-3.4.1.slim.min.js "></script>
    <script src="popper.min.js "></script>
    <script src="bootstrap.min.js "></script>
</body>

</html>